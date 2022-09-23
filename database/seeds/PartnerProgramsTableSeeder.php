<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\PartnerProgram;

class PartnerProgramsTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            [
                'name_ru' => 'GRACE Дилер',
                'name_en' => 'GRACE Dealer',
                'about_program_ru' => 'Программа развития дилерской сети',
                'about_program_en' => 'Dealer network development program',
                'for_whom_ru' => 'Оптовые компании',
                'for_whom_en' => 'Wholesale companies',
                'advantages_ru' => '<ul align="left"><li>Бесперебойные поставки всего ассортимента смазочных материалов от бренда GRACE</li><li>Техническая поддержка по продукции GRACE от высококвалифицированных специалистов</li><li>Статус официального дилера GRACE, подтверждающийся фирменным сертификатом</li><li>Рекламно-информационные материалы</li><li>Специальные условия сотрудничества</li></ul>',
                'advantages_en' => '<ul align="left"><li>Uninterrupted supply of the entire range of lubricants from the GRACE brand</li><li>Technical support for GRACE products from highly qualified specialists</li><li>The status of an official GRACE dealer, confirmed by a company certificate</li><li>Advertising and information materials</li><li>Special conditions of cooperation</li></ul>'
            ],
            [
                'name_ru' => 'GRACE Processing',
                'name_en' => 'GRACE Processing',
                'about_program_ru' => 'Программа развития контрактного производства',
                'about_program_en' => 'Contract manufacturing development program',
                'for_whom_ru' => 'Оптовые компании, производственные предприятия',
                'for_whom_en' => 'Wholesale companies, manufacturing enterprises',
                'advantages_ru' => '<ul align="left"><li>Изготовление продуктов любого класса и заданных свойств</li><li>Гибкие условия сотрудничества без ограничений по объемам заказов</li><li>Полная техническая и сервисная поддержка на всех этапах производства</li><li>Выгодные конкурентоспособные цены</li><li>Гарантия конфиденциальности и эксклюзивности предоставляемых услуг контрактного производства</li></ul>',
                'advantages_en' => '<ul align="left"><li>Manufacture of products of any class and specified properties</li><li>Flexible terms of cooperation without restrictions on the volume of orders</li><li>Full technical and service support at all stages of production</li><li>Favorable competitive prices</li><li>Guarantee of confidentiality and exclusivity of the provided contract manufacturing services</li></ul>'
            ],
            [
                'name_ru' => 'GRACE CTO',
                'name_en' => 'GRACE CTO',
                'about_program_ru' => 'Программа развития станций технического обслуживания',
                'about_program_en' => 'Service station development program',
                'for_whom_ru' => 'Автосервисы, станции технического обслуживания, пункты замены масла',
                'for_whom_en' => 'Car services, service stations, oil change points',
                'advantages_ru' => '<ul align="left"><li>Бесперебойные поставки всего ассортимента смазочных материалов от бренда GRACE</li><li>Техническая поддержка по продукции GRACE от высококвалифицированных специалистов</li><li>Статус официального пункта замены масла GRACE, подтверждающийся фирменным сертификатом</li><li>Рекламно-информационные материалы</li><li>Совместные акции для повышения продаж продукции GRACE</li></ul>',
                'advantages_en' => '<ul align="left"><li>Uninterrupted supply of the entire range of lubricants from the GRACE brand</li><li>Technical support for GRACE products from highly qualified specialists</li><li>The status of an official GRACE oil change point, confirmed by a company certificate</li><li>Advertising and information materials</li><li>Joint promotions to increase sales of GRACE products</li></ul>'
            ],
            [
                'name_ru' => 'GRACE PTT',
                'name_en' => 'GRACE PTT',
                'about_program_ru' => 'Программа развития продаж в розничных торговых точках',
                'about_program_en' => 'Retail Sales Development Program',
                'for_whom_ru' => 'Сетевые и независимые магазины автозапчастей и автохимии',
                'for_whom_en' => 'Network and independent stores of auto parts and chemicals',
                'advantages_ru' => '<ul align="left"><li>Бесперебойные поставки всего ассортимента смазочных материалов от бренда GRACE</li><li>Техническая поддержка по продукции GRACE от высококвалифицированных специалистов</li><li>Статус официальной точки продаж масел GRACE, подтверждающийся фирменным сертификатом</li><li>Рекламно-информационные материалы</li><li>Совместные акции для повышения продаж продукции GRACE</li></ul>',
                'advantages_en' => '<ul align="left"><li>Uninterrupted supply of the entire range of lubricants from the GRACE brand</li><li>Technical support for GRACE products from highly qualified specialists</li><li>The status of the official point of sale of GRACE oils, confirmed by a company certificate</li><li>Advertising and information materials</li><li>Joint promotions to increase sales of GRACE products</li></ul>'
            ],
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            PartnerProgram::create($item);
        }
    }
}