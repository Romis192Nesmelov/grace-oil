<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Brochure;

class BrochuresTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            [
                'link' => 'brochures/brochure1.pdf',
                'description_ru' => 'Брошюра «Моторные масла GRACE для легкового транспорта»',
                'description_en' => '"GRACE Motor Oils for Passenger Vehicles" brochure"',
            ],
            [
                'link' => 'brochures/brochure2.pdf',
                'description_ru' => 'Брошюра «Моторные масла GRACE для коммерческой техники»',
                'description_en' => '"GRACE Motor Oils for Commercial Vehicles" brochure"',
            ],
            [
                'link' => 'brochures/brochure3.pdf',
                'description_ru' => 'Брошюра «Универсальные масла GRACE для сельскохозяйственной и строительной техники»',
                'description_en' => '"GRACE Multipurpose Oils for Farm and Construction Equipment" brochure"',
            ],
            [
                'link' => 'brochures/brochure4.pdf',
                'description_ru' => 'Брошюра «Смазочные материалы GRACE для мото- и садовой техники»',
                'description_en' => '"GRACE Lubricants for Mechanized and Gardening Equipment" brochure"',
            ],
            [
                'link' => 'brochures/brochure5.pdf',
                'description_ru' => 'Брошюра «Судовые масла GRACE»',
                'description_en' => '"GRACE Marine Oils" brochure"',
            ],

            [
                'link' => 'brochures/brochure7.pdf',
                'description_ru' => 'Брошюра «Индустриальные масла GRACE»',
                'description_en' => '"GRACE Industrial Oils" brochure"',
            ],
            [
                'link' => 'brochures/brochure8.pdf',
                'description_ru' => 'Брошюра «Охлаждающие жидкости GRACE»',
                'description_en' => '"GRACE Coolants" brochure"',
            ],
            [
                'link' => 'brochures/brochure9.pdf',
                'description_ru' => 'Брошюра смазочных материалов GRACE для легкового транспорта',
                'description_en' => 'GRACE lubricants brochure for Passenger Vehicles',
            ],
            [
                'link' => 'brochures/brochure10.pdf',
                'description_ru' => 'Брошюра смазочных материалов GRACE для коммерческой техники',
                'description_en' => 'GRACE lubricants brochure for Passenger Vehicles',
            ],
            [
                'link' => 'brochures/brochure11.pdf',
                'description_ru' => 'Брошюра смазочных материалов GRACE для строительной техники',
                'description_en' => 'GRACE lubricants brochure for Construction Equipment',
            ],
            [
                'link' => 'brochures/brochure12.pdf',
                'description_ru' => 'Брошюра смазочных материалов GRACE для сельскохозяйственной техники',
                'description_en' => 'GRACE lubricants brochure for Agricultural Machinery',
            ],
            [
                'link' => 'brochures/brochure13.pdf',
                'description_ru' => 'Брошюра смазочных материалов GRACE для горнодобывающей техники',
                'description_en' => 'GRACE Lubricants brochure for the Mining Industry',
            ],
            [
                'link' => 'brochures/brochure14.pdf',
                'description_ru' => 'Брошюра смазочных материалов GRACE для лесной промышленности',
                'description_en' => 'GRACE lubricants brochure for the Forest Industry',
            ],
            [
                'link' => 'brochures/brochure15.pdf',
                'description_ru' => 'Брошюра смазочных материалов GRACE для металлургической промышленности',
                'description_en' => 'GRACE lubricants brochure for the Metallurgical Industry',
            ],
            [
                'link' => 'brochures/brochure16.pdf',
                'description_ru' => 'Брошюра смазочных материалов GRACE для машиностроения',
                'description_en' => 'GRACE lubricants brochure for the Metallurgical Industry',
            ],
            [
                'link' => 'brochures/brochure17.pdf',
                'description_ru' => 'Брошюра смазочных материалов GRACE для легкой промышленности',
                'description_en' => 'GRACE lubricants brochure for Light Industry',
            ],
            [
                'link' => 'brochures/brochure18.pdf',
                'description_ru' => 'Брошюра смазочных материалов GRACE для энергетической отрасли',
                'description_en' => 'GRACE lubricants brochure for the Energy Industry',
            ],
            [
                'link' => 'brochures/brochure19.pdf',
                'description_ru' => 'Брошюра смазочных материалов GRACE для судовой промышленности',
                'description_en' => 'GRACE lubricants brochure for the Shipping Industry',
            ],
            [
                'link' => 'brochures/brochure20.pdf',
                'description_ru' => 'Брошюра смазочных материалов GRACE для малоразмерной техники',
                'description_en' => 'GRACE lubricants brochure for Small Engine Vehicles',
            ],
            [
                'link' => 'brochures/catalogue1.pdf',
                'description_ru' => 'Каталог «Смазочные материалы GRACE»',
                'description_en' => 'Catalog Lubricants GRACE',
            ],
            [
                'link' => 'brochures/leaflet1.pdf',
                'description_ru' => 'Лифлет «Моторные масла GRACE для коммерческой техники»',
                'description_en' => 'Leaflet «GRACE engine oils for commercial vehicles»',
            ],
            [
                'link' => 'brochures/leaflet3.pdf',
                'description_ru' => 'Лифлет «Трансмиссионные масла GRACE»',
                'description_en' => 'Leaflet «GRACE motor oils for passenger cars»',
            ],
            [
                'link' => 'brochures/brochure21.pdf',
                'description_ru' => 'Лифлет «Масла GRACE для мото- и садовой техники»',
                'description_en' => 'Leaflet «Gear oils GRACE»',
            ],
            [
                'link' => 'brochures/leaflet4.pdf',
                'description_ru' => 'Брошюра «Смазочные материалы GRACE для малоразмерной техники»',
                'description_en' => 'Leaflet «GRACE Oils for Moto and Garden Equipment»',
            ],
       ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            Brochure::create($item);
        }
    }
}