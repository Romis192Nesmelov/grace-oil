<?php

namespace App\Http\Controllers;
use App\Models\IndustrySolution;
use App\Models\Oil;
use App\Models\Tare;
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
            if (count($advantages) == 1) {
                $advantages = explode(';',$string);
                if (count($advantages) == 1) return '<p>'.$string.'</p>';
            }
            $html = '';
            foreach ($advantages as $k => $advantage) {
                if (!$k) {
                    if (preg_match('/(\:)$/',$advantage)) $html = '<p>'.$advantage.'</p><ul>';
                    else $html = '<ul>';
                }
                $html .= '<li>'.trim($advantage).'</li>';
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
                'GRACE UNIS 75w-90',
                'GRACE ANTIFREEZE -65 G12 red',
                'GRACE ANTIFREEZE -65 G11 green',
                'GRACE FLUID HLP 68'
            ];

            foreach ($rows as $row) {
                $cells = explode('>',$row);

                // Get oil type
                $oilTypeNameRu = str_replace(["\r","\n","\r\n"],'',$cells[0]);
                $oilType = $oilTypes->where('name_ru',$oilTypeNameRu)->first();
                $oilNameRu = $cells[3];
                $oilNameEn = $cells[4];
                $oilUnit = $cells[7];

                // Get subsections
                $subsectionRu = $cells[1];
                $subsectionEn = $cells[2];
                if ($subsectionRu && $subsectionRu != 'empty') {
                    $subsectionKey = str_slug($subsectionEn);
                    if (!isset($subsectionsDone[$subsectionKey])) {
                        if (!$subsection = $subsections->where('name_ru',$subsectionRu)->first()) {
                            $subsection = Subsection::create(['name_ru' => $subsectionRu,'name_en' => $subsectionEn]);
                            $subsectionsDone[$subsectionKey] = $subsection->id;
                        }
                        $subsectionId = $subsection->id;
                    } else $subsectionId = $subsectionsDone[$subsectionKey];
                } else $subsectionId = null;

                // Get base image
                $oilUpperName = strtoupper(str_replace([' ','/','(',')','°','º'], ['_','_','','','',''], $oilNameEn));
                $baseImage = 'images/catalogue/'.$oilType->slug.'/'.$oilUpperName.'.jpg';

                // Get descriptions
                $descriptionRu = '<b>'.$oilNameRu.' – </b>'.$firstCharToLowercase($cells[10]);
                $descriptionEn = '<b>'.$oilNameEn.' is a </b>'.lcfirst($cells[11]);
                
                // Get application
                $applicationRu = $getAdvantages($cells[12]);
                $applicationEn = $getAdvantages($cells[13]);

                // Get advantages
                $advantageRu = $getAdvantages($cells[14]);
                $advantageEn = $getAdvantages($cells[15]);

                // Get viscosity grade
                if ($oilTypeNameRu != 'Пластичные смазки') {
                    $oilNameAPart = explode(' ', $oilNameEn);
                    if (count($oilNameAPart) > 1) {
                        $viscosityGradeName = strtoupper(end($oilNameAPart));
                        if (!isset($viscosityGradesDone[$viscosityGradeName])) {
                            if (!$viscosityGrade = $viscosityGrades->where('name', $viscosityGradeName)->first()) {
                                $viscosityGrade = ViscosityGrade::create(['name' => $viscosityGradeName]);
                                $viscosityGradesDone[$viscosityGradeName] = $viscosityGrade->id;
                            }
                            $viscosityGradeId = $viscosityGrade->id;
                        } else $viscosityGradeId = $viscosityGradesDone[$viscosityGradeName];
                    }
                }

                if (!file_exists(base_path('public/'.$baseImage)) && !in_array($oilNameEn, $exceptingOilImagesBase))
                    dd('Not exist base image', $oilNameEn, $baseImage);

                if (!$oil = Oil::where('name_en',$oilNameEn)->first()) {
                    $oilFields = [
                        'units' => $oilUnit == 'kg',
                        'image' => file_exists(base_path('public/'.$baseImage)) ? $baseImage : 'images/oil_base.jpg',
                        'name_ru' => $oilNameRu,
                        'name_en' => $oilNameEn,
                        'head_ru' => $cells[8] != 'empty' ? $cells[8] : '',
                        'head_en' => $cells[9] != 'empty' ? $cells[9] : '',
                        'description_ru' => $descriptionRu,
                        'description_en' => $descriptionEn,
                        'application_area_ru' => $applicationRu,
                        'application_area_en' => $applicationEn,
                        'advantages_ru' => $advantageRu,
                        'advantages_en' => $advantageEn,
                        'active' => 1,
                        'oil_type_id' => $oilType->id,
                        'viscosity_grade_id' => $viscosityGradeId,
                        'subsection_id' => $subsectionId
                    ];
                    $oil = Oil::create($oilFields);
                }

                // Get tare images
                $defTaresImagesDir = 'images/oil/';

                $taresVals = explode(',',$cells[6]);
                $taresMatrix = ['0_4','1','4','5','10','18','20','180','210','230','1000'];
                if (count($taresVals) != 11) dd('not enough tares', $oilNameEn, $oilNameEn);

                foreach ($taresVals as $k => $tareVal) {
                    if ($k <= 6 && ((int)$tareVal || $tareVal == '0_4')) {
                        $image = 'images/catalogue/'.$oilType->slug.'/packaging/'.$oilUpperName.'/'.str_replace(',','_',$tareVal).$oilUnit.'.jpg';

                        if (
                            !file_exists(base_path('public/'.$image)) &&
                            !in_array($oilNameEn, $exceptingOilImagesBase)
                        ) dd('Not exist tare', $oilNameEn, base_path('public/'.$image));

                        Tare::create([
                            'image' => file_exists(base_path('public/'.$image)) ? $image : $defTaresImagesDir.'oil_'.$tareVal.'jpg',
                            'value' => $taresMatrix[$k],
                            'oil_id' => $oil->id
                        ]);
                    } elseif ($k >= 7 && $k < 10 && (int)$tareVal) {
                        Tare::create([
                            'image' => $defTaresImagesDir.'oil_180kg.jpg',
                            'value' => $taresMatrix[$k],
                            'oil_id' => $oil->id
                        ]);
                    } elseif ((int)$tareVal) {
                        Tare::create([
                            'image' => $defTaresImagesDir.'oil_1000L.jpg',
                            'value' => $taresMatrix[$k],
                            'oil_id' => $oil->id
                        ]);
                    }
                }

                //Get Engine type
                $engineType = $cells[17];
                if ($engineType != 'нет') {
                    $engineTypeNames = explode(',', $engineType);
                    foreach ($engineTypeNames as $engineTypeName) {
                        if (!isset($engineTypesDone[$engineTypeName])) {
                            $engineType = $engineTypes->where('name_ru',$engineTypeName)->first();
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

//                $missingDocsItem = $this->processingDocFiles($docsSuffixes, $oilUpperName, $oilType->slug, $oilType->name_ru,  $oil->id);
//                if (count($missingDocsItem)) $missingDocs[] = $missingDocsItem;

                $this->processingDocFiles($docsSuffixes, $oilUpperName, $oilType->slug, $oilType->name_ru,  $oil->id);
                
                foreach ($specialDocSuffixes as $oilName => $params) {
                    if ($oilName == $oilUpperName) $this->processingDocFiles($params, $oilUpperName, $oilType->slug, $oilType->name_ru, $oil->id);
                    else break;
                }

                //Get tolerances
                foreach (explode(',', $cells[5]) as $toleranceName) {
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
                $industrySolution = $cells[16];
                if ($industrySolution != 'empty') {
                    foreach (explode(',', $industrySolution) as $solutionName) {
                        $solutionName = ucfirst(trim($solutionName));
                        $solution = IndustrySolution::where('name_ru',$solutionName)->first();
                        if (!OilSolution::where('oil_id',$oil->id)->where('industry_solution_id',$solution->id)->first()) {
                            OilSolution::create([
                                'oil_id' => $oil->id,
                                'industry_solution_id' => $solution->id
                            ]);
                        }
                    }
                }
            }

//            $missingString = '';
//            foreach ($missingDocs as $arr) {
//                foreach ($arr as $oilTypeName => $oilArr) {
//                    $missingString .= $oilTypeName.';';
//                    foreach ($oilArr as $oilName => $missDocs) {
//                        $missingString .= $oilName.';';
//                        $docCount = 1;
//                        foreach ($missDocs as $docType) {
//                            if ($docCount == 1 && $docType == 'dc') $missingString .= ';';
//                            elseif ($docCount == 1 && $docType == 'cc') $missingString .= ';;';
//                            $missingString .= $docType.';';
//                            $docCount++;
//                        }
//                    }
//                    $missingString .= "<br>";
//                }
//            }
//            echo $missingString;
        }
//        echo 'Done!';
    }

    private function processingDocFiles($docsSuffixes, $oilUpperName, $oilType, $oilTypeName, $oilId)
    {

        $oilsMissingDocs = [
            'GRACE_CHAIN' => ['cc'],
            'GRACE_CHAIN_S' => ['cc'],
            'GRACE_CHAIN_W' => ['cc'],
            'GRACE_GYP_C_80W-90' => ['cc'],
            'GRACE_UNIS_75W-90' => ['cc'],
            'GRACE_ANTIFREEZE_-65_G12_RED' => ['td','dc','cc'],
            'GRACE_ANTIFREEZE_-65_G11_GREEN' => ['td','dc','cc'],
            'GRACE_ANTIFREEZE_CONCENTRATE_G12_RED' => ['td','dc','cc'],
            'GRACE_ANTIFREEZE_CONCENTRATE_G11_GREEN' => ['td','dc','cc'],
            'LITOL-24' => ['dc','cc'],
            'CIATIM-201' => ['dc','cc'],
            'CIATIM-203' => ['dc','cc'],
            'CIATIM-221' => ['dc','cc'],
            'GRACE_GREASE_SYNTH_LX_EP' => ['td','dc','cc'],
            'GRACE_GREASE_LX_EP' => ['dc','cc'],
            'GRACE_GREASE_L_EP' => ['td','dc','cc'],
            'GRACE_GREASE_SYNTH_MOLY_LX_EP' => ['dc','cc'],
            'GRACE_GREASE_MOLY_LX_300_EP' => ['dc','cc'],
            'GRACE_GREASE_MOLY_EP' => ['dc','cc'],
            'GRACE_GREASE_CARBON' => ['dc','cc'],
            'GRACE_GREASE_NORD' => ['dc','cc'],
            'GRACE_GREASE_POLY-M_EP_2' => ['dc','cc'],
            'GRACE_GREASE_ALUMINIX_EP_2' => ['dc','cc'],
            'GRACE_GREASE_AQUA' => ['td','dc','cc'],
            'GRACE_PEASANT_STOU_SS_5W-30' => ['cc'],
            'GRACE_PEASANT_STOU_C_10W-30' => ['cc'],
            'GRACE_PEASANT_STOU_SS_10W-40' => ['cc'],
            'GRACE_PEASANT_STOU_C_15W-40' => ['cc'],
            'GRACE_PEASANT_UTTO_SS_5W-30' => ['cc'],
            'GRACE_PEASANT_UTTO_C_10W-30' => ['cc'],
            'GRACE_PEASANT_UTTO_SS_10W-40' => ['cc'],
            'GRACE_PEASANT_UTTO_C_15W-40' => ['cc'],
            'GRACE_СТО-4_FS_0W-20' => ['cc'],
            'GRACE_СТО-4_10W' => ['cc'],
            'GRACE_СТО-4_SAE-30' => ['cc'],
            'GRACE_СТО-4_SAE-40' => ['cc'],
            'GRACE_СТО-4_SAE-50' => ['cc'],
            'GRACE_INDUSTRIAL-32' => ['cc'],
            'GRACE_INDUSTRIAL-46' => ['cc'],
            'GRACE_INDUSTRIAL-68' => ['cc'],
            'GRACE_INDUSTRIAL-100' => ['cc'],
            'GRACE_INDUSTRIAL-150' => ['cc'],
            'GRACE_INDUSTRIAL-220' => ['cc'],
            'GRACE_IZOROL-68' => ['cc'],
            'GRACE_IZOROL-220' => ['cc'],
            'GRACE_SPINDLE_2' => ['cc'],
            'GRACE_SPINDLE_5' => ['cc'],
            'GRACE_SPINDLE_7' => ['cc'],
            'GRACE_SPINDLE_10' => ['cc'],
            'GRACE_EP_4_80W-90' => ['cc'],
            'GRACE_EP_4_75W-90' => ['cc'],
            'GRACE_EP_4_75W-80' => ['cc'],
            'GRACE_EP_4+_75W-90' => ['cc'],
            'GRACE_EP_4+_75W-80' => ['cc'],
            'GRACE_GYP_С_85W-140' => ['cc'],
            'GRACE_GYP_С_85W-90' => ['cc'],
            'GRACE_UNIS_75W-90_GL-4_GL-5' => ['td', 'dc', 'cc'],
            'GRACE_GYP_SS_75W-90' => ['cc'],
            'GRACE_GYP_LS_75W-90' => ['cc'],
            'GRACE_GYP_LS_75W-140' => ['cc'],
            'GRACE_GYP_LS_80W-90' => ['cc'],
            'GRACE_GYP_FS_75W-90' => ['cc'],
            'GRACE_GYP_FS_75W-140' => ['cc'],
            'GRACE_GYP_FS_80W-140' => ['cc'],
            'GRACE_ATF_DEX-II' => ['cc'],
            'GRACE_ATF_DEX-III' => ['cc'],
            'GRACE_ATF_FS_DEX_VI' => ['cc'],
            'GRACE_ATF_WS' => ['cc'],
            'GRACE_SUPER_ATF' => ['cc'],
            'GRACE_ATF_ZF_PLUS' => ['cc'],
            'GRACE_ATF_MULTI' => ['cc'],
            'GRACE_PSF' => ['cc'],
            'GRACE_CVT_NS-II' => ['cc'],
            'GRACE_CVT_NS-III' => ['cc'],
            'GRACE_MULTI_CVT' => ['cc'],
            'GRACE_FLUID_HLP_15' => ['cc'],
            'GRACE_FLUID_HLP_22' => ['cc'],
            'GRACE_FLUID_HLP_32' => ['cc'],
            'GRACE_FLUID_HLP_46' => ['cc'],
            'GRACE_FLUID_HLP_100' => ['cc'],
            'GRACE_FLUID_HLP_150' => ['cc'],
            'GRACE_FLUID_HVLP_15' => ['cc'],
            'GRACE_FLUID_HVLP_22' => ['cc'],
            'GRACE_FLUID_HVLP_32' => ['cc'],
            'GRACE_FLUID_HVLP_46' => ['cc'],
            'GRACE_FLUID_HVLP_68' => ['cc'],
            'GRACE_FLUID_HVLP_100' => ['cc'],
            'GRACE_FLUID_ZINCLESS_HLP_15' => ['cc'],
            'GRACE_FLUID_ZINCLESS_HLP_22' => ['cc'],
            'GRACE_FLUID_ZINCLESS_HLP_32' => ['cc'],
            'GRACE_FLUID_ZINCLESS_HLP_46' => ['cc'],
            'GRACE_FLUID_ZINCLESS_HLP_68' => ['cc'],
            'GRACE_FLUID_ZINCLESS_HLP_100' => ['cc'],
            'GRACE_FLUID_ZINCLESS_HVLP_15' => ['cc'],
            'GRACE_FLUID_ZINCLESS_HVLP_22' => ['cc'],
            'GRACE_FLUID_ZINCLESS_HVLP_32' => ['cc'],
            'GRACE_FLUID_ZINCLESS_HVLP_46' => ['cc'],
            'GRACE_FLUID_ZINCLESS_HVLP_68' => ['cc'],
            'GRACE_FLUID_ZINCLESS_HVLP_100' => ['cc'],
            'GRACE_FLUID_HLP_68' => ['cc'],
            'GRACE_FLUID_ARCTIC_10_-65C' => ['cc'],
            'GRACE_FLUID_ARCTIC_15_-65C' => ['cc'],
            'GRACE_FLUID_ARCTIC_22_-65C' => ['cc'],
            'GRACE_FLUID_ARCTIC_32_-60C' => ['cc'],
            'GRACE_FLUID_ARCTIC_46_-55C' => ['cc'],
            'GRACE_FLUID_POLAR_PLUS_22' => ['cc'],
            'GRACE_FLUID_POLAR_PLUS_32' => ['cc'],
            'GRACE_FLUID_POLAR_PLUS_46' => ['cc'],
            'GRACE_TURBINE_32' => ['cc'],
            'GRACE_TURBINE_46' => ['cc'],
            'GRACE_TURBINE_68' => ['cc'],
            'GRACE_TURBINE_EP_32' => ['cc'],
            'GRACE_TURBINE_EP_46' => ['cc'],
            'GRACE_GEAR_68' => ['cc'],
            'GRACE_GEAR_100' => ['cc'],
            'GRACE_GEAR_150' => ['cc'],
            'GRACE_GEAR_220' => ['cc'],
            'GRACE_GEAR_320' => ['cc'],
            'GRACE_GEAR_460' => ['cc'],
            'GRACE_GEAR_680' => ['cc'],
            'GRACE_GEAR_S_68' => ['cc'],
            'GRACE_GEAR_S_100' => ['cc'],
            'GRACE_GEAR_S_150' => ['cc'],
            'GRACE_GEAR_S_220' => ['cc'],
            'GRACE_GEAR_S_320' => ['cc'],
            'GRACE_GEAR_S_460' => ['cc'],
            'GRACE_GEAR_S_680' => ['cc'],
            'GRACE_GEAR_FS_220' => ['cc'],
            'GRACE_GEAR_FS_320' => ['cc'],
            'GRACE_COMP_RC-32' => ['cc'],
            'GRACE_COMP_RC-46' => ['cc'],
            'GRACE_COMP_RC-68' => ['cc'],
            'GRACE_COMP_RS-32' => ['cc'],
            'GRACE_COMP_RS-46' => ['cc'],
            'GRACE_COMP_RS-68' => ['cc'],
            'GRACE_COMP_PC-68' => ['cc'],
            'GRACE_COMP_PC-100' => ['cc'],
            'GRACE_COMP_PC-150' => ['cc'],
            'GRACE_COMP_PS-68' => ['cc'],
            'GRACE_COMP_PS-100' => ['cc'],
            'GRACE_COMP_PS-150' => ['cc'],
            'GRACE_ANTIFREEZE_-40_G12_RED' => ['cc'],
            'GRACE_ANTIFREEZE_-40_G11_GREEN' => ['cc'],
            'GRACE_ANTIFREEZE-40_G11_HD' => ['cc'],
            'GRACE_ANTIFREEZE-40_G12_HD' => ['cc'],
            'GRACE_TOSOL-40' => ['cc']
        ];

//        $missingDocs = [];

        $docFiles = 'documentations/';
        $pathToDocs = 'public/'.$docFiles.$oilType.'/'.$oilUpperName;

        foreach ($docsSuffixes as $docType => $description) {
            $docHref = $pathToDocs.'_'.$docType.'.pdf';
            if (file_exists(base_path($docHref))) {
                if (!Documentation::where('href',$docHref)->first()) {
                    Documentation::create([
                        'href' => $docHref,
                        'name_ru' => $description['ru'],
                        'name_en' => $description['en'],
                        'oil_id' => $oilId
                    ]);
                }
            } elseif (!in_array($oilUpperName, array_keys($oilsMissingDocs)) || (isset($oilsMissingDocs[$oilUpperName]) && !in_array($docType, $oilsMissingDocs[$oilUpperName]))) {
                dd('Missing documentation', $oilUpperName, base_path($docHref));
//                if (!isset($missingDocs[$oilTypeName])) $missingDocs[$oilTypeName] = [];
//                if (!isset($missingDocs[$oilTypeName][$oilUpperName])) $missingDocs[$oilTypeName][$oilUpperName] = [];
//                $missingDocs[$oilTypeName][$oilUpperName][] = $docType;
            }
        }
//        return $missingDocs;
    }
}
