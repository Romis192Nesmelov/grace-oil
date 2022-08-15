<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Manager;

class ManagerTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            ['controller' => 'StaticController', 'method' => '_default'],
            ['controller' => 'NewsController', 'method' => '_default'],
        ];
        
        foreach ($data as $item) {
            Manager::create($item);
        }
    }
}