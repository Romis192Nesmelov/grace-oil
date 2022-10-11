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
                'name_ru' => 'Бензиновый',
                'name_en' => 'Petrol'
            ],
            [
                'name_ru' => 'Дизельный',
                'name_en' => 'Diesel'
            ],
            [
                'name_ru' => 'Газовый',
                'name_en' => 'Gas'
            ],
            [
                'name_ru' => 'Газовый на пропано-бутановой смеси',
                'name_en' => 'Gas propane-butane mixture'
            ],
        ];

        foreach ($data as $item) {
            EngineType::create($item);
        }
    }
}