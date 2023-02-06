<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            [
                'email' => 'romis.nesmelov@gmail.com',
                'password' => bcrypt('apg192')
            ],
            [
                'email' => 'test@grace-oil.com',
                'password' => bcrypt('test')
            ],
            [
                'email' => 'alf@grace-oil.com',
                'password' => bcrypt('alf')
            ],
        ];
        
        foreach ($data as $item) {
            User::create($item);
        }
    }
}