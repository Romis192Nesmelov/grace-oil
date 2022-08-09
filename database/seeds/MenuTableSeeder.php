<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            ['ru' => 'О компании', 'en' => 'About company', 'href' => 1],
            ['ru' => 'О продукции', 'en' => 'About products', 'href' => 0],
            ['ru' => 'Каталог', 'en' => 'Catalogue', 'href' => 1],
            ['ru' => 'Grace Test', 'en' => 'Grace Test', 'href' => 0],
            ['ru' => 'Grace Partner', 'en' => 'Grace Partner', 'href' => 1],
            ['ru' => 'Новости и акции', 'en' => 'News and promotions', 'href' => 1],
            ['ru' => 'Полезная информация', 'en' => 'Useful information', 'href' => 1],
            ['ru' => 'Контакты', 'en' => 'Contacts', 'href' => 1],
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            Menu::create($item);
        }
    }
}