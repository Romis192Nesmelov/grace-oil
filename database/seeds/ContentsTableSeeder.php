<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentsTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            [
                'preview' => 'images/diplomas/certificate.jpeg',
                'full' => 'images/diplomas/certificate.pdf',
                'head_ru' => 'Система менеджмента компании сертифицирована в соответствии с международными стандартами ISO 9001',
                'head_en' => 'The Company Quality Management System was certified in accordance with international standards ISO 9001.',
                'text_ru' => '<p>Сертификат ISO 9001 — это документ, свидетельствующий о том, что на предприятии успешно функционирует система менеджмента качества и проведена сертификация по стандарту ISO 9001 в соответствии с положениями и требованиями международных норм. Данная матрица стандартов обозначается аббревиатурой ISO (International Organization for Standardization), что в переводе означает Международную организацию стандартизации. В России действует русскоязычный аналог международных норм — это национальный стандарт ГОСТ Р ИСО 9001-2015 «Системы менеджмента качества. Требования».</p><p>Сертификация ISO:9001 служит подтверждением тому, что производимая GRACE Lubracants продукция находится в полном соответствии с теми стандартами качества, которые учитываются во всем мире.</p><p>Сертификация ISO:9001 гарантирует:</p><ul class="check-list"><li>Уверенность, что потребитель покупает качественный товар, который не вызовет претензий и нареканий;</li><li>Ответственность компании за здоровье людей и безопасность окружающей среды;</li><li>Эффективность системы менеджмента качества.</li></ul>',
                'text_en' => '<p>Certificate ISO 9001 is a document which evidences the fact that the QMS is successfully operating at the enterprise after completion of certification as per ISO 9001 standard in accordance with provisions and requirements of international regulations. The ISO family of Quality Management Systems (QMSs) is a set of standards abbreviated as ISO (International Organization for Standardization). In Russia there is a Russian version in effect similar to international regulations -GOST R ISO 9001-2015 “Quality Management Systems. Requirements".</p><p>Certification ISO:9001 proves that products manufactured by GRACE Lubracants are fully consistent with those quality standards that are taken into account worldwide.</p><p>Certification ISO:9001 ensures:</p><ul class="check-list"><li>Confidence that a Customer buys quality goods that won\'t make claims and give rise to complaints</li><li>The Company\'s responsibility for human health and environment safety</li><li>QM system performance effectiveness.</li></ul>',
                'sub_menu_id' => 2
            ],
            [
                'text_ru' => '<p>Свои предложения Вы можете направлять по адресу электронной почты <a href="mailto:alk@grace-oil.com">alk@grace-oil.com</a> и специалисты отдела кадров обязательно свяжутся с Вами, если резюме нас заинтересует.</p><p>Все вопросы Вы можете уточнить по телефону: <a href="tel:88002345017">8‑800‑234‑50‑17</a></p>',
                'text_en' => '<p>Please send your proposals to e-mail <a href="mailto:alk@grace-oil.com">alk@grace-oil.com</a> and specialists of the Human Resources Department will contact you if we find your curriculum vitae (CV) interesting.</p><p>In case of any questions, feel free to clarify them by the following phone: <a href="tel:88002345017">8-800-234-50-17</a></p>',
                'sub_menu_id' => 3
            ],
            [
                'preview' => 'images/about_products/policy_preview.jpg',
                'full' => 'images/about_products/policy_full.jpg',
                'text_ru' => '<p>Компания «Грейс Лубрикантс» выпускает широкий ассортимент смазочных материалов, более 100 наименований технических масел и охлаждающих жидкостей. На выбор потребителей смазочные материалы выпускаются в различных видах фасовки: канистры 1 л., 4л., 5л., 20 л., металлические бочки 180 кг., пластиковые кубы 1000 л.</p><p>Продукция GRACE отличается:</p><ul><li>высокой эффективностью;</li><li>соответствием требованиям самых жестких отраслевых стандартов, или превосходит их;</li><li>конкурентоспособной ценой.</li></ul><p>Более 500 товарных позиций позволяют компании «Грейс Лубрикантс» максимально удовлетворить потребности потребителей в высококачественных смазочных материалах.</p><p>Продукция GRACE изготавливается на основе собственной уникальной технологии HDT, проходит испытания в сложных и экстремальных условиях эксплуатации и застрахована в крупнейшей страховой компании «Ренессанс Страхование».</p>','text_en' => '<p>Grace Lubricants makes a wide range of lubricants, more than 100 names of technical oils and coolants. At the Customers option lubricants may be packaged in various containers: 1 l, 4 l, 5 l, 20 l cans; 180 kg metal drums; 1,000l plastic cubes.</p><p>GRACE products are distinguished by:</p><ul><li>High efficiency</li><li>Compliance with the most stringent industry standards or they exceed them</li><li>Competitive prices.</li></ul><p>More than 500 goods items enable Grace Lubricants to meet at maximum Customers needs for high quality lubricants.</p><p>GRACE products are produced based on in house unique HDT technology; the products are subject to tests under severe and extreme conditions of operation; the Company covers its own products by insurance issued by Renaissance Insurance insurance company.</p>',
                'sub_menu_id' => 4
            ],
            [
                'preview' => 'images/grace_products.jpg',
                'text_ru' => '<p>Торговый знак Grace® lubricants был создан и зарегистрирован в 2013 году для выделения высококачественной продукции «Грейс Лубрикантс» среди огромного количества аналогичных продуктов.</p><p>Миссия Торгового знака Grace® lubricants – обеспечение отечественного рынка смазочных материалов продукцией, соответствующей мировым стандартам качества и экологической безопасности по самым доступным ценам. Все смазочные материалы Grace® lubricants производятся с использованием технологии «High Dynamics Technology» из лучших базовых масел и самых современных пакетов присадок мировых производителей. Уникальные технологии производства позволяют превосходить требования ведущих производителей автомобилей, техники и оборудования, а также соответствовать ожиданиям самых требовательных покупателей.</p><p>Компания «Грейс Лубрикантс» строит отношения с поставщиками и клиентами на принципах честной и открытой совместной работы по продвижению продукции GRACE®, дорожит своим именем и уважает своих партнеров. Только взаимопонимание и взаимовыгодное сотрудничество может привести к желаемым результатам.</p><p align="center">Стремясь к совершенству, опережаем лидеров!</p>',
                'text_en' => '<p>Grace® lubricants trademarks was created and registered in 2013 in order to distinguish Grace Lubricants high quality products through a dizzying number of similar products.</p><p>The mission of Grace Lubricants® trademark is to provide the native lubricant market with products that comply with world quality standards and environment safety at the most affordable prices. All Grace® lubricants are manufactured with the use of "High Dynamics Technology" and are made of the best base oils and state of the art additive packages produced by world manufacturers. Unique production processes allow to exceed the requirements of leading manufacturers of vehicles, machinery and equipment and meet the expectations of the most demanding Customers.</p><p>Grace Lubricants builds relationships with Vendors and Customers based on honest and open cooperation to promote GRACE® products, it values ​​its reputation and respects its partners. Only common understanding and mutually beneficial cooperation may yield the desired results.</p><p align="center">Striving for the perfect, we are ahead of leaders!</p>',
                'sub_menu_id' => 5
            ],
            [
                'full' => 'images/industry_solutions/industry_banner.png',
                'head_ru' => 'Смазочные материалы для различных<br>сегментов промышленности',
                'head_en' => 'Lubricants for various<br>industry segments ',
                'text_ru' => '<p>Компания «Грейс Лубрикантс» предлагает готовые комплексные решения для различных отраслей промышленности. Это удалось сделать благодаря высокому качеству продукции GRACE и широкому ассортиментному предложению. Сегодня технические масла и охлаждающие жидкости GRACE поставляются на предприятия горной добычи, металлургической отрасли, энергетики, сельского хозяйства, автотранспортные предприятия и многие другие сегменты промышленности. Применение смазочных материалов GRACE позволит Вашему предприятию сократить затраты на обслуживание, продлить срок службы и эксплуатации Вашего оборудования, и в целом улучшить экономику предприятия.</p><p>Компания «Грейс Лубрикантс» постоянно проводит лабораторные и опытно-промышленные исследования, направленные на улучшение и разработку смазочных материалов соответствующих требованиям потребителей.</p>',
                'text_en' => '<p>Grace Lubricants offers complete turnkey solutions for various industries. This was done thanks to the high quality of GRACE products and a wide range of products. Today, GRACE technical oils and coolants are supplied to mining, metallurgical, energy, agricultural, automotive and many other industries. The use of GRACE lubricants will allow your enterprise to reduce maintenance costs, extend the life and operation of your equipment, and generally improve the economy of the enterprise.</p><p>Grace Lubricants is constantly conducting laboratory and pilot-industrial research aimed at improving and developing lubricants that meet customer requirements.</p>',
                'sub_menu_id' => 6
            ]
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            Content::create($item);
        }
    }
}