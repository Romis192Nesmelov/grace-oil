<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            ['ru' => 'О компании', 'en' => 'About company', 'href' => 0],
            ['ru' => 'О продукции', 'en' => 'About products', 'href' => 0],
            ['ru' => 'Каталог', 'en' => 'Catalogue', 'href' => 1, 'use_slug' => 1, 'use_sub_slug' => 1, 'manager_id' => 3],
            ['ru' => 'Grace Тест', 'en' => 'Grace Test', 'href' => 0],
            ['ru' => 'Стать партнером', 'en' => 'Grace Partner', 'href' => 0],
            ['ru' => 'Новости и акции', 'en' => 'News and promotions', 'href' => 1, 'use_slug' => 1, 'manager_id' => 2],
            ['ru' => 'Полезная информация', 'en' => 'Useful information', 'href' => 0],
            ['ru' => 'Где купить?', 'en' => 'Where can I buy?', 'view' => 'where_buy', 'href' => 1, 'use_slug' => 1, 'manager_id' => 5],
            ['ru' => 'Контакты', 'en' => 'Contacts', 'href' => 1, 'view' => 'contacts', 'manager_id' => 1],
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            Menu::create($item);
        }
    }
}