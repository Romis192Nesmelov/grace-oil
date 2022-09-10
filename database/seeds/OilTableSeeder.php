<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Tolerance;
use App\Models\ViscosityGrade;
use App\Models\Oil;
use App\Models\OilTolerance;
use App\Models\Subsection;
use App\Models\Documentation;

class OilTableSeeder extends Seeder
{

    public function run()
    {

        $tolerances = [
            'ACEA A2`96/B2`96',
            'ACEA A3/B3',
            'ACEA A3/B3, E2',
            'ACEA A3/B3/B4',
            'ACEA A3/B4',
            'ACEA A3`96/B3`96',
            'ACEA A3`98/B3`96',
            'ACEA A5/B5',
            'ACEA С3',
            'API SG/CD',
            'API SH/CF',
            'API SJ/CF',
            'API SL/CF',
            'API SM/CF',
            'API SN/CF',
            'BMW Longlife – 01',
            'BMW Longlife – 04',
            'BMW Longlife-01',
            'BMW Longlife-01 FE',
            'BMW-Longlife-98',
            'CCMC G4/D4/PD-2',
            'CCMC G5/G4/D4/PD-2',
            'Fiat 9.55535-G2',
            'Ford WSS-M2C-153C',
            'Ford WSS-M2C-153F',
            'GM Dexos 1',
            'GM Dexos 2',
            'GM LL-B-025',
            'GM-6085-M',
            'Honda',
            'Hyundai/KIA',
            'ILSAC GF-1',
            'ILSAC GF-2',
            'ILSAC GF-5',
            'MB 226.5',
            'MB 229.1',
            'MB 229.3',
            'MB 229.3/229.5',
            'MB 229.31/229.51/229.52',
            'Mazda',
            'Mitsubishi',
            'Nissan/Infiniti',
            'PSA B71 2290',
            'PSA B71 2290/B71 2297',
            'PSA B71 2294',
            'PSA B71 2294/B71 2296',
            'PSA B71 2294/B71 2300',
            'PSA B71 2295',
            'Porsche A40',
            'Porsche C30',
            'Renault RN0700',
            'Renault RN0700/RN0710',
            'Subaru',
            'Suzuki',
            'Toyota/Lexus',
            'Toyota/Lexus RC',
            'VW 500.00',
            'VW 501.00/502.00',
            'VW 501.00/502.00/505.00',
            'VW 501.01',
            'VW 501.01/502.00',
            'VW 504.00/507.00'
        ];

        $subsections = [
            ['name_ru' => 'Масла для направляющих скольжения','name_en' => 'Guide oils'],
            ['name_ru' => 'Шпиндельные масла','name_en' => 'Spindle oils'],
            ['name_ru' => 'Масла для цепных передач','name_en' => 'Chain oils'],
            ['name_ru' => 'Масла для пильных цепей','name_en' => 'Saw chain oils'],
            ['name_ru' => 'STOU','name_en' => 'STOU'],
            ['name_ru' => 'UTTO','name_en' => 'UTTO'],
            ['name_ru' => 'CTO-4','name_en' => 'CTO-4'],
        ];

        $documentationTemplate = [
            'href' => 'brochures/brochure1.pdf',
            'name_ru' => 'Техническое описание',
            'name_en' => 'Technical description'
        ];
        
        foreach ($subsections as $subsection) {
            Subsection::create($subsection);
        }

        foreach ($tolerances as $tolerance) {
            Tolerance::create(['name' => $tolerance]);
        }

        $oilTemplate = [
            'image_base' => 'images/oil/oil_base.jpg',
            'image_1' => 'images/oil/oil_1.jpg',
            'image_4' => 'images/oil/oil_4.jpg',
            'image_20' => 'images/oil/oil_20.jpg',
            'image_180' => 'images/oil/oil_180.jpg',
            'image_1000' => 'images/oil/oil_1000.jpg',
            'name' => 'GRACE Absolute FS 0W-30',
            'head_ru' => 'Синтетическое универсальное моторное масло для бензиновых и дизельных двигателей современных легковых автомобилей',
            'head_en' => 'Synthetic universal engine oil for gasoline and diesel engines of modern passenger cars',
            'description_ru' => '<b>GRACE Absolute FS 0W-30</b> – синтетическое универсальное всесезонное моторное масло премиум класса. Маловязкое масло для новейших моделей бензиновых и дизельных двигателей; многоклапанных, с катализатором, с турбонаддувом и без него. Максимальная защита бензиновых и дизельных двигателей легковой техники. Предназначено для эффективной работы при активном использовании автомобиля, включая резкие ускорения, движение как в условиях города, так и в режиме трассы.',
            'description_en' => '<b>GRACE Absolute FS 0W-30</b> is a premium synthetic multigrade multigrade engine oil. Low-viscosity oil for the latest models of gasoline and diesel engines; multi-valve, with catalyst, with and without turbocharging. Maximum protection for gasoline and diesel engines of passenger vehicles. Designed for efficient operation during active use of the car, including sharp accelerations, driving both in the city and on the highway.',
            'application_area_ru' => 'Для современных высоконагруженных бензиновых и дизельных двигателей, в том числе с турбонаддувом и прямым впрыском легковых автомобилей, внедорожников, микроавтобусов и легких грузовиков, требующих уровень эксплуатационных свойств API SN/CF и ниже.',
            'application_area_en' => 'For modern heavy-duty gasoline and diesel engines, including turbocharged and direct injection passenger cars, SUVs, vans and light trucks that require API SN/CF performance levels and below.',
            'advantages_ru' => '<ul><li>Экономия топлива благодаря своим повышенным смазочным свойствам</li><li>Эффективно нейтрализует нежелательные продукты сгорания, что способствует сохранению экологии</li><li>Превосходные антиокислительные и антикоррозионные свойства</li><li>Легкий запуск холодного двигателя, в том числе и при низких температурах</li><li>Чрезвычайная стойкость к высоким температурам, даже в экстремальных условиях работы двигателя</li></ul>',
            'advantages_en' => '<ul><li>Fuel savings due to its enhanced lubricity</li><li>Effectively neutralizes unwanted combustion products, which contributes to the preservation of the environment</li><li>Excellent anti-oxidation and anti-corrosion properties</li><li>Easy start of a cold engine, even at low temperatures</li><li>Extreme resistance to high temperatures, even under extreme engine operating conditions</li></ul>',
        ];

        $viscosity = [
            '0W-20',
            '0W-30',
            '0W-40',
            '10W-40',
            '15W-40',
            '20W-50',
            '5W-20',
            '5W-30',
        ];
        
        foreach ($viscosity as $item) {
            ViscosityGrade::create(['name' => $item]);
        }

        $toleranceCounter = 1;
        $maxOil = rand(100,200);
        for ($o=0;$o<$maxOil;$o++) {
            $item = $oilTemplate;
            $item['active'] = 1;
            $item['engine_type'] = rand(0,1);
            $item['oil_type_id'] = rand(1,18);
            $item['viscosity_grade_id'] = rand(1,count($viscosity));
            
            if (rand(0,1)) {
                $item['subsection_id'] = rand(1,count($subsections));
            }
            
            $oil = Oil::create($item);
            
            for($t=1;$t<rand(1,3);$t++) {
                
                OilTolerance::create([
                    'oil_id' => $oil->id,
                    'tolerance_id' => $toleranceCounter,
                ]);
                
                if ($toleranceCounter >= count($tolerances)) $toleranceCounter = 0;
                $toleranceCounter++;
            }

            $documentation = $documentationTemplate;
            $documentation['oil_id'] = $oil->id;

            Documentation::create($documentation);
        }
    }
}