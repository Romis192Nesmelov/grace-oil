<?php

//namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\Seeders\ManagerTableSeeder;
use Database\Seeders\MenuTableSeeder;
use Database\Seeders\SubMenuTableSeeder;
use Database\Seeders\SliderTableSeeder;
use Database\Seeders\HomeBlocksTableSeeder;
use Database\Seeders\HistoryPointsTableSeeder;
use Database\Seeders\DiplomasTableSeeder;
use Database\Seeders\ContentsTableSeeder;
use Database\Seeders\VacanciesTableSeeder;
use Database\Seeders\BrochuresTableSeeder;
use Database\Seeders\AboutProductsTableSeeder;
use Database\Seeders\AboutLubricantTableSeeder;
use Database\Seeders\IndustrySolutionsTableSeeder;
use Database\Seeders\OilTypesTableSeeder;
use Database\Seeders\EngineTypesTableSeeder;
use Database\Seeders\OilTableSeeder;
use Database\Seeders\PartnerProgramsTableSeeder;
use Database\Seeders\NewsTableSeeder;
use Database\Seeders\ClassificationsTableSeeder;
use Database\Seeders\ReviewsTableSeeder;

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
        $this->call(ManagerTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(SubMenuTableSeeder::class);
        $this->call(ContentsTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(HomeBlocksTableSeeder::class);
        $this->call(HistoryPointsTableSeeder::class);
        $this->call(DiplomasTableSeeder::class);
        $this->call(VacanciesTableSeeder::class);
        $this->call(BrochuresTableSeeder::class);
        $this->call(AboutProductsTableSeeder::class);
        $this->call(AboutLubricantTableSeeder::class);
        $this->call(IndustrySolutionsTableSeeder::class);
        $this->call(OilTypesTableSeeder::class);
        $this->call(EngineTypesTableSeeder::class);
        $this->call(OilTableSeeder::class);
        $this->call(PartnerProgramsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(ClassificationsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
    }
}
