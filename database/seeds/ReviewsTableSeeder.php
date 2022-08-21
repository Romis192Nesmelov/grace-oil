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
            ['preview' => 'images/reviews/review1_preview.jpg', 'full' => 'images/reviews/review1_full.jpg'],
            ['preview' => 'images/reviews/review2_preview.jpg', 'full' => 'images/reviews/review2_full.pdf'],
            ['preview' => 'images/reviews/review3_preview.jpg', 'full' => 'images/reviews/review3_full.jpg'],
            ['preview' => 'images/reviews/review4_preview.jpg', 'full' => 'images/reviews/review4_full.jpg'],
            ['preview' => 'images/reviews/review5_preview.jpg', 'full' => 'images/reviews/review5_full.pdf'],
            ['preview' => 'images/reviews/review6_preview.jpg', 'full' => 'images/reviews/review6_full.pdf'],
            ['preview' => 'images/reviews/review7_preview.jpg', 'full' => 'images/reviews/review7_full.pdf'],
            ['preview' => 'images/reviews/review8_preview.jpg', 'full' => 'images/reviews/review8_full.pdf'],
            ['preview' => 'images/reviews/review9_preview.jpg', 'full' => 'images/reviews/review9_full.pdf'],
            ['preview' => 'images/reviews/review10_preview.jpg', 'full' => 'images/reviews/review10_full.pdf'],
            ['preview' => 'images/reviews/review11_preview.jpg', 'full' => 'images/reviews/review11_full.jpg'],
        ];
        
        foreach ($dataReviews as $item) {
            $item['active'] = 1;
            Review::create($item);
        }

        $dataSolutions = [
            ['review_id' => 1,'industry_solution_id' => 3],
        ];
    }
}