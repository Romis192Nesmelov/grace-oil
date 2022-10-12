<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
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

class OilTableSeeder extends Seeder
{

    public function run()
    {
        $srcFile = base_path('resources/catalogue.txt');
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
                'GRACE FLUID ZINCLESS HLP 100',
                'GRACE ANTIFREEZE -65 G12 red',
                'GRACE ANTIFREEZE -65 G11 green'
            ];

            $exceptingOilImagesTare = [
                'GRACE perfect FSK 5w-30',
                'GRACE CNG C SAE-40',
                'GRACE INDUSTRIAL-32',
                'GRACE INDUSTRIAL-46',
                'GRACE INDUSTRIAL-68',
                'GRACE INDUSTRIAL-100',
                'GRACE INDUSTRIAL-150',
                'GRACE INDUSTRIAL-220',
                'GRACE IZOROL-68',
                'GRACE IZOROL-220',
                'GRACE SPINDLE 2',
                'GRACE SPINDLE 5',
                'GRACE SPINDLE 7',
                'GRACE SPINDLE 10',
                'GRACE OUTBOARD BIO 2T',
                'GRACE FLUID HLP 15',
                'GRACE FLUID HLP 22',
                'GRACE FLUID HLP 32',
                'GRACE FLUID HLP 46',
                'GRACE FLUID HLP 100',
                'GRACE FLUID HLP 150',
                'GRACE FLUID HVLP 15',
                'GRACE FLUID HVLP 22',
                'GRACE FLUID HVLP 32',
                'GRACE FLUID HVLP 46',
                'GRACE FLUID HVLP 68',
                'GRACE FLUID HVLP 100',
                'GRACE FLUID ZINCLESS HLP 15',
                'GRACE FLUID ZINCLESS HLP 22',
                'GRACE FLUID ZINCLESS HLP 32',
                'GRACE FLUID ZINCLESS HLP 46',
                'GRACE FLUID ZINCLESS HLP 68',
                'GRACE FLUID ZINCLESS HVLP 15',
                'GRACE FLUID ZINCLESS HVLP 22',
                'GRACE FLUID ZINCLESS HVLP 32',
                'GRACE FLUID ZINCLESS HVLP 46',
                'GRACE FLUID ZINCLESS HVLP 68',
                'GRACE FLUID ZINCLESS HVLP 100',
                'GRACE FLUID Arctic 10 (-65°C)',
                'GRACE FLUID Arctic 15 (-65ºC)',
                'GRACE FLUID Arctic 22 (-65ºC)',
                'GRACE FLUID Arctic 32 (-60ºC)',
                'GRACE FLUID Arctic 46 (-55ºC)',
                'GRACE FLUID POLAR Plus 22',
                'GRACE FLUID POLAR Plus 32',
                'GRACE FLUID POLAR Plus 46',
                'GRACE TURBINE 32',
                'GRACE TURBINE 46',
                'GRACE TURBINE 68',
                'GRACE TURBINE EP 32',
                'GRACE TURBINE EP 46',
                'GRACE GEAR 68',
                'GRACE GEAR 100',
                'GRACE GEAR 150',
                'GRACE GEAR 220',
                'GRACE GEAR 320',
                'GRACE GEAR 460',
                'GRACE GEAR 680',
                'GRACE GEAR S 68',
                'GRACE GEAR S 100',
                'GRACE GEAR S 150',
                'GRACE GEAR S 220',
                'GRACE GEAR S 320',
                'GRACE GEAR S 460',
                'GRACE GEAR S 680',
                'GRACE GEAR FS 220',
                'GRACE GEAR FS 320',
                'GRACE COMP RC-32',
                'GRACE COMP RC-46',
                'GRACE COMP RC-68',
                'GRACE COMP RS-32',
                'GRACE COMP RS-46',
                'GRACE COMP RS-68',
                'GRACE COMP PC-68',
                'GRACE COMP PC-100',
                'GRACE COMP PC-150',
                'GRACE COMP PS-68',
                'GRACE COMP PS-100',
                'GRACE COMP PS-150'
            ];

            foreach ($rows as $row) {
                $cells = explode('>',$row);

                // Get oil type
                $oilTypeNameRu = trim(str_replace("\r",'',$cells[0]));
                $oilType = $oilTypes->where('name_ru',$oilTypeNameRu)->first();

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
                $oilUpperName = strtoupper(str_replace([' ','/','(',')','°','º'], ['_','_','','','',''], $cells[3]));
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
                            !in_array($cells[3], $exceptingOilImagesBase) &&
                            !in_array($cells[3], $exceptingOilImagesTare)
                        ) dd($cells, $image);

                        $tares[] = file_exists(base_path('public/'.$image)) ? $image : $docFilesDefImagesDir.'oil_'.$tareVal.'jpg';
                    }
                    elseif ($k >= 6 && $k < 9 && (int)$tareVal) $tares[] = $docFilesDefImagesDir.'oil_180kg.jpg';
                    elseif ((int)$tareVal) $tares[] = $docFilesDefImagesDir.'oil_1000L.jpg';
                    else $tares[] = null;
                }

                //Get Viscosity grade
                $oilNameAPart = explode(' ',$cells[3]);
                $viscosityGradeName = strtoupper(end($oilNameAPart));
                if (!isset($viscosityGradesDone[$viscosityGradeName])) {
                    if (!$viscosityGrade = $viscosityGrades->where('name',$viscosityGradeName)->first()) {
                        $viscosityGrade = ViscosityGrade::create(['name' => $viscosityGradeName]);
                        $viscosityGradesDone[$viscosityGradeName] = $viscosityGrade->id;
                    }
                    $viscosityGradeId = $viscosityGrade->id;
                } else $viscosityGradeId = $viscosityGradesDone[$viscosityGradeName];

                if (!file_exists(base_path('public/'.$baseImage)) && !in_array($cells[3], $exceptingOilImagesBase))
                    dd($cells, $baseImage);

                if (!$oil = Oil::where('name',$cells[3])->first()) {
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
                        'name' => $cells[3],
                        'head_ru' => $cells[6] != 'empty' ? $cells[6] : '',
                        'head_en' => $cells[7] != 'empty' ? $cells[7] : '',
                        'description_ru' => $cells[8],
                        'description_en' => $cells[9],
                        'application_area_ru' => $cells[10],
                        'application_area_en' => $cells[11],
                        'advantages_ru' => $cells[12],
                        'advantages_en' => $cells[13],
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