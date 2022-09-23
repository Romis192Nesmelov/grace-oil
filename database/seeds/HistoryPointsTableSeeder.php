<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\HistoryPoint;

class HistoryPointsTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            [
                'image' => 'images/history/comp_office.png',
                'head_ru' => '2013 – год основания',
                'text_ru' => '8 лет опыта в производстве смазочных материалов на собственном оборудовании.',
                'head_en' => '2013 - year of foundation',
                'text_en' => '8 years experience in the production of lubricants on our own equipment.'
            ],
            [
                'image' => 'images/history/conistra.png',
                'head_ru' => '> 25 групп',
                'text_ru' => 'Более 25 групп технических масел и охлаждающих жидкостей выпускает компания «Грейс Лубрикантс».',
                'head_en' => '> 25 groups',
                'text_en' => 'Grace Lubricants produces more than 25 groups of technical oils and coolants.'
            ],
            [
                'image' => 'images/history/comp_ico_price_list.png',
                'head_ru' => '> 500 SKU',
                'text_ru' => 'Более 500 SKU составляет ассортимент смазочных материалов «Грейс Лубрикантс».',
                'head_en' => '> 500SKU',
                'text_en' => 'More than 500 SKU constitute Grace Lubricants finished lubricant product slate.'
            ],
            [
                'image' => 'images/history/new.png',
                'head_ru' => '> 10 наименований',
                'text_ru' => 'Более 10 новых наименований смазочных материалов ежегодно разрабатывает и внедряет в производство «Грейс Лубрикантс».',
                'head_en' => '> 10 names',
                'text_en' => 'Yearly Grace Lubricants develops and introduces into production more than 10 new names of lubricants.'
            ],
            [
                'image' => 'images/history/comp_ico_russia.png',
                'head_ru' => '50 городов',
                'text_ru' => 'В 50 городах по всей территории России дилеры «Грейс Лубрикантс» реализует продукцию.',
                'head_en' => '50 cities',
                'text_en' => 'Grace Lubricants dealers sell products in 50 cities throughout Russia.'
            ],
            [
                'image' => 'images/history/handshake.png',
                'head_ru' => 'до 10 производств',
                'text_ru' => 'До 10 контрактных производств осуществляет компания «Грейс Лубрикантс» ежегодно. ',
                'head_en' => 'up to 10 productions',
                'text_en' => 'Yearly Grace Lubricants manufactures products within 10 contracts max.'
            ],
            [
                'image' => 'images/history/comp_ico_success.png',
                'head_ru' => '> 35 конференций',
                'text_ru' => 'В более чем 35 конференциях, семинарах, отраслевых выставках принимала участие компания.',
                'head_en' => '> 35 conferences',
                'text_en' => 'The Company took part in more than 35 conferences, workshops, industry exhibitions.'
            ],
            [
                'image' => 'images/history/group.png',
                'head_ru' => '> 250 партнеров',
                'text_ru' => 'Более 250 надежных партнеров и потребителей доверяют компании «Грейс Лубрикантс». ',
                'head_en' => '> 250 partners',
                'text_en' => 'More than 250 trusted partners and Customers place reliance on Grace Lubricants.'
            ],
            [
                'image' => 'images/history/comp_ico_insurance.png',
                'head_ru' => 'Качество застраховано',
                'text_ru' => 'Качество всей продукции GRACE застраховано в крупнейшей страховой компании «Ренессанс Страхование». ',
                'head_en' => 'Quality insured',
                'text_en' => 'GRACE products quality was insured with Renaissance Strakhovanie, an insurance largest company.'
            ],
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            HistoryPoint::create($item);
        }
    }
}