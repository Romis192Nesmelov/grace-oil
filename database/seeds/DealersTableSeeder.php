<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\DealersArea;
use App\Models\Dealer;

class DealersTableSeeder extends Seeder
{

    public function run()
    {
        $areas = [
            [
                'name_ru' => 'Москва и Московская область',
                'name_en' => 'Moscow and Moscow Region'
            ],
            [
                'name_ru' => 'Санкт-Петербург',
                'name_en' => 'Saint Petersburg'
            ],
            [
                'name_ru' => 'Владимир',
                'name_en' => 'Vladimir'
            ],
            [
                'name_ru' => 'Иваново и Ивановская область',
                'name_en' => 'Ivanovo and Ivanovo region'
            ],
            [
                'name_ru' => 'Вологда',
                'name_en' => 'Vologda'
            ],
            [
                'name_ru' => 'Орёл',
                'name_en' => 'Orel'
            ],
            [
                'name_ru' => 'Липецк',
                'name_en' => 'Lipetsk'
            ],
            [
                'name_ru' => 'Пенза',
                'name_en' => 'Penza'
            ],
            [
                'name_ru' => 'Чебоксары',
                'name_en' => 'Cheboksary'
            ],
            [
                'name_ru' => 'Казань',
                'name_en' => 'Kazan'
            ],
            [
                'name_ru' => 'Армавир',
                'name_en' => 'Armavir'
            ],
        ];

        $dealers = [
            [
                'name_ru' => 'ООО «АРТ ОЙЛ ПРЕМЬЕР»',
                'name_en' => 'LLC «Art Oil Prime Minister»',
                'phone'  => '+7 (495) 577-90-90',
                'url' => 'https://totalart.ru/',
                'active' => 1,
                'dealers_area_id' => 1
            ],
            [
                'name_ru' => 'ООО «АВТОМАГ»',
                'name_en' => 'LLC «AUTOMAG»',
                'phone'  => '+7 (499) 426-01-56',
                'url' => 'https://texkom.ru/',
                'active' => 1,
                'dealers_area_id' => 1
            ],
            [
                'name_ru' => 'ООО «КЭМП»',
                'name_en' => 'LLC «KAMP»',
                'phone'  => '+7 (495) 150-40-26',
                'url' => 'https://www.kemp1.ru/ ',
                'active' => 1,
                'dealers_area_id' => 1
            ],
            [
                'name_ru' => 'ООО «Торговый дом Медведь»',
                'name_en' => 'LLC «Trading House Bear»',
                'email' => 'spb@grace-oil.com',
                'active' => 1,
                'dealers_area_id' => 2
            ],
            [
                'name_ru' => 'ООО «ВладМоторз»',
                'name_en' => 'LLC «VladМоторз»',
                'email' => 'vladimir@grace-oil.com',
                'active' => 1,
                'dealers_area_id' => 3
            ],
            [
                'town_ru' => 'Иваново',
                'town_en' => 'Ivanovo',
                'name_ru' => 'ИП Морозова М.А.',
                'name_en' => 'IP Morozova M.A.',
                'email' => 'ivanovo@grace-oil.com',
                'active' => 1,
                'dealers_area_id' => 4
            ],
            [
                'town_ru' => 'Кинешма',
                'town_en' => 'Kineshma',
                'name_ru' => 'ИП Морозова Н.В.',
                'name_en' => 'IP Morozova N.V.',
                'email' => 'kineshma@grace-oil.com',
                'active' => 1,
                'dealers_area_id' => 4
            ],
            [
                'name_ru' => 'ООО «РГ Трейд»',
                'name_en' => 'LLC «RG Trade»',
                'email' => 'vologda@grace-oil.com',
                'active' => 1,
                'dealers_area_id' => 5
            ],
            [
                'name_ru' => 'ИП Пенюшкина',
                'name_en' => 'IP Penyushkina',
                'email' => 'orel@grace-oil.com',
                'active' => 1,
                'dealers_area_id' => 6
            ],
            [
                'name_ru' => 'ООО «ОПТИМА»',
                'name_en' => 'LLC «OPTIMA»',
                'email' => 'lipetsk@grace-oil.com',
                'active' => 1,
                'dealers_area_id' => 7
            ],
            [
                'name_ru' => 'ООО «Транзит»',
                'name_en' => 'LLC «Transit»',
                'email' => 'penza@grace-oil.com',
                'active' => 1,
                'dealers_area_id' => 8
            ],
            [
                'name_ru' => 'ООО «АКБ-СНАБ»',
                'name_en' => 'LLC «AKB-SNAB»',
                'email' => 'cheboksary@grace-oil.com',
                'active' => 1,
                'dealers_area_id' => 9
            ],
            [
                'name_ru' => 'ООО «ТД-Савой»',
                'name_en' => 'LLC «Trade house Savoy»',
                'email' => 'kazan@grace-oil.com',
                'active' => 1,
                'dealers_area_id' => 10
            ],
            [
                'name_ru' => 'ООО «Союз-ВИТАЛ+»',
                'name_en' => 'LLC «Souz-VITAL+»',
                'email' => 'armavir@grace-oil.com',
                'active' => 1,
                'dealers_area_id' => 11
            ],
            [
                'image' => 'logo_ozon.png',
                'name_ru' => 'ОЗОН',
                'name_en' => 'OZON',
                'url' => 'https://www.ozon.ru/seller/ooo-greys-lubrikants-679534/avtomobilnye-motornye-masla-34118/?miniapp=seller_679534',
                'active' => 1,
            ],
            [
                'image' => 'logo_kamp.png',
                'name_ru' => 'КЭМП',
                'name_en' => 'KAMP',
                'url' => 'https://www.kemp1.ru/shops/',
                'active' => 1,
            ],
            [
                'image' => 'logo_texkom.png',
                'name_ru' => 'ТЕХКОМ',
                'name_en' => 'TEXKOM',
                'url' => 'https://texkom.ru/',
                'active' => 1,
            ],
            [
                'image' => 'logo_autoalliance.png',
                'name_ru' => 'АВТОАЛЬЯНС',
                'name_en' => 'AUTOALLIANCE',
                'url' => 'https://www.autoopt.ru/',
                'active' => 1,
            ],
        ];
        
        foreach ($areas as $area) {
            if (!DealersArea::where('name_ru',$area['name_ru'])->first()) DealersArea::create($area);
        }

        foreach ($dealers as $dealer) {
            if (!Dealer::where('name_ru',$dealer['name_ru'])->first()) Dealer::create($dealer);
        }
    }
}