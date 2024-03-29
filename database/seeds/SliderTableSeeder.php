<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Slide;
use App\Models\Menu;
use App\Models\OilType;

class SliderTableSeeder extends Seeder
{

    public function run()
    {
        $menu = Menu::all();
        $oilTypes = OilType::all();
        
        $data = [
            [
                'href' => '/'.$menu[0]->slug,
                'image' => 'images/slider/slide1.png',
                'head_ru' => 'Стремясь к совершенству,<br>опережаем лидеров!',
                'sub_head_ru' => 'Компания Grace Lubricants –',
                'text_ru' => 'Российский производитель смазочных материалов и технических<br> жидкостей премиум класса',
                'head_en' => 'Striving for excellence,<br> ahead of the leaders!',
                'sub_head_en' => ' Grace Lubricants –',
                'text_en' => 'Russian manufacturer of premium lubricants and technical fluids'
            ],
            [
                'href' => '/'.$menu[2]->slug.'/'.$oilTypes[5]->slug,
                'image' => 'images/slider/slide_2.jpg',
                'head_ru' => 'Grace Perfect –',
                'sub_head_ru' => 'моторные масла для<br>коммерческого транспорта',
                'head_en' => 'Grace Perfect –',
                'sub_head_en' => 'Motor oils for<br>Commercial Vehicles'
            ],
            [
                'href' => '/'.$menu[2]->slug.'/'.$oilTypes[3]->slug,
                'image' => 'images/slider/slide_block3.png',
                'head_ru' => 'Grace Absolute –',
                'sub_head_ru' => 'моторные масла<br>для легковых автомобилей',
                'head_en' => 'Grace Absolute –',
                'sub_head_en' => 'Motor oils for<br>Passenger Vehicle'
            ],
            [
                'href' => '/'.$menu[2]->slug.'/'.$oilTypes[11]->slug,
                'image' => 'images/slider/slide_4.jpg',
                'head_ru' => 'Grace –',
                'sub_head_ru' => 'трансмиссионные масла',
                'head_en' => 'Grace –',
                'sub_head_en' => 'Automatic<br>Transmission Oils'
            ],
            [
                'href' => '/'.$menu[2]->slug.'/'.$oilTypes[12]->slug,
                'image' => 'images/slider/grace__05_3.jpg',
                'head_ru' => 'Grace Fluid –',
                'sub_head_ru' => 'гидравлические жидкости',
                'head_en' => 'Grace Fluid –',
                'sub_head_en' => 'Hydraulic Fluids'
            ],
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            Slide::create($item);
        }
    }
}