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
            ['controller' => 'CatalogueController', 'method' => '_default'],
            ['controller' => 'StaticController', 'method' => 'reviews'],
            ['controller' => 'StaticController', 'method' => 'where_buy'],
        ];
        
        foreach ($data as $item) {
            Manager::create($item);
        }
    }
}