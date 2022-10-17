<?php

namespace App\Http\Controllers;
use App\Models\IndustrySolution;
use App\Models\Oil;
use App\Models\Tolerance;
use App\Models\OilType;
use App\Models\Subsection;
use App\Models\EngineType;
use App\Models\OilEngineType;
use App\Models\ViscosityGrade;
use App\Models\Documentation;
use App\Models\OilTolerance;
use App\Models\OilSolution;

class ParserController extends Controller
{
    public function run()
    {
        $srcFile = base_path('resources/catalogue.txt');
        $firstCharToLowercase = function ($string)
        {
            $firstChar = mb_substr($string, 0, 1);
            $firstChar = mb_strtolower($firstChar);
            $otherChars = mb_substr(
                $string,
                1,
                mb_strlen($string)
            );

            return $firstChar . $otherChars;
        };

        $getAdvantages = function ($string)
        {
            $advantages = explode('. ',$string);
            if (count($advantages) == 1) return $string;
            $html = '<ul>';
            foreach ($advantages as $advantage) {
                $html .= '<li>'.$advantage.'.</li>';
            }
            $html .= '</ul>';
            return $html;
        };

        if (file_exists($srcFile)) {
            $rows = explode('$',file_get_contents($srcFile));

            $oilTypes = OilType::all();
            $subsections = Subsection::all();
            $viscosityGrades = ViscosityGrade::all();
            $engineTypes = EngineType::all();
            $tolerances = Tolerance::all();
            $subsectionsDone = [];
            $viscosityGradesDone = [];
            $engineTypesDone = [];
            $tolerancesDone = [];

            $exceptingOilImagesBase = [
                'GRACE ANTIFREEZE -65 G12 red',
                'GRACE ANTIFREEZE -65 G11 green'
            ];

            foreach ($rows as $row) {
                $cells = explode('>',$row);

                // Get oil type
                $oilTypeNameRu = str_replace(["\r","\n","\r\n"],'',$cells[0]);
                $oilType = $oilTypes->where('name_ru',$oilTypeNameRu)->first();
                $oilName = $cells[3];

                // Get subsections
                if ($cells[1] && $cells[1] != 'empty') {
                    $subsectionKey = str_slug($cells[2]);
                    if (!isset($subsectionsDone[$subsectionKey])) {
                        if (!$subsection = $subsections->where('name_ru',$cells[1])->first()) {
                            $subsection = Subsection::create(['name_ru' => $cells[1],'name_en' => $cells[2]]);
                            $subsectionsDone[$subsectionKey] = $subsection->id;
                        }
                        $subsectionId = $subsection->id;
                    } else $subsectionId = $subsectionsDone[$subsectionKey];
                } else $subsectionId = null;

                // Get base image
                $oilUpperName = strtoupper(str_replace([' ','/','(',')','°','º'], ['_','_','','','',''], $oilName));
                $baseImage = 'images/catalogue/'.$oilType->slug.'/'.$oilUpperName.'.jpg';

                // Get tare images
                $tares = [];
                $baseImageTare = 'images/catalogue/'.$oilType->slug.'/packaging/'.$oilUpperName.'/';
                $docFilesDefImagesDir = 'images/oil/';
                $oilUnit = $oilType->slug == 'coolants';

                foreach (explode(',',$cells[5]) as $k => $tareVal) {
                    //Mask 1,4,5,10,20,180,210,230,1000
                    if ($k < 5 && (int)$tareVal) {
                        $image = $baseImageTare.$tareVal.($oilUnit ? 'kg' : 'L').'.jpg';

                        if (
                            !file_exists(base_path('public/'.$image)) &&
                            !in_array($oilName, $exceptingOilImagesBase)
                        ) dd(base_path('public/'.$image));

                        $tares[] = file_exists(base_path('public/'.$image)) ? $image : $docFilesDefImagesDir.'oil_'.$tareVal.'jpg';
                    }
                    elseif ($k >= 6 && $k < 9 && (int)$tareVal) $tares[] = $docFilesDefImagesDir.'oil_180kg.jpg';
                    elseif ((int)$tareVal) $tares[] = $docFilesDefImagesDir.'oil_1000L.jpg';
                    else $tares[] = null;
                }

                // Get descriptions
                $descriptionRu = '<b>'.$oilName.' – </b>'.$firstCharToLowercase($cells[8]);
                $descriptionEn = '<b>'.$oilName.' is a </b>'.lcfirst($cells[9]);

                // Get advantages
                $advantageRu = $getAdvantages($cells[12]);
                $advantageEn = $getAdvantages($cells[13]);

                // Get viscosity grade
                $oilNameAPart = explode(' ',$oilName);
                $viscosityGradeName = strtoupper(end($oilNameAPart));
                if (!isset($viscosityGradesDone[$viscosityGradeName])) {
                    if (!$viscosityGrade = $viscosityGrades->where('name',$viscosityGradeName)->first()) {
                        $viscosityGrade = ViscosityGrade::create(['name' => $viscosityGradeName]);
                        $viscosityGradesDone[$viscosityGradeName] = $viscosityGrade->id;
                    }
                    $viscosityGradeId = $viscosityGrade->id;
                } else $viscosityGradeId = $viscosityGradesDone[$viscosityGradeName];

                if (!file_exists(base_path('public/'.$baseImage)) && !in_array($oilName, $exceptingOilImagesBase))
                    dd($cells, $baseImage);

                if (!$oil = Oil::where('name',$oilName)->first()) {
                    $oilFields = [
                        'units' => $oilUnit,
                        'image_base' => file_exists(base_path('public/'.$baseImage)) ? $baseImage : $docFilesDefImagesDir.'oil_base.jpg',
                        'image_1' => $tares[0],
                        'image_4' => $tares[1],
                        'image_5' => $tares[2],
                        'image_10' => $tares[3],
                        'image_20' => $tares[4],
                        'image_180' => $tares[5],
                        'image_210' => $tares[6],
                        'image_230' => $tares[7],
                        'image_1000' => $tares[8],
                        'name' => $oilName,
                        'head_ru' => $cells[6] != 'empty' ? $cells[6] : '',
                        'head_en' => $cells[7] != 'empty' ? $cells[7] : '',
                        'description_ru' => $descriptionRu,
                        'description_en' => $descriptionEn,
                        'application_area_ru' => $cells[10],
                        'application_area_en' => $cells[11],
                        'advantages_ru' => $advantageRu,
                        'advantages_en' => $advantageEn,
                        'active' => 1,
                        'oil_type_id' => $oilType->id,
                        'viscosity_grade_id' => $viscosityGradeId,
                        'subsection_id' => $subsectionId
                    ];
                    $oil = Oil::create($oilFields);
                }

                //Get Engine type
                if ($cells[15] != 'нет') {
                    $engineTypeNames = explode(',', $cells[15]);
                    foreach ($engineTypeNames as $engineTypeName) {
                        if (!isset($engineTypesDone[$engineTypeName])) {
                            $engineType = $engineTypes->where('name_ru',$engineTypeName)->first();
//                            if (!$engineType) dd($engineTypeName);
                            $engineTypeId = $engineType->id;
                        } else $engineTypeId = $engineTypesDone[$engineTypeName];

                        if (!OilEngineType::where('oil_id',$oil->id)->where('engine_type_id', $engineTypeId)->first()) {
                            OilEngineType::create([
                                'oil_id' => $oil->id,
                                'engine_type_id' => $engineTypeId,
                            ]);
                        }
                    }
                }

                // Get docs
                $docsSuffixes = [
                    'td' => ['ru' => 'Техническое описание', 'en' => 'Technical description'],
                    'dc' => ['ru' => 'Декларация соответствия', 'en' => 'Declaration of Conformity'],
                    'cc' => ['ru' => 'Сертификат соответствия', 'en' => 'Certificate of conformity']
                ];
                $specialDocSuffixes = [
                    'GRACE_PERFECT_FSJ_10W-30' => [
                        'apr' => ['ru' => 'Одобрения Volvo VDS-4, Mack EO-N PP, Renault RLD-3', 'en' => 'Approvals Volvo VDS-4, Mack EO-N PP, Renault RLD-3']
                    ],
                    'GRACE_PERFECT_FLS_5W-30' => [
                        'reg' => ['ru' => 'Регистрация ACEA E6', 'en' => 'Registration ACEA E6']
                    ],
                    'GRACE_PERFECT_FLS_10W-40' => [
                        'reg' => ['ru' => 'Регистрация ACEA E6', 'en' => 'Registration ACEA E6']
                    ],
                    'GRACE_PERFECT_FS_LONG_10W-40' => [
                        'reg' => ['ru' => 'Регистрация ACEA E4, E7', 'en' => 'Registration ACEA E4, E7'],
                        'apr' => ['ru' => 'Одобрение MAN M 3277', 'en' => 'MAN approval M 3277']
                    ],
                    'GRACE_PERFECT_FS_10W-40' => [
                        'reg' => ['ru' => 'Регистрация ACEA E7, A3/B4', 'en' => 'Registration ACEA E7, A3/B4'],
                        'apr' => ['ru' => 'Одобрения Volvo VDS-3, Mack EO-N, Renault RLD-2', 'en' => 'Approvals Volvo VDS-3, Mack EO-N, Renault RLD-2'],
                    ],
                    'GRACE_PERFECT_C_15W-40' => [
                        'reg' => ['ru' => 'Регистрация ACEA E7, A3/B4', 'en' => 'Registration ACEA E7, A3/B4'],
                        'apr' => ['ru' => 'Одобрения Volvo VDS-3, Mack EO-N, Renault RLD-2', 'en' => 'Approvals Volvo VDS-3, Mack EO-N, Renault RLD-2'],
                    ],
                    'GRACE_ABSOLUTE_C3_5W-30' => [
                        'reg' => ['ru' => 'Регистрация ACEA C3', 'en' => 'ACEA C3 registration']
                    ],
                    'GRACE_ABSOLUTE_FS_5W-40' => [
                        'reg' => ['ru' => 'Регистрация ACEA A3/B4', 'en' => 'Registration ACEA A3/B4']
                    ],
                    'GRACE_ABSOLUTE_FFD_5W-30' => [
                        'reg' => ['ru' => 'Регистрация ACEA A5/B5', 'en' => 'Registration ACEA A5/B5']
                    ]
                ];

                $docFiles = 'documentations/';
                $oilDocs = glob(base_path('public/'.$docFiles.$oilType->slug.'/'.$oilUpperName.'*'));
                if (count($oilDocs)) {
                    foreach ($oilDocs as $oilDoc) {
                        $doc = pathinfo($oilDoc);
                        $docType = str_replace('_','',substr($doc['filename'],-3));
                        $docHref = str_replace(base_path('public/'),'',$doc['dirname']).'/'.$doc['basename'];

                        if ($docType == 'reg' || $docType == 'apr') {
                            // adding exstended docs
                            $docUpperName = str_replace('_'.$docType,'',$doc['filename']);
                            if (isset($specialDocSuffixes[$docUpperName])) {
                                $this->findOrCreateDoc(
                                    $docHref,
                                    $specialDocSuffixes[$docUpperName][$docType]['ru'],
                                    $specialDocSuffixes[$docUpperName][$docType]['en'],
                                    $oil->id
                                );
                            }
                        } else {
                            // adding standart docs
                            $this->findOrCreateDoc(
                                $docHref,
                                $docsSuffixes[$docType]['ru'],
                                $docsSuffixes[$docType]['en'],
                                $oil->id
                            );
                        }
                    }
                }

                //Get tolerances
                foreach (explode(',', $cells[4]) as $toleranceName) {
                    $toleranceName = strtoupper(trim($toleranceName));
                    if (!isset($tolerancesDone[$toleranceName])) {
                        if (!$tolerance = $tolerances->where('name',$toleranceName)->first()) {
                            $tolerance = Tolerance::create(['name' => $toleranceName]);
                            $tolerancesDone[$toleranceName] = $tolerance->id;
                        }
                        $toleranceId = $tolerance->id;
                    } else $toleranceId = $tolerancesDone[$toleranceName];

                    if (!OilTolerance::where('oil_id',$oil->id)->where('tolerance_id',$toleranceId)->first()) {
                        OilTolerance::create([
                            'oil_id' => $oil->id,
                            'tolerance_id' => $toleranceId
                        ]);
                    }
                }

                //Get Industry solution
                if ($cells[14] != 'empty') {
                    foreach (explode(',', $cells[14]) as $solutionName) {
                        $solutionName = ucfirst(trim($solutionName));
                        $solution = IndustrySolution::where('name_ru',$solutionName)->first();
//                        if (!$solution) dd($solutionName);
                        if (!OilSolution::where('oil_id',$oil->id)->where('industry_solution_id',$solution->id)->first()) {
                            OilSolution::create([
                                'oil_id' => $oil->id,
                                'industry_solution_id' => $solution->id
                            ]);
                        }
                    }
                }
            }
        }
//        echo 'Done!';
    }

    private function findOrCreateDoc($docHref, $nameRu, $nameEn, $oilId)
    {
        if (!Documentation::where('href',$docHref)->first()) {
            Documentation::create([
                'href' => $docHref,
                'name_ru' => $nameRu,
                'name_en' => $nameEn,
                'oil_id' => $oilId
            ]);
        }
    }
}
