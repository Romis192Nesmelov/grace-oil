<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Tolerance;
use App\Models\ViscosityGrade;
use App\Models\Oil;
use App\Models\OilType;
use App\Models\OilTolerance;
use App\Models\Subsection;
use App\Models\Documentation;
use App\Models\OilSolution;

class OilTableSeeder extends Seeder
{

    public function run()
    {

//        $tolerances = [
//            'ACEA A2`96/B2`96',
//            'ACEA A3/B3',
//            'ACEA A3/B3, E2',
//            'ACEA A3/B3/B4',
//            'ACEA A3/B4',
//            'ACEA A3`96/B3`96',
//            'ACEA A3`98/B3`96',
//            'ACEA A5/B5',
//            'ACEA С3',
//            'API SG/CD',
//            'API SH/CF',
//            'API SJ/CF',
//            'API SL/CF',
//            'API SM/CF',
//            'API SN/CF',
//            'BMW Longlife – 01',
//            'BMW Longlife – 04',
//            'BMW Longlife-01',
//            'BMW Longlife-01 FE',
//            'BMW-Longlife-98',
//            'CCMC G4/D4/PD-2',
//            'CCMC G5/G4/D4/PD-2',
//            'Fiat 9.55535-G2',
//            'Ford WSS-M2C-153C',
//            'Ford WSS-M2C-153F',
//            'GM Dexos 1',
//            'GM Dexos 2',
//            'GM LL-B-025',
//            'GM-6085-M',
//            'Honda',
//            'Hyundai/KIA',
//            'ILSAC GF-1',
//            'ILSAC GF-2',
//            'ILSAC GF-5',
//            'MB 226.5',
//            'MB 229.1',
//            'MB 229.3',
//            'MB 229.3/229.5',
//            'MB 229.31/229.51/229.52',
//            'Mazda',
//            'Mitsubishi',
//            'Nissan/Infiniti',
//            'PSA B71 2290',
//            'PSA B71 2290/B71 2297',
//            'PSA B71 2294',
//            'PSA B71 2294/B71 2296',
//            'PSA B71 2294/B71 2300',
//            'PSA B71 2295',
//            'Porsche A40',
//            'Porsche C30',
//            'Renault RN0700',
//            'Renault RN0700/RN0710',
//            'Subaru',
//            'Suzuki',
//            'Toyota/Lexus',
//            'Toyota/Lexus RC',
//            'VW 500.00',
//            'VW 501.00/502.00',
//            'VW 501.00/502.00/505.00',
//            'VW 501.01',
//            'VW 501.01/502.00',
//            'VW 504.00/507.00'
//        ];

        $groups = [];
        $suffixes = [
            'td' => 'Technical description/Техническое описание',
            'dc' => 'Declaration of Conformity/Декларация соответствия',
            'cc' => 'Declaration of Conformity/Декларация соответствия',
            'reg' => '',
            'apr' => ''
        ];
        $specialDocs = [
            'GRACE_PERFECT_FSJ_10W-30' => [
                'Одобрения Volvo VDS-4, Mack EO-N PP, Renault RLD-3;Approvals Volvo VDS-4, Mack EO-N PP, Renault RLD-3'
            ],
            'GRACE_PERFECT_FLS_5W-30' => [
                'Регистрация ACEA E6;Registration ACEA E6'
            ],
            'GRACE_PERFECT_FLS_10W-40' => [
                'Регистрация ACEA E6;Registration ACEA E6'
            ],
            'GRACE_PERFECT_FS_LONG_10W-40' => [
                'Регистрация ACEA E4, E7;Registration ACEA E4, E7',
                'Одобрение MAN M 3277;MAN approval M 3277'
            ],
            'GRACE_PERFECT_FS_10W-40' => [
                'Одобрения Volvo VDS-3, Mack EO-N, Renault RLD-2;Approvals Volvo VDS-3, Mack EO-N, Renault RLD-2',
                'Регистрация ACEA E7, A3/B4;Registration ACEA E7, A3/B4'
            ],
            'GRACE_PERFECT_C_15W-40' => [
                'Одобрения Volvo VDS-3, Mack EO-N, Renault RLD-2;Approvals Volvo VDS-3, Mack EO-N, Renault RLD-2',
                'Регистрация ACEA E7, A3/B4;Registration ACEA E7, A3/B4'
            ],
            'GRACE_ABSOLUTE_C3_5W-30' => [
                'Регистрация ACEA C3;ACEA C3 registration'
            ],
            'GRACE_ABSOLUTE_FS_5W-40' => [
                'Регистрация ACEA A3/B4;Registration ACEA A3/B4'
            ],
            'GRACE_ABSOLUTE_FFD_5W-30' => [
                'Регистрация ACEA A5/B5;Registration ACEA A5/B5'
            ]
        ];


    }
}