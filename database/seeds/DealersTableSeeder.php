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
                'name_ru' => 'Пермь',
                'name_en' => 'Permian'
            ],
            [
                'name_ru' => 'Уфа',
                'name_en' => 'Ufa'
            ],
            [
                'name_ru' => 'Армавир',
                'name_en' => 'Armavir'
            ],
            [
                'name_ru' => 'Екатеринбург',
                'name_en' => 'Ekaterinburg'
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
                'phone'  => '+7 (495) 926-22-22',
                'url' => 'https://www.kemp103.ru/ ',
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
                'name_ru' => 'ООО «ВЛАД МОТОРС»',
                'name_en' => 'LLC «VLAD MOTORS»',
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
                'name_ru' => 'ООО «Альянс Ойл»',
                'name_en' => 'LLC «Alliance Oil»',
                'email' => 'perm@grace-oil.com',
                'active' => 1,
                'dealers_area_id' => 11
            ],
            [
                'name_ru' => 'ООО ИК «РН-СЕРВИС»',
                'name_en' => 'LLC IC «RN-SERVICE»',
                'phone'  => '+7 (347) 262-95-99',
                'email' => 'ufa@grace-oil.com',
                'active' => 1,
                'dealers_area_id' => 12
            ],
            [
                'name_ru' => 'ООО «Союз-ВИТАЛ+»',
                'name_en' => 'LLC «Souz-VITAL+»',
                'email' => 'armavir@grace-oil.com',
                'active' => 1,
                'dealers_area_id' => 13
            ],
            [
                'name_ru' => 'ТЕКТОР',
                'name_en' => 'TEKTOR',
                'email' => 'ekaterinburg@grace-oil.com',
                'active' => 1,
                'dealers_area_id' => 14
            ],
            [
                'image' => 'logo_ozon.png',
                'name_ru' => 'ОЗОН',
                'name_en' => 'OZON',
                'url' => 'https://www.ozon.ru/seller/ofitsialnyy-distribyutor-total-i-elf-art-oyl-premer-67058/avtotovary-8500/?miniapp=seller_67058&text=grace',
                'active' => 1,
            ],
            [
                'image' => 'logo_kamp.png',
                'name_ru' => 'КЭМП',
                'name_en' => 'KAMP',
                'url' => 'https://kemp103.ru/',
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
            [
                'image' => 'logo_yandex.png',
                'name_ru' => 'Яндекс-маркет',
                'name_en' => 'Yandex-market',
                'url' => 'https://market.yandex.ru/search?businessId=741068&text=grace&allowCollapsing=1&local-offers-first=0',
                'active' => 1,
            ],
            [
                'image' => 'logo_tektor.png',
                'name_ru' => 'ТЕКТОР',
                'name_en' => 'TEKTOR',
                'url' => 'https://tektor.pro',
                'active' => 1,
            ],
        ];
        
        foreach ($areas as $area) {
            DealersArea::create($area);
        }

        foreach ($dealers as $dealer) {
            Dealer::create($dealer);
        }
    }
}