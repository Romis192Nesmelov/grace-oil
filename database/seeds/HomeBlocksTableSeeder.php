<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\HomeBlock;

class HomeBlocksTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            [
                'image' => 'images/home_blocks/home_block1.jpg',
                'head_ru' => 'Продукция GRACE®<br>Качество. Надежность. Ответственность.',
                'text_ru' => '<div class="text-item">Продукция GRACE® – это смазочные материалы высшего качества, которые соответствуют или превышают требования ведущих производителей оборудования и техники.</div><div class="text-item">Основной целью компании «Грейс Лубрикантс» является полноценное и комплексное удовлетворение потребностей потребителей в смазочных материалах, доступных по цене и соответствующих мировым стандартам качества и экологической безопасности.</div>',
                'head_en' => 'GRACE® Products<br>Quality. Reliability. Responsibility.',
                'text_en' => '<div class="text-item">GRACE® Products are top quality lubricants that comply with or exceed the requirements of leading manufacturers of equipment and vehicles.</div><div class="text-item">The main purpose of Grace Lubricants Company is to meaningfully and comprehensively respond to Customers needs for lubricants that have moderate prices and conform to quality and environment safety international standards.</div>'
            ],
            [
                'image' => 'images/home_blocks/home_block2.jpg',
                'head_ru' => 'Производство Grace Lubricants<br>High Dynamics Technology (HDT).',
                'text_ru' => '<div class="text-item">Производство смазочных материалов осуществляется на сертифицированной установке модификаций технических масел по уникальной технологии «High Dynamics Technology».</div><div class="text-item">Полностью автоматизированное производство позволяет выпускать до 100 тонн товарных масел в сутки.</div><div class="text-item">Резервуарный парк на производстве позволяет хранить 200 тонн готовой продукции.</div>',
                'head_en' => 'Grace Lubricants Production<br>High Dynamics Technology (HDT).',
                'text_en' => '<div class="text-item">Lubricants are manufactured at a Certified Technical Oil Modification Unit based on unique High Dynamics Technology.</div><div class="text-item">Fully automated production allows to yield up to 100 tons of finished oils per day.</div><div class="text-item">A tank farm at a production site allows to store up to 200 tons of finished oils.</div>'
            ],
            [
                'image' => 'images/home_blocks/home_block3.png',
                'head_ru' => 'Программа GRACE Test<br>Надежная защита. Увеличенный срок службы.',
                'text_ru' => '<div class="text-item">Программа эксплуатационных испытаний смазочных материалов GRACE Test позволяет определить реальные интервалы замены масла и содержание элементов износа и присадок.</div><div class="text-item">Использование программы GRACE Test позволяет на практике подтвердить высокое качества масел в реальных условиях эксплуатации в технике потребителя, а также определить финансовую выгоду от использования высокотехнологичной и надежной продукции.</div>',
                'head_en' => 'GRACE Test Program<br>Reliable protection. Extended service life.',
                'text_en' => '<div class="text-item">GRACE Lubricant performance test program provides a measure of accomplishable oil replacement intervals and wear element content and additives.</div><div class="text-item">The use of GRACE Lubricant performance test program permits practically to confirm high quality of oils used in the Customer’s vehicles under actual operating condition and identify financial benefits gained from such use of high tech and reliable products as well.</div>'
            ],
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            HomeBlock::create($item);
        }
    }
}