<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Manager;

class ManagerTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            ['controller' => 'StaticController', 'method' => 'aboutCompany'],
            ['controller' => 'StaticController', 'method' => 'achievements'],
            ['controller' => 'StaticController', 'method' => 'vacancies'],
            ['controller' => 'StaticController', 'method' => 'aboutProducts'],
            ['controller' => 'StaticController', 'method' => 'graceLubricants'],
        ];
        
        foreach ($data as $item) {
            Manager::create($item);
        }
    }
}