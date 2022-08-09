<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\SubMenu;

class SubMenuTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            ['ru' => 'О продукции', 'en' => 'About products', 'menu_id' => 2],
            ['ru' => 'О GRACE® Lubricants', 'en' => 'About GRACE® Lubricants', 'menu_id' => 2],
            ['ru' => 'Отраслевые решения', 'en' => 'Industry Solutions', 'menu_id' => 2],

            ['ru' => 'Универсальные моторные масла', 'en' => 'Multipurpose Engine Oils', 'menu_id' => 3],
            ['ru' => 'Оригинальные моторные масла', 'en' => 'Original engine oils',  'menu_id' => 3],
            ['ru' => 'Моторные масла для спортивных автомобилей', 'en' => 'Engine Oils for Sports Cars', 'menu_id' => 3],
            ['ru' => 'Моторные масла для дизельных легковых автомобилей', 'en' => 'Engine Oils for Diesel Passenger Cars', 'menu_id' => 3],
            ['ru' => 'Моторные масла для двигателей работающих на газе', 'en' => 'Engine Oils for Gas Engines', 'menu_id' => 3],
            ['ru' => 'Моторные масла для коммерческой техники', 'en' => 'Engine Oils for Commercial Vehicles', 'menu_id' => 3],
            ['ru' => 'Масла универсальные для сельскохозяйственной и строительной техники', 'en' => 'Multipurpose Oils for Farm and Construction Equipment', 'menu_id' => 3],
            ['ru' => 'Масла для мото- и садовой техники', 'en' => 'Oils for Mechanized and Gardening Equipment', 'menu_id' => 3],
            ['ru' => 'Судовые масла', 'en' => 'Marine oils', 'menu_id' => 3],
            ['ru' => 'Масла для механических трансмиссий, мостов и дифференциалов', 'en' => 'Oils for Mechanical Transmissions, Axles and Compensation Gears', 'menu_id' => 3],
            ['ru' => 'Масла для автоматических трансмиссий', 'en' => 'Automatic Transmission Oils', 'menu_id' => 3],
            ['ru' => 'Трансмиссионные масла для вариаторов', 'en' => 'Transmission Oils for Infinitely Variable Speed ​​Transmissions', 'menu_id' => 3],
            ['ru' => 'Гидравлические жидкости', 'en' => 'Hydraulic fluids', 'menu_id' => 3],
            ['ru' => 'Турбинные масла', 'en' => 'Turbine Oils', 'menu_id' => 3],
            ['ru' => 'Редукторные масла', 'en' => 'Gear Oils', 'menu_id' => 3],
            ['ru' => 'Компрессорные масла', 'en' => 'Compressor Oils', 'menu_id' => 3],
            ['ru' => 'Индустриальные масла', 'en' => 'Industrial Oils', 'menu_id' => 3],
            ['ru' => 'Охлаждающие жидкости', 'en' => 'Coolants', 'menu_id' => 3],

            ['ru' => 'Сотрудничество', 'en' => 'Cooperation', 'menu_id' => 4],
            ['ru' => 'Партнерские программы', 'en' => 'Partner Programs', 'menu_id' => 4],
            ['ru' => 'Наши потребности', 'en' => 'Our Needs', 'menu_id' => 4],

            ['ru' => 'Классификации и стандарты', 'en' => 'Classifications and standards', 'menu_id' => 7],
            ['ru' => 'Маркетинговые материалы', 'en' => 'Marketing materials', 'menu_id' => 7],
            ['ru' => 'Энциклопедия', 'en' => 'Encyclopedia', 'menu_id' => 7]
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            SubMenu::create($item);
        }
    }
}