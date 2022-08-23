<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\OilType;

class OilTypesTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            [
                'name_ru' => 'Масла универсальные для легковых автомобилей, микроавтобусов и внедорожников',
                'name_en' => 'Multipurpose Engine Oils'
            ],
            [
                'name_ru' => 'Оригинальные моторные масла',
                'name_en' => 'Original Engine Oils'
            ],
            [
                'name_ru' => 'Моторные масла для спортивных автомобилей',
                'name_en' => 'Engine Oils for Sports Cars'
            ],
            [
                'name_ru' => 'Моторные масла для дизельных легковых автомобилей',
                'name_en' => 'Engine Oils for Diesel Passenger Cars'
            ],
            [
                'name_ru' => 'Моторные масла для двигателей, работающих на газе',
                'name_en' => 'Engine Oils for Gas Engines'
            ],
            [
                'name_ru' => 'Моторные масла для коммерческой техники',
                'name_en' => 'Engine Oils for Commercial Vehicles'
            ],
            [
                'name_ru' => 'Масла универсальные для сельскохозяйственной и строительной техники',
                'name_en' => 'Multipurpose Oils for Farm and Construction Equipment'
            ],
            [
                'name_ru' => 'Масла для мото- и садовой техники',
                'name_en' => 'Oils for Mechanized and Gardening Equipment'
            ],
            [
                'name_ru' => 'Судовые масла',
                'name_en' => 'Marine Oils'
            ],
            [
                'name_ru' => 'Масла для механических трансмиссий, мостов и дифференциалов',
                'name_en' => 'Oils for Mechanical Transmissions, Axles and Compensation Gears'
            ],
            [
                'name_ru' => 'Масла для автоматических трансмиссий',
                'name_en' => 'Automatic Transmission Oils'
            ],
            [
                'name_ru' => 'Трансмиссионные масла для вариаторов',
                'name_en' => 'Transmission Oils for Infinitely Variable Speed ​​Transmissions'
            ],
            [
                'name_ru' => 'Гидравлические жидкости',
                'name_en' => 'Hydraulic Fluids'
            ],
            [
                'name_ru' => 'Турбинные масла',
                'name_en' => 'Turbine Oils'
            ],
            [
                'name_ru' => 'Редукторные масла',
                'name_en' => 'Gear Oils'
            ],
            [
                'name_ru' => 'Компрессорные масла',
                'name_en' => 'Compressor Oils'
            ],
            [
                'name_ru' => 'Индустриальные масла',
                'name_en' => 'Industrial Oils'
            ],
            [
                'name_ru' => 'Охлаждающие жидкости',
                'name_en' => 'Coolants'
            ],
        ];

        $count = 1;
        foreach ($data as $item) {
            $item['icon'] = 'images/oil_types/icon'.$count.'.png';
            $item['active'] = 1;
            OilType::create($item);
        }
    }
}