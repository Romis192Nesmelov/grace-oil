<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\EngineType;

class EngineTypesTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            [
                'name_ru' => 'бензиновый',
                'name_en' => 'petrol'
            ],
            [
                'name_ru' => 'дизельный',
                'name_en' => 'diesel'
            ],
            [
                'name_ru' => 'газовый',
                'name_en' => 'gas'
            ],
            [
                'name_ru' => 'газовый на пропано-бутановой смеси',
                'name_en' => 'gas propane-butane mixture'
            ],
        ];

        foreach ($data as $item) {
            EngineType::create($item);
        }
    }
}