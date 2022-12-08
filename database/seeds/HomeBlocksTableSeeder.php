<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\HomeBlock;

class HomeBlocksTableSeeder extends Seeder
{

    public function run()
    {
        $menu = Menu::all();
        $data = [
            [
                'image' => 'images/home_blocks/home_block1.jpg',
                'head_ru' => 'Продукция GRACE<br>Качество. Надежность. Ответственность.',
                'text_ru' => '<div class="text-item">Продукция GRACE — это высококачественные смазочные материалы, которые соответствуют требованиям ведущих производителей оборудования и транспортных средств или превышают их.</div><div class="text-item">Миссией ООО «Грейс Лубрикантс» является всестороннее удовлетворение потребностей клиентов в смазочных материалах, доступных по цене и соответствующих международным стандартам качества и экологической безопасности.</div>',
                'head_en' => 'GRACE Products<br>Quality. Reliability. Responsibility.',
                'text_en' => '<div class="text-item">GRACE products are high quality lubricants that meet or exceed the requirements of leading OEMs and vehicles.</div><div class="text-item">The mission of Grace Lubricants LLC is to fully meet the needs of customers in lubricants that are affordable and meet international quality and environmental standards.</div>',
                'button_text_ru' => 'Перейти в каталог',
                'button_text_en' => 'Go to the catalogue',
                'menu_id' => 3
            ],
            [
                'image' => 'images/home_blocks/home_block2.jpg',
                'head_ru' => 'Производство продукции GRACE<br>Запатентованная технология.',
                'text_ru' => '<div class="text-item">Смазочные материалы производятся на сертифицированной установке по модификации технических масел в соответствии с запатентованной уникальной технологией «Комплекс кавитационно-вакуумного смешения вязких жидкостей».</div><div class="text-item">Полностью автоматизированное производство позволяет выпускать более 100 тонн масла в сутки.</div><div class="text-item">Резервуарный парк на производстве обеспечивает хранение свыше 200 тонн готовой продукции.</div>',
                'head_en' => 'Production of GRACE products<br>Patented technology.',
                'text_en' => '<div class="text-item">Lubricants are produced at a certified plant for the modification of technical oils in accordance with the patented unique technology "Complex of cavitation-vacuum mixing of viscous liquids".</div><div class="text-item"> Fully automated production allows the production of more than 100 tons of oil per day.</div><div class="text-item">The production tank farm provides storage for over 200 tons of finished products.</div>',
                'button_text_ru' => 'О продукции',
                'button_text_en' => 'About products',
                'menu_id' => 2
            ],
            [
                'image' => 'images/home_blocks/home_block3.png',
                'head_ru' => 'Программа GRACE Тест<br>Надежная защита. Увеличенный срок службы.',
                'text_ru' => '<div class="text-item">Программа испытаний эксплуатационных характеристик смазочных материалов GRACE позволяет определить фактические интервалы замены масла, а также содержание элементов износа и присадок.</div><div class="text-item">Применение программы эксплуатационных испытаний GRACE позволяет клиентам на практике подтвердить высокое качество масел в реальных условиях эксплуатации, а также определить финансовую выгоду от использования высокотехнологичной и надежной продукции.</div>',
                'head_en' => 'Program GRACE Test<br>Reliable protection. Extended service life.',
                'text_en' => '<div class="text-item">The GRACE Lubricant Performance Test Program allows you to determine actual oil change intervals as well as wear and additive content.</div><div class="text-item">Application of a performance test program GRACE allows customers to confirm the high quality of oils in practice in real operating conditions, as well as determine the financial benefits of using high-tech and reliable products.</div>',
                'button_text_ru' => 'Подробнее',
                'button_text_en' => 'More details',
                'sub_menu_id' => 8
            ],
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            HomeBlock::create($item);
        }
    }
}