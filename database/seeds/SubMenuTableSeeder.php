<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\SubMenu;

class SubMenuTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            ['ru' => 'О компании', 'en' => 'About company', 'menu_id' => 1, 'add_content_model' => '\HistoryPoint', 'view' => 'about_company', 'manager_id' => 1],
            ['ru' => 'Достижения', 'en' => 'Achievements', 'menu_id' => 1, 'add_content_model' => '\Diploma', 'view' => 'achievements', 'manager_id' => 1],
            ['ru' => 'Вакансии', 'en' => 'Vacancies', 'menu_id' => 1, 'add_content_model' => '\Vacancy', 'view' => 'vacancies', 'manager_id' => 1],

            ['ru' => 'О продукции', 'en' => 'About products', 'menu_id' => 2, 'add_content_model' => '\AboutProduct', 'view' => 'about_products', 'manager_id' => 1],
            ['ru' => 'О GRACE® Lubricants', 'en' => 'About GRACE® Lubricants', 'menu_id' => 2, 'add_content_model' => '\AboutLubricant', 'view' => 'about_lubricants', 'manager_id' => 1],
            ['ru' => 'Отраслевые решения', 'en' => 'Industry Solutions', 'menu_id' => 2, 'add_content_model' => '\IndustrySolution', 'slug_model' => '\IndustrySolution', 'view' => 'industry_solutions', 'slug_view' => 'industry_solution', 'manager_id' => 1],

            ['ru' => 'Производство', 'en' => 'Production', 'menu_id' => 4, 'view' => 'production', 'manager_id' => 1],
            ['ru' => 'Программа GRACE Test', 'en' => 'GRACE Test Program', 'menu_id' => 4, 'view' => 'grace_test', 'manager_id' => 1],
            ['ru' => 'Отзывы', 'en' => 'Reviews', 'menu_id' => 4, 'add_content_model' => '\Review', 'view' => 'reviews', 'manager_id' => 1],

            ['ru' => 'Сотрудничество', 'en' => 'Cooperation', 'menu_id' => 5, 'view' => 'cooperation', 'manager_id' => 1],
            ['ru' => 'Партнерские программы', 'en' => 'Partner Programs', 'menu_id' => 5, 'add_content_model' => '\PartnerProgram', 'view' => 'partner_programs', 'manager_id' => 1],
            ['ru' => 'Наши потребности', 'en' => 'Our Needs', 'menu_id' => 5, 'view' => 'our_needs', 'manager_id' => 1],

            ['ru' => 'Классификации и стандарты', 'en' => 'Classifications and standards', 'menu_id' => 7, 'add_content_model' => '\Classification', 'view' => 'classification', 'manager_id' => 1],
            ['ru' => 'Маркетинговые материалы', 'en' => 'Marketing materials', 'menu_id' => 7, 'add_content_model' => '\Brochure', 'view' => 'marketing_materials', 'manager_id' => 1],
            ['ru' => 'Энциклопедия', 'en' => 'Encyclopedia', 'menu_id' => 7, 'view' => 'encyclopedia', 'manager_id' => 1],
            ['ru' => 'Прочая документация', 'en' => 'Other documentation', 'menu_id' => 7, 'view' => 'documentations', 'manager_id' => 1],
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            SubMenu::create($item);
        }
    }
}