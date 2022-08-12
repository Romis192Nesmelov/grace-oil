<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\OilType;

class OilTypesTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            OilType::create($item);
        }
    }
}