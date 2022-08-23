<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\ReviewToSolution;

class ReviewsTableSeeder extends Seeder
{

    public function run()
    {
        $dataReviews = [
            ['name_ru' => 'ООО «Мехземстрой-Липецк»', 'name_en' => 'OOO "Mekhzemstroy-Lipetsk"', 'preview' => 'images/reviews/review1_preview.jpg', 'full' => 'images/reviews/review1_full.jpg'],
            ['name_ru' => 'ЗАО «Шахта Беловская»', 'name_en' => 'CJSC "Mine Belovskaya"', 'preview' => 'images/reviews/review2_preview.jpg', 'full' => 'images/reviews/review2_full.pdf'],
            ['name_ru' => 'ООО «Базис»', 'name_en' => 'OOO "Basis"', 'preview' => 'images/reviews/review3_preview.jpg', 'full' => 'images/reviews/review3_full.jpg'],
            ['name_ru' => 'ООО ТД «Савой»', 'name_en' => 'LLC Trade House "Savoy"', 'preview' => 'images/reviews/review4_preview.jpg', 'full' => 'images/reviews/review4_full.jpg'],
            ['name_ru' => 'ООО «Союз-Витал»', 'name_en' => 'OOO Soyuz-Vital', 'preview' => 'images/reviews/review5_preview.jpg', 'full' => 'images/reviews/review5_full.pdf'],
            ['name_ru' => 'ООО «ТЕХНОСПАРК»', 'name_en' => 'TECHNOSPARK LLC', 'preview' => 'images/reviews/review6_preview.jpg', 'full' => 'images/reviews/review6_full.pdf'],
            ['name_ru' => 'АО «Лабинская Автоколонна 1197» 05.05.2018', 'name_en' => 'JSC "Labinskaya Avtokolonna 1197" 05.05.2018', 'preview' => 'images/reviews/review7_preview.jpg', 'full' => 'images/reviews/review7_full.pdf'],
            ['name_ru' => 'АО «Лабинская Автоколонна 1197» 01.01.2018', 'name_en' => 'JSC "Labinskaya Avtokolonna 1197" 01.01.2018', 'preview' => 'images/reviews/review8_preview.jpg', 'full' => 'images/reviews/review8_full.pdf'],
            ['name_ru' => '«AFTON»', 'name_en' => 'AFTON', 'preview' => 'images/reviews/review9_preview.jpg', 'full' => 'images/reviews/review9_full.pdf'],
            ['name_ru' => 'ОАО «ИПОПАТ»', 'name_en' => 'JSC "IPOPAT"', 'preview' => 'images/reviews/review10_preview.jpg', 'full' => 'images/reviews/review10_full.pdf'],
            ['name_ru' => 'ООО «ТЭКо»', 'name_en' => 'LLC "TEKo"', 'preview' => 'images/reviews/review11_preview.jpg', 'full' => 'images/reviews/review11_full.jpg'],
        ];
        
        foreach ($dataReviews as $item) {
            $item['active'] = 1;
            Review::create($item);
        }

        $dataSolutions = [
            ['review_id' => 1,'industry_solution_id' => 2],
            ['review_id' => 1,'industry_solution_id' => 3],
            ['review_id' => 2,'industry_solution_id' => 2],
            ['review_id' => 4,'industry_solution_id' => 2],
            ['review_id' => 5,'industry_solution_id' => 2],
            ['review_id' => 6,'industry_solution_id' => 2],
            ['review_id' => 7,'industry_solution_id' => 2],
            ['review_id' => 8,'industry_solution_id' => 2],
            ['review_id' => 9,'industry_solution_id' => 2],
            ['review_id' => 10,'industry_solution_id' => 2],
            ['review_id' => 11,'industry_solution_id' => 2],
        ];

        foreach ($dataSolutions as $item) {
            ReviewToSolution::create($item);
        }
    }
}