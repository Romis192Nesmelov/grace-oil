<?php

//namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\Seeders\MenuTableSeeder;
use Database\Seeders\SubMenuTableSeeder;
use Database\Seeders\SliderTableSeeder;
use Database\Seeders\HomeBlocksTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(SubMenuTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(HomeBlocksTableSeeder::class);
    }
}
