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
                'link' => 'brochures/brochure/brochure1.pdf',
                'description_ru' => 'Брошюра «Моторные масла GRACE для легкового транспорта»',
                'description_en' => '"GRACE Motor Oils for Passenger Vehicles" brochure',
            ],
            [
                'link' => 'brochures/brochure/brochure2.pdf',
                'description_ru' => 'Брошюра «Моторные масла GRACE для коммерческой техники»',
                'description_en' => '"GRACE Motor Oils for Commercial Vehicles" brochure',
            ],
            [
                'link' => 'brochures/brochure/brochure3.pdf',
                'description_ru' => 'Брошюра «Универсальные масла GRACE для сельскохозяйственной и строительной техники»',
                'description_en' => '"GRACE Multipurpose Oils for Farm and Construction Equipment" brochure',
            ],
            [
                'link' => 'brochures/brochure/brochure4.pdf',
                'description_ru' => 'Брошюра «Смазочные материалы GRACE для мото- и садовой техники»',
                'description_en' => '"GRACE Lubricants for Mechanized and Gardening Equipment" brochure',
            ],
            [
                'link' => 'brochures/brochure/brochure5.pdf',
                'description_ru' => 'Брошюра «Судовые масла GRACE»',
                'description_en' => '"GRACE Marine Oils" brochure',
            ],
            [
                'link' => 'brochures/brochure/brochure6.pdf',
                'description_ru' => 'Брошюра «Трансмиссионные масла GRACE»',
                'description_en' => '"GRACE Transmission Oils" brochure',
            ],
            [
                'link' => 'brochures/brochure/brochure7.pdf',
                'description_ru' => 'Брошюра «Индустриальные масла GRACE»',
                'description_en' => '"GRACE Industrial Oils" brochure',
            ],
            [
                'link' => 'brochures/brochure/brochure8.pdf',
                'description_ru' => 'Брошюра «Охлаждающие жидкости GRACE»',
                'description_en' => '"GRACE Coolants" brochure',
            ],
       ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            Brochure::create($item);
        }
    }
}