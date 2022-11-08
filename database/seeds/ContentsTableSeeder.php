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
                'full' => 'images/grace_products.jpg',
                'head_ru' => 'Смазочные материалы для различных<br>сегментов промышленности',
                'head_en' => 'Lubricants for various<br>industry segments',
                'text_ru' => '<p>Компания «Грейс Лубрикантс» предлагает готовые комплексные решения для различных отраслей промышленности. Это удалось сделать благодаря высокому качеству продукции GRACE и широкому ассортиментному предложению. Сегодня технические масла и охлаждающие жидкости GRACE поставляются на предприятия горной добычи, металлургической отрасли, энергетики, сельского хозяйства, автотранспортные предприятия и многие другие сегменты промышленности. Применение смазочных материалов GRACE позволит Вашему предприятию сократить затраты на обслуживание, продлить срок службы и эксплуатации Вашего оборудования, и в целом улучшить экономику предприятия.</p><p>Компания «Грейс Лубрикантс» постоянно проводит лабораторные и опытно-промышленные исследования, направленные на улучшение и разработку смазочных материалов соответствующих требованиям потребителей.</p>',
                'text_en' => '<p>Grace Lubricants offers complete turnkey solutions for various industries. This was done thanks to the high quality of GRACE products and a wide range of products. Today, GRACE technical oils and coolants are supplied to mining, metallurgical, energy, agricultural, automotive and many other industries. The use of GRACE lubricants will allow your enterprise to reduce maintenance costs, extend the life and operation of your equipment, and generally improve the economy of the enterprise.</p><p>Grace Lubricants is constantly conducting laboratory and pilot-industrial research aimed at improving and developing lubricants that meet customer requirements.</p>',
                'sub_menu_id' => 6
            ],
            [
                'full' => 'images/productions/productions1.jpg',
                'head_ru' => 'Качество',
                'head_en' => 'Quality',
                'text_ru' => '<p>Компания «Грейс Лубрикантс» является производителем технических масел и жидкостей премиум класса для авто, мото и тяжело-нагруженной техники, а также масел для промышленного оборудования под собственным брендом «GRACE».</p><p>Благодаря прямым поставкам высококачественных базовых масел с российских и зарубежных заводов продукция GRACE отвечает мировым стандартам качества.</p><p>В производстве используются лучшие пакеты присадок от таких компаний как  Lubrizol, Afton и других ведущих мировых производителей.</p><p>Базовые масла используемые компанией позволяют производить смазочные материалы на минеральной, синтетической и полусинтетической основе.</p><p>При производстве продукции «GRACE» активно используются базовые масла IV (ПАО) и V группы (сложные эфиры – эстеры), что значительно увеличивает смазывающие способности масел, обеспечивается широкий температурный диапазон эксплуатации – способность работы при экстремально низких и высоких температурах, и сохраняется высокая стабильность против окисления.</p>',
                'text_en' => '<p>GRACE Lubricants is a manufacturer of technical oils and fluids of premium quality for automobiles, power-operated and heavy duty equipment; the Company also manufactures oils for industrial equipment under its own brand «GRACE».</p><p>GRACE products follow world quality standards thanks to direct deliveries of high quality base oils from Russian and foreign plants..</p><p>For production the best additive packages are used by such companies as Lubrizol, Afton and other world leading manufacturers.</p><p>Base oils used by the Company make it possible to produce mineral-semisynthetic, synthetic- based lubricants.</p><p>For production of GRACE products base oils of the IV-th  (poly alpha olefins) and the V-th (compound ethers) groups are extensively used, thus significantly improving oil lubricating efficiency; wide temperature range of operation is provided for, i.e. there is an ability to operate under extremely low and high temperatures; and oxidation stability is maintained.</p>',
                'sub_menu_id' => 7
            ],
            [
                'full' => 'images/productions/productions2.jpg',
                'head_ru' => 'Технология',
                'head_en' => 'Technology',
                'text_ru' => '<p>Производство смазочных материалов осуществляется на сертифицированной установке модификаций технических масел по уникальной технологии «High Dynamic Technology».</p><p>HDT – результат многолетней работы технологов компании «Грейс Лубрикантс». Преимущества технологии HDT:</p><p>Данный метод можно назвать «биполярной» технологией, т.е. «двойной» технологией, в результате которой происходит не только смешение ингредиентов (базовых масел и присадок на молекулярном уровне, что улучшает однородность смеси), но и на выходе из установки продукция получается положительный заряд, и тем самым улучшается адгезия: масло притягивается к трущимся поверхностям, создавая более прочную масляную пленку.</p><p>Высокая адгезия и прочная масляная пленка обеспечивают уникальную защиту от износа и увеличенный срок эксплуатации масел.</p><p>Для достижения таких характеристик смазочных материалов многие ведущие лидеры этой отрасли используют дополнительные присадки. Благодаря технологии HDT, смазочные материалы «GRACE» значительно превышают требования стандартов и допусков мировых производителей техники и оборудования, сохраняя при этом самые конкурентные цены.</p>',
                'text_en' => '<p>Lubricants are manufactured at a Certified Technical Oil Modification Unit based on unique High Dynamics Technology.</p><p>HDT is s result of Grace Lubricants many years of work. HDT technology advantages:</p><p>This method may be called as «bipolar» technology, i.e. «double» technology that results not only in blending of ingredients (base oils and additives at the molecular level which enhances the blend homogeneity) but products gain positive charge at the Unit outlet improving adhesion in such a way: oil moves towards friction surfaces thus forming a hard oil film.</p><p>High adhesion and hard oil film provide unique protection against wear and extended useful life.</p><p>To achieve such properties of lubricants many leaders of this industry use additional additives. Thanks to HDT technology GRACE lubricants significantly exceed the requirements of standards and tolerances of world manufacturers of machinery and equipment while maintaining the most competitive prices.</p>',
                'sub_menu_id' => 7
            ],
            [
                'full' => 'images/productions/productions3.jpg',
                'head_ru' => 'Лаборатория',
                'head_en' => 'Laboratory',
                'text_ru' => '<p>Собственная лаборатория имеет весь перечень необходимого оборудования для обеспечения входного и выходного контроля сырья и продукции, позволяет проводить полноценные испытания по всем основным типовым характеристикам.</p><p>Основные направления деятельности испытательной лаборатории GRACE:</p><ul><li>анализ качества поступающих на производство сырья материалов – 100% жесткий входной контроль по всех основным параметрам;</li><li>мониторинг качества продукции на всех технологических этапах производства и определение соответствия готовой продукции требованиям ТУ;</li><li>разработка технических условий (ТУ) по новым продуктам.</li></ul>',
                'text_en' => '<div class="col-sm-8" style="margin: 0 0 50px"><p>In house laboratory is equipped with all necessary equipment to provide incoming and outgoing control of feedstock and products; it allows to conduct valid tests of all basic typical characteristics.</p><p>Core business of GRACE test laboratory is as follows:</p><ul><li>Quality analysis of raw materials incoming for production – 100% strict incoming control over all main parameters</li><li>Product quality monitoring at all process phases and verification of compliance of finished products with the Specification requirements</li><li>Development of Specifications (TU) for new products.</li></ul>',
                'sub_menu_id' => 7
            ],
            [
                'full' => 'images/productions/productions4.jpg',
                'head_ru' => 'Индивидуальные решения',
                'head_en' => 'Customized solutions',
                'text_ru' => '<p>Готовое решение или уникальная разработка? Компания «Грейс Лубрикантс» выполняет индивидуальные заказы. Уникальная рецептура специальных масел и жидкостей позволяет удовлетворить самые высокие требования наших клиентов.</p><p>Научно-технический отдел компании проведет разработку опытной партии под конкретные нужды заказчика либо оптимизирует существующий материал.</p><p>После всестороннего изучения задач клиента и условий работы техники, специалисты завода предложат решение, позволяющее продлить срок эксплуатации техники и увеличить межсервисный интервал замены масла, а значит и сохранят время и деньги партнёра.</p>',
                'text_en' => '<p>Customized solution or unique development? Grace Lubricants completes customized orders. Unique formulation of special oils and fluids enables to satisfy the highest expectations of our Customers.</p><p>The Company’s science and engineering department will either develop pilot lots to the Customer’s specific needs or will optimize the existing material.</p><p>Following a comprehensive review of the Customer’s tasks and operation conditions of the equipment, the Plant specialists will offer a solution to extend the equipment service life and intervals of oil replacement, thus saving time and money of the partner.</p>',
                'sub_menu_id' => 7
            ],
            [
                'text_ru' => '<p>Данное соглашение об обработке персональных данных разработано в соответствии с законодательством Российской Федерации.</p><p>Все лица, заполнившие сведения, составляющие персональные данные на сайте <a href="https://grace-oil.com/">https://grace-oil.com/</a>, а также разместившие иную информацию обозначенными действиями, подтверждают свое согласие на обработку персональных данных и их передачу оператору обработки персональных данных – администрации сайта <a href="https://grace-oil.com/">https://grace-oil.com/</a></p><p>Пользователь дает свое согласие на обработку его персональных данных, а именно совершение действий, предусмотренных пунктом 3 части 1 статьи 3 Федерального закона от 27.07.2006 № 152-ФЗ «О персональных данных», и подтверждает, что, давая такое согласие, он действует свободно, своей волей и в своем интересе.</p><p>Целью обработки персональных данных является заключением договора, стороной которого является субъект персональных данных. Персональные данные не распространяются, а также не предоставляются третьим лицам без согласия субъекта персональных данных и используются оператором исключительно для исполнения указанного договора и заключения договоров с субъектом персональных данных.</p><p>Под персональными данными понимается информация, заполняемая Пользователем при регистрации в соответствующих полях формы регистрации, к которой относится: Ф.И.О., e-mail, номер телефона, а также информация, предоставляемая Пользователями при осуществлении иных действий, связанных с использованием Сайта.</p><p>Пользователь, принимая условия настоящего Соглашения, выражает свою заинтересованность и дает полное согласие, что обработка его персональных данных включает в себя следующие действия: сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (предоставление доступа), обезличивание, блокирование, удаление, уничтожение персональных данных.</p><p>Указанное согласие действует бессрочно с момента предоставления данных и может быть отозвано Пользователем путем подачи письменного заявления администрации сайта с указанием данных, определенных Федерального закона №152-ФЗ статьей 14 «О персональных данных» на имя Администратор сайта <a href="https://grace-oil.com/">https://grace-oil.com/</a>.</p><p>В случае отзыва Пользователем согласия на обработку персональных данных Оператор вправе продолжить обработку персональных данных без согласия Пользователя при наличии основание, указанных в пунктах 2-11 части 1 статьи 6, части 2 статьи 10 и части 2 статьи 11 Федерального закона №152-ФЗ «О персональных данных».</p><p>Персональные данные, указанные Пользователем Сайта, хранятся в информационной системе персональных данных сайта <a href="https://grace-oil.com/"></a>.</p><p>Обработка персональных данных осуществляется Оператором в соответствии с Федеральным Законом Российской Федерации от 27.07.2006 № 152-ФЗ «О персональных данных», иными применимыми положениями законодательства Российской Федерации. Персональные данные не будут передаваться третьим лицам, за исключением случаев, когда передача персональных данных будет необходима в соответствии с требованиями законодательства. Пользователь Сайта вправе, на основании запроса, направленного Оператору, ознакомиться с информацией о его персональных данных, которые обрабатываются Оператором, требовать уточнения персональных данных или их удаления из информационной системы персональных данных Оператора.</p><p>Оператор имеет право вносить изменения в настоящее Соглашение в любое время. Новая редакция Соглашения вступает в силу с момента ее размещения, если иное не предусмотрено новой редакцией Соглашения.</p>',
                'text_en' => '<p>This Agreement on personal data processing was developed in accordance with the Russian Federation legislation.</p><p>All persons who populated information, being personal data, on the site <a href="https://en.grace-oil.com/">https://en.grace-oil.com/</a>, and who posted other information by actions specified confirm that they have given their consent to process their personal data and to transmit this data to the personal data processing Operator -Site Administration <a href="https://en.grace-oil.com/">https://en.grace-oil.com/</a></p><p>The User gives his/her consent to process personal data, in particular, to take actions provided by item 3, Part 1, Article 3 of Federal Law No. 152-FZ ‘About Personal Data’ dd 27.07 2006 and confirms that by giving this consent he/she acts freely, of his/her own free will and interest.</p><p>Personal data processing aims at concluding the agreement under which the subject of personal data is the party. Personal data should neither be distributed nor submitted to third parties without the consent of the subject of personal data and should be used by the Operator exclusively for execution of such agreement and conclusion of agreements with the subject of personal data.</p><p>Personal data means information completed by the User during registration in the relevant fields of the registration form; this information should include the following: Surname, first name and patronymic, e-mail, telephone number as well as data submitted by Users when taking other actions connected with the use of the Site.</p><p>Accepting the terms of this Agreement, the User expresses his/her interest and gives his/her full consent that processing of his/her personal data includes the following actions: personal data acquisition, recording, systematization, accumulation, storage, refinement (updating, change), retrieval, usage, transmission (access grant), depersonalization, removal and destruction.</p><p>The above mentioned consent is effective for an indefinite future period from the date of data submission and may be withdrawn by the User by means of submitting a written application to the Site Administration with indication of data established by Federal Law No. 152-FZ ‘About Personal Data’ in Article 14; this application should be sent to the Site Administrator <a href="https://en.grace-oil.com/">https://en.grace-oil.com/</a>.</p><p>If the User withdraws his/her consent to process personal data, the Operator is entitled to proceed with data processing without the User’s consent on the basis of reasons available as stated in items 2-11, Part 1, Article 6, Part 2 of Article 10 and Part 2 of Article 11 of Federal Law No. 152-FZ ‘About Personal Data’.</p><p>Personal data specified by the Site User should be stored in the Site Data Information System. <a href="https://en.grace-oil.com/"></a>.</p><p>The Operator should process personal data in accordance with Federal Law of the Russian Federation No. 152-FZ ‘About Personal Data’ dd 27.07.2006 and other legislative provisions applicable in the Russian Federation. Personal data should not be transmitted to third parties except for cases when data transmission is required under the legal requirements. Upon inquiry sent to the Operator, the Site User is entitled to acquaint himself/herself with the information about his/her personal data that is processed by the Operator and to call for personal data refinement or its removal from the Information System by the Operator.</p><p>The Operator is entitled to enter changes into this Agreement at any time. A new revision of the Agreement should enter into force since the date of its distribution unless otherwise provided by this new revision of the Agreement.</p>',
            ],
            [
                'full' => 'images/grace_test/grace_test1.jpg',
                'head_ru' => 'Программа испытаний GRACE Test',
                'head_en' => 'GRACE Test Program',
                'text_ru' => '<p>GRACE TEST – это программа тестирования и проверки смазочных материалов для определения длительности эксплуатации смазочных материалов в двигателях машин, механизмов и оборудования. Регулярный отбор проб отработавшего масла и их лабораторное исследование позволяет отслеживать изменения текущих показателей технических характеристик масел, установить оптимальный интервал замены масла и сократить затраты предприятия на смазочные материалы.</p><p>GRACE TEST – программа от компании «Грейс Лубрикантс», которая позволит расширить клиентскую базу наших партнеров с помощью проведения испытаний смазочных материалов GRACE на технике/оборудовании потенциального потребителя.</p>',
                'text_en' => '<p>GRACE TEST is a testing and checking program of lubricants in order to determine service life of lubricants in engines of machines, mechanisms and equipment. Regular sampling of spent oils and their laboratory investigation allow to monitor changes of current values of oil technical characteristics, determine oil optimum replacement intervals and cut the enterprise’s expenses for lubricants.</p><p>GRACE TEST is Grace Lubricants program that allows to expand the Customers base with the help of tests conducted for GRACE lubricants using vehicles/equipment of a potential consumer.</p>',
                'sub_menu_id' => 8
            ],
            [
                'full' => 'images/grace_test/grace_test2.jpg',
                'head_ru' => 'Целевая аудитория',
                'head_en' => 'Target Audience',
                'text_ru' => '<p>GRACE TEST может применяться для анализа смазочных материалов на многих видах автомобильного и промышленного оборудования в таких отраслях, как перевозка грузов и пассажиров, горнодобывающая, лесная, строительная, обрабатывающая, сельскохозяйственная промышленность и др.</p><p>Участниками программы могут стать:</p><ul><li>Производственные и автотранспортные предприятия с собственным парком техники или оборудования;</li><li>Дилеры смазочных материалов GRACE Lubricants.</li></ul>',
                'text_en' => '<p>GRACE TEST may be used for lubricant analysis on many types of automotive and industrial equipment in such segments of industry as carriage of passengers and goods, mining, forestry, construction, processing and agricultural industry, etc.</p><p>Participants of the Program may include:</p><ul><li>Manufacturing enterprises and automobile operating companies with their own vehicle fleet or equipment</li><li>Lubricant dealers of GRACE Lubricants Company.</li></ul>',
                'sub_menu_id' => 8
            ],
            [
                'full' => 'images/grace_test/grace_test3.jpg',
                'head_ru' => 'Цель программы GRACE Test',
                'head_en' => 'GRACE Test Program Objective',
                'text_ru' => '<ul style="margin-top: 0;"><li>Оценка сохранения физико-химических свойств смазочных материалов с целью увеличения интервала использования, существующего на предприятии;</li><li>Подтверждение высокого качества масел в реальных условиях эксплуатации в технике потребителя;</li><li>Увеличение сроков интервалы замены масла;</li><li>Увеличение долговечности работы техники/оборудования клиента;</li><li>Определение экономической эффективности от использования высокотехнологичных и надежных смазочных материалов GRACE.</li></ul>',
                'text_en' => '<ul style="margin-top: 0;"><li>Evaluation of lubricant physical and chemical properties retention to increase intervals of use existing at the enterprise</li><li>Confirmation of lubricant high quality under actual operating conditions when used in the Customer’s equipment</li><li>Increase in oil replacement intervals</li><li>Increase in service life of the Customer’s vehicles/equipment</li><li>Determination of the cost-effectiveness of GRACE high performance and reliable lubricants in use.</li></ul>',
                'sub_menu_id' => 8
            ],
            [
                'full' => 'images/grace_test/grace_test4.jpg',
                'head_ru' => 'Результаты испытаний',
                'head_en' => 'Test Results',
                'text_ru' => '<ul style="margin-top: 0;"><li>Получение данных об эффективности смазочного материала GRACE</li><li>Определение оптимального интервала замены масла</li><li>Снижение затрат на ремонт и время простоя оборудования</li><li>Сокращение расходов на смазочные материалы</li><li>Увеличение экономической эффективности предприятия</li></ul>',
                'text_en' => '<ul style="margin-top: 0;"><li>Reception of data on GRACE lubricant efficiency</li><li>Determination of optimum oil replacement intervals</li><li>Reduction in costs for the equipment repairs and downtime</li><li>Reduction in costs for lubricants</li><li>Improvement of the enterprise’s cost-effectiveness</li></ul>',
                'sub_menu_id' => 8
            ],
            [
                'full' => 'images/banner1.jpg',
                'head_ru' => 'Станьте партнером GRACE Lubricants',
                'head_en' => 'Be a partner of GRACE Lubricants',
                'text_ru' => '<p>Компания «Грейс Лубрикантс» является производителем технических масел и охлаждающих жидкостей. «Грейс Лубрикантс» не просто осуществляет поставку смазочных материалов, но также оказывает техническую и маркетинговую поддержку, направленную на увеличение прибыли наших партнеров. Главным для компании является долгосрочное и взаимовыгодное партнерство по реализации смазочных материалов под брендом GRACE.</p><div class="title-base">Основные принципы нашей работы</div><ul class="check-list"><li>Профессионализм</li><li>Гарантия качества</li><li>Справедливые цены</li><li>Растущая прибыль</li><li>Уверенность в завтрашнем дне</li></ul><div class="title-base">Компания «Грейс Лубрикантс» предлагает партнерам</div><ul class="check-list"><li>Высококачественные смазочные материалы, востребованные на рынке</li><li>Конкурентоспособные цены</li><li>Выгодные условия сотрудничества</li><li>Быстрые и надежные поставки</li><li>Техническую и маркетинговую поддержку, обучение</li></ul><div class="title-base">Кто может стать партнером «Грейс Лубрикантс»</div><ul class="check-list"><li>Дилеры смазочных материалов</li><li>Предприятия из различных отраслей промышленности</li><li>Автосервисы и пункты замены масла</li><li>Розничные торговые точки</li></ul><div class="title-base">Что получает партнер «Грейс Лубрикантс»</div><p><b>Дилерам смазочных материалов GRACE:</b></p><ul class="check-list"><li>Широкий ассортимент продукции премиального качества по дилерским ценам;</li><li></li><li>Логистические услуги по доставке смазочных материалов;</li><li>Подбор смазочных материалов под технику или оборудование клиентов, участие в программе эксплуатационных испытаний масла GRACE Test;</li><li>Доступ к маркетинговым и рекламным материалам (презентации, макеты, печатные материалы);</li><li>Обучение, технические семинары, конференции.</li></ul><p><b>Предприятиям с собственным парком техники или оборудования:</b></p><ul class="check-list"><li>Готовые или индивидуальные отраслевые решения для различных отраслей промышленности;</li><li>Продукцию премиального качества по лучшим ценам напрямую от завода-изготовителя;</li><li>Логистические услуги по доставке смазочных материалов;</li><li>Программа эксплуатационных испытаний масла GRACE Test;</li><li>Специальные условия сотрудничества.</li></ul><p><b>Автосервисам, пунктам замены масла, розничным торговым точкам:</b></p><ul class="check-list"><li>Широкий ассортимент продукции премиального качества;</li><li>Логистические услуги по доставке смазочных материалов;</li><li>Маркетинговые и рекламные материалы;</li><li>Оформление точки продаж;</li><li>Технические семинары.</li></ul><p>Компания «Грейс Лубрикантс» активно расширяет партнерскую сеть и приглашает к сотрудничеству профильные и оптовые компании из различных регионов России:</p>',
                'text_en' => '<p>Grace Lubricants is a manufacturer of technical oils and coolants. Grace Lubricants not simply delivers lubricants but provides technical and marketing support that aims at our Customers revenue growing. Long-term and mutually beneficial partnership to sell lubricants under GRACE brand is the most important for the Company.</p><div class="title-base">Guiding Principles of our Work:</div><ul class="check-list"><li>Competence</li><li>Quality guarantee</li><li>Reasonable prices</li><li>Growing profits</li><li>Confidence in the future</li></ul><div class="title-base">Grace Lubricants offers the Partners:</div><ul class="check-list"><li>High quality lubricants which are in demand on the market</li><li>Competitive prices</li><li>Advantageous conditions of cooperation</li><li>Quick and reliable deliveries</li><li>Technical and marketing support and training</li></ul><div class="title-base">Who could be Grace Lubricants partners:</div><ul class="check-list"><li>Lubricant dealers</li><li>Enterprises of various industries</li><li>Car care centers and lube bays</li><li>Retail units</li></ul><div class="title-base">What do Grace Lubricants partners get:</div><p><b>For GRACE lubricant dealers:</b></p><ul class="check-list"><li>Wide range of premium quality products based on dealers’ prices</li><li></li><li>Logistics services to deliver lubricants</li><li>Selection of materials suitable for Customers’ vehicles and equipment participation in oil performance tests (GRACE Test)</li><li>Access to marketing and advertising matters (presentations, mockups, printed matters)</li><li>Training, technical workshops, conferences.</li></ul><p><b>For enterprises with their own machinery fleet and equipment:</b></p><ul class="check-list"><li>Ready-to-use or customized industry solutions for various industry segments</li><li>Premium quality products at the best prices directly from the manufacturer</li><li>Logistics services to deliver lubricants</li><li>Performance test Program (GRACE Test)</li><li>Special conditions of cooperation.</li></ul><p><b>For car care centers, lube bays, retail units:</b></p><ul class="check-list"><li>Wide range of premium quality products</li><li>Logistics services to deliver lubricants</li><li>Marketing and advertising matters</li><li>Arrangement of sales points</li><li>Training, technical workshops, conferences.</li></ul><p>Grace Lubricants actively expands partner’s network and looking to cooperate with core and wholesale companies from different regions of Russia.</p>',
                'sub_menu_id' => 10
            ],
            [
                'text_ru' => '<p>Компания «Грейс Лубрикантс» рассматривает вопросы взаимовыгодного сотрудничества в сфере закупок базовых масел, присадок и сопутствующего оборудования.</p><p align="center">Требования к поставщикам:</p><p>1.&nbsp;Поставщиком товара или услуги должен быть непосредственно производитель и/или его эксклюзивный дистрибьютор на территории РФ.</p><p>2.&nbsp;Поставщик должен предоставлять все бухгалтерские документы.</p><p>3.&nbsp;Поставщик должен предоставить все необходимые сертификаты на продукцию требующую обязательной сертификации на территории РФ.</p><p>4.&nbsp;Оплата за товар/услугу поставщику должна производиться исключительно на расчётный счёт.</p><p>На постоянной основе Компания «Грейс Лубрикантс» производит закупки:</p><table class="default"><tr><th>Наименование</th></tr><tr><td>Масло базовое II(I)-ой группы SN-80 (И-12А)</td></tr><tr><td>Масло базовое II(I)-ой группы SN-150 (И-20А)</td></tr><tr><td>Масло базовое II(I)-ой группы SN-400 (И-40А)</td></tr><tr><td>Масло базовое II(I)-ой группы SN-500 (И-50А)</td></tr><tr><td>Маслоостаточные компоненты BS</td></tr><tr><td>Масло базовое III группы (VHVI)</td></tr><tr><td>Масло базовое IV-ой группы (PAO)</td></tr><tr><td>Масло базовое V-ой группы (эфиры, полиэфиры, нафтены, PAG)</td></tr><tr><td>Присадки для технических масел</td></tr><tr><td>Загустители (PMA, OCP)</td></tr><tr><td>Бочки металлические</td></tr></table><p>Свои предложения Вы можете направлять по <b>адресу электронной почты</b> <a href="mailto:ceo@grace-oil.com">ceo@grace-oil.com</a> и специалисты отдела снабжения обязательно свяжутся с Вами, если предложение нас заинтересует.</p>',
                'text_en' => '<p>Grace Lubricants considers the issues of mutually beneficial cooperation in procurement of base oils, additives and associated equipment.</p><p align="center">Requirements Set to Vendors</p><ol><li>A Manufacturer and/or its sole distributor in the territory of Russia should be a goods Vendor or Service Provider.</li><li>The Vendor should submit all accounting records. </li><li>The Vendor should submit all Certificates required for products that require without fail certification in the territory of Russia.</li><li>Payment for goods/services should be effected in favor of the Vendor to the settlement account only.</li></ol><p>On an ongoing basis Grace Lubricants procures:</p><table class="default"><tr><th>Name</th></tr><tr><td data-label="Наименование">Base oil of the II-d (I-st) group SN-80 (I-12А)</td></tr><tr><td data-label="Наименование">Base oil of the II-d (I-st) group SN-150 (I-20А)</td></tr><tr><td data-label="Наименование">Base oil of the II-d (I-st) group SN-400 (I-40А)</td></tr><tr><td data-label="Наименование">Base oil of the II-d (I-st) group SN-500 (I-50А)</td></tr><tr><td data-label="Наименование">Oil residual components BS</td></tr><tr><td data-label="Наименование">Base oil of the III-d (IVHVI)</td></tr><tr><td data-label="Наименование">Base oils of the IV-th (Poly alpha olefins) group</td></tr><tr><td data-label="Наименование">Base oil of the V-th (ethers, polyethers, naphthenes, PAG) </td></tr><tr><td data-label="Наименование">Additives for technical oils</td></tr><tr><td data-label="Наименование">Viscosity builders (PMA, OCP)</td></tr><tr><td data-label="Наименование">Metal drums</td></tr></table><p>Please send your proposals to <b>e-mail</b>  <a href="mailto:ceo@grace-oil.com">ceo@grace-oil.com</a> and specialists of the Procurement Department will contact you if we find them interesting.</p><p>In case of any questions, feel free to clarify them by the following phone: <a href="tel:88002345017">8-800-234-50-17</a></p>',
                'sub_menu_id' => 12
            ],
            [
                'head_ru' => 'АБРАЗИВНЫЙ ИЗНОС',
                'head_en' => 'ABRASIVE WEAR',
                'text_ru' => '<p>Механический износ (изнашивание) в результате воздействия твердых частиц, находящихся в свободном или закрепленном состоянии в результате механохимических процессов образования и разрушения вторичных структур.</p>',
                'text_en' => '<p>Mechanical wear (wear) as a result of the impact of solid particles in a free or fixed state as a result of mechanochemical processes of formation and destruction of secondary structures.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'АБСОРБЦИЯ',
                'head_en' => 'ABSORPTION',
                'text_ru' => '<p>(от лат. absorbtio поглощение) – явление и процесс массообмена, заключающийся (в отличие от адсорбции) в объемном поглощении компонентов газовой фазы абсорбентом. В технике и химической технологии чаще всего встречается абсорбция (поглощение, растворение) газов жидкостями. Но известны и процессы абсорбции газов и жидкостей кристаллическими и аморфными телами (например, абсорбция водорода металлами, абсорбция низкомолекулярных жидкостей и газов цеолитами, абсорбция нефтепродуктов резинотехническими изделиями и т.п.). Часто в процессе абсорбции происходит не только увеличение массы абсорбирующего материала, но и существенное увеличение его объема (набухание), а также изменение его физических характеристик – вплоть до агрегатного состояния. На практике абсорбция чаще всего применяется для разделения смесей, состоящих из веществ, имеющих различную способность к поглощению подходящими абсорбентами. При этом целевыми продуктами могут быть как абсорбировавшиеся, так и не абсорбировавшиеся компоненты смесей. Обычно в случае физической абсорбции абсорбировавшиеся вещества могут быть вновь извлечены из абсорбента посредством его нагревания, разбавления неабсорбирущей жидкостью или иными подходящими способами. Регенерация химически абсорбированных веществ также иногда возможна. Она может быть основана на химическом или термическом разложении продуктов химической абсорбции с высвобождением всех или некоторых из абсорбированных веществ. Но во многих случаях регенерация химически абсорбированных веществ и химических абсорбентов бывает невозможной или технологически/экономически нецелесообразной.</p>',
                'text_en' => '<p>(from lat. absorbtio absorption) - the phenomenon and process of mass transfer, which consists (in contrast to adsorption) in the volumetric absorption of the components of the gas phase by the absorbent. In engineering and chemical technology, absorption (absorption, dissolution) of gases by liquids is most common. But the processes of absorption of gases and liquids by crystalline and amorphous bodies are also known (for example, the absorption of hydrogen by metals, the absorption of low-molecular liquids and gases by zeolites, the absorption of petroleum products by rubber products, etc.). Often in the process of absorption, not only an increase in the mass of the absorbent material occurs, but also a significant increase in its volume (swelling), as well as a change in its physical characteristics - up to the state of aggregation. In practice, absorption is most often used to separate mixtures consisting of substances having different absorption capacities with suitable absorbents. In this case, the target products can be both absorbed and non-absorbed components of mixtures. Typically, in the case of physical absorption, the absorbed substances can be re-extracted from the absorbent by heating it, diluting it with a non-absorbent liquid, or other suitable means. Regeneration of chemically absorbed substances is also sometimes possible. It may be based on chemical or thermal decomposition of the products of chemical absorption with the release of all or some of the absorbed substances. But in many cases, the recovery of chemically absorbed substances and chemical absorbents is not possible or technologically/economically impractical.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'АДГЕЗИЯ',
                'head_en' => 'ADHESION',
                'text_ru' => '<p>(от лат. adhaesio — прилипание) сцепление приведенных в контакт разнородных конденсированных фаз, обусловленное межмолекулярным взаимодействием или химической связью. При трении важную роль играет процесс адгезионного взаимодействия молекул смазочного материала с трущимися поверхностями металлов. Адгезия существенно влияет на природу трения соприкасающихся поверхностей: так, при взаимодействии поверхностей с низкой адгезией трение минимально. В качестве примера можно привести политетрафторэтилен (тефлон), который в силу низкого значения адгезии в сочетании с большинством материалов обладает низким коэффициентом трения. Некоторые вещества со слоистой кристаллической решёткой (графит, дисульфид молибдена), характеризующиеся одновременно низкими значениями адгезии и когезии, применяются в качестве твёрдых смазок. Наиболее известные адгезионные эффекты — капиллярность, смачиваемость/несмачиваемость, поверхностное натяжение, мениск жидкости в узком капилляре, трение покоя двух абсолютно гладких поверхностей. Критерием адгезии в некоторых случаях может быть время отрыва слоя материала определенного размера от другого материала в ламинарном потоке жидкости.</p>',
                'text_en' => '<p>(from Latin adhaesio - sticking) the adhesion of dissimilar condensed phases brought into contact, due to intermolecular interaction or chemical bonding. During friction, an important role is played by the process of adhesive interaction of lubricant molecules with rubbing metal surfaces. Adhesion significantly affects the nature of the friction of the contacting surfaces: for example, when interacting surfaces with low adhesion, friction is minimal. An example is polytetrafluoroethylene (Teflon), which, due to its low adhesion value, in combination with most materials, has a low coefficient of friction. Some substances with a layered crystal lattice (graphite, molybdenum disulfide), characterized by both low values ​​of adhesion and cohesion, are used as solid lubricants. The most well-known adhesive effects are capillarity, wettability/nonwetting, surface tension, liquid meniscus in a narrow capillary, static friction of two absolutely smooth surfaces. The criterion for adhesion in some cases may be the time of detachment of a layer of material of a certain size from another material in a laminar fluid flow.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'АДСОРБЦИЯ',
                'head_en' => 'ADSORPTION',
                'text_ru' => '<p>(от лат. ad на, у, при + sorbere поглощать, всасывать)</p><p>1. Явление концентрирования вещества из объема фаз на поверхности раздела.</p><p>2. Процесс массопередачи путем адсорбции.</p><p>Поглощаемое вещество, ещё находящееся в объёме фазы, называют адсорбтив, поглощённое — адсорбат. В более узком смысле под адсорбцией часто понимают поглощение примеси из газа или жидкости твёрдым веществом (в случае газа и жидкости) или жидкостью (в случае газа) — адсорбентом. При этом, как и в общем случае адсорбции, происходит концентрирование примеси на границе раздела адсорбент-жидкость либо адсорбент-газ. Процесс, обратный адсорбции, то есть перенос вещества с поверхности раздела фаз в объём фазы, называется десорбция. Если скорости адсорбции и десорбции равны, то говорят об установлении адсорбционного равновесия. В состоянии равновесия количество адсорбированных молекул остается постоянным сколько угодно долго, если неизменны внешние условия (давление, температура и состав системы).</p>',
                'text_en' => '<p>(from lat. ad on, at, with + sorbere to absorb, absorb)</p><p>1. The phenomenon of concentration of matter from the volume of phases on the interface.</p><p>2. Mass transfer process by adsorption.</p><p>The absorbed substance, which is still in the bulk of the phase, is called the adsorbate, and the absorbed substance is called the adsorbate. In a narrower sense, adsorption is often understood as the absorption of an impurity from a gas or liquid by a solid substance (in the case of gas and liquid) or liquid (in the case of gas) - an adsorbent. In this case, as in the general case of adsorption, the impurity is concentrated at the adsorbent-liquid or adsorbent-gas interface. The process, the reverse of adsorption, that is, the transfer of a substance from the interface to the volume of the phase, is called desorption. If the rates of adsorption and desorption are equal, then one speaks of the establishment of adsorption equilibrium. In a state of equilibrium, the number of adsorbed molecules remains constant for an arbitrarily long time, if the external conditions (pressure, temperature, and composition of the system) remain unchanged.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'АНТИКОРРОЗИОННАЯ ЗАЩИТА',
                'head_en' => 'ANTI-CORROSION PROTECTION',
                'text_ru' => '<p>Нанесение на поверхность защищаемых конструкций слоев защитных покрытий на основе органических и неорганических материалов, в частности, лакокрасочных материалов, металлов и сплавов. В антикоррозионной защите адгезия лакокрасочного материала к поверхности — наиболее важный параметр, влияющий на долговечность покрытия. Адгезия – прилипание лакокрасочного материала к окрашиваемой поверхности, одна из основных характеристик промышленных ЛКМ. Адгезия лакокрасочных материалов может иметь механическую, химическую или электромагнитную природу и измеряется силой отрыва лакокрасочного покрытия на единицу площади подложки. Хорошая адгезия лакокрасочного материала к окрашиваемой поверхности может быть обеспечена лишь при тщательной очистке поверхности от грязи, жира, ржавчины и прочих загрязнений. Также для обеспечения адгезии необходимо достичь заданной толщины покрытия, для чего используются толщиномеры мокрого слоя. Для оценки адгезии/когезии приняты и утверждены критерии.</p>',
                'text_en' => '<p>Application of layers of protective coatings based on organic and inorganic materials, in particular, paintwork materials, metals and alloys, to the surface of protected structures. In anti-corrosion protection, the adhesion of the coating material to the surface is the most important parameter that affects the durability of the coating. Adhesion - adhesion of the paintwork material to the surface to be painted, one of the main characteristics of industrial coatings. The adhesion of paints and varnishes can be mechanical, chemical or electromagnetic in nature and is measured by the force of separation of the paintwork per unit area of ​​the substrate. Good adhesion of the paintwork material to the surface to be painted can only be ensured by thoroughly cleaning the surface from dirt, grease, rust and other contaminants. Also, to ensure adhesion, it is necessary to achieve a given coating thickness, for which wet film thickness gauges are used. Criteria have been adopted and approved for the assessment of adhesion/cohesion.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'АРОМАТИЧЕСКИЕ УГЛЕВОДОРОДЫ (АРЕНЫ)',
                'head_en' => 'AROMATIC HYDROCARBONS (ARENES)',
                'text_ru' => '<p>Ароматические соединения (арены) — циклические органические соединения, которые имеют в своём составе ароматическую систему. Класс карбоциклических соединений, содержащие особую циклическую группировку из шести атомов углерода (бензольное ядро). Основными отличительными свойствами являются повышенная устойчивость ароматической системы и, несмотря на ненасыщенность, склонность к реакциям замещения, а не присоединения. Широко распространены и имеют большое практическое значение бензоидные ароматические углеводороды (арены). Помимо бензольных колец арены часто содержат другие разнообразные углеводородные группы (алифатические, нафтеновые, полициклические). Основным источником получения ароматических углеводородов служат каменноугольная смола, нефть и нефтепродукты. Большое значение имеют синтетические методы получения. Наиболее важными аренами являются: бензол С6Н6 и его гомологи (толуол С6Н5СНз, ксилолы С6Н4(СНз)2, дурол, мезитилен, этилбензол), кумол, нафталин C10H8, антрацен С14Н10 и их производные. Ароматические углеводороды — исходное сырьё для промышленного получения кетонов, альдегидов и кислот ароматического ряда, а также многих других веществ.</p>',
                'text_en' => '<p>Aromatic compounds (arenes) are cyclic organic compounds that have an aromatic system in their composition. A class of carbocyclic compounds containing a special cyclic group of six carbon atoms (benzene nucleus). The main distinguishing properties are the increased stability of the aromatic system and, despite unsaturation, a tendency to substitution reactions, rather than addition. Benzenoid aromatic hydrocarbons (arenes) are widespread and of great practical importance. In addition to benzene rings, arenas often contain various other hydrocarbon groups (aliphatic, naphthenic, polycyclic). The main sources of aromatic hydrocarbons are coal tar, oil and oil products. Synthetic methods of obtaining are of great importance. The most important arenes are: benzene C6H6 and its homologues (toluene C6H5CH3, xylenes C6H4(CH3)2, durol, mesitylene, ethylbenzene), cumene, naphthalene C10H8, anthracene C14H10 and their derivatives. Aromatic hydrocarbons are the feedstock for the industrial production of ketones, aldehydes, and aromatic acids, as well as many other substances.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'АСФАЛЬТЕНЫ',
                'head_en' => 'ASPHALTEN',
                'text_ru' => '<p>Наиболее высокомолекулярные компоненты нефти. Твёрдые хрупкие вещества чёрного или бурого цвета; размягчаются в инертной атмосфере при 200—300 °С с переходом в пластичное состояние; плотность около 1,1 г/см3; среднечисленная молекулярная масса 1000—5000, индекс полидисперсности 1,2—3,5. Между асфальтенами, нефтяными смолами и нефтяными маслами существует генетическая связь. При переходе от масел к смолам и асфальтенам увеличивается количество конденсированных циклов, гетероатомов, величина молекулярной массы, уменьшается отношение Н/С. Термополиконденсация асфальтенов приводит сначала к образованию карбенов, затем карбоидов (см. Битумы нефтяные) и кокса. При термополиконденсации смол или висбрекинге гудронов происходит дегидрирование, дегидроциклизация и деалкилирование, вследствие чего образуются вторичные асфальтены, характеризующиеся высокой степенью ароматичности. В условиях мягкого гидрогенолиза асфальтены превращаются в смоло- и маслообразные вещества.Асфальтены — остаточный продукт экстракции тяжёлых нефтяных остатков гексаном («горячий способ» Гольде). В промышленности такую экстракцию осуществляют жидким пропаном или бутаном (см. Деасфальтизация). Наличие в асфальтенах V и Ni, являющихся ядами катализаторов нефтепереработки, значительно ограничивает возможности получения моторных топлив на базе нефтяных остатков. Асфальтены — вулканизующие агенты, ингибиторы коррозии и радикальных реакций, наполнители композиционных полимерных материалов, сырьё для получения V и Ni. В составе гудронов и битумов используются для создания дорожных покрытий, изготовления гидроизоляционных материалов, кровельных изделий и др.</p>',
                'text_en' => '<p>The most high-molecular components of oil. Solid brittle substances of black or brown color; soften in an inert atmosphere at 200–300°C with a transition to a plastic state; density about 1.1 g/cm3; number average molecular weight 1000-5000, polydispersity index 1.2-3.5. There is a genetic link between asphaltenes, petroleum resins and petroleum oils. When moving from oils to resins and asphaltenes, the number of condensed cycles, heteroatoms, and molecular weight increase, and the H/C ratio decreases. Thermal polycondensation of asphaltenes leads first to the formation of carbenes, then carboids (see Petroleum bitumen) and coke. During thermopolycondensation of resins or visbreaking of tars, dehydrogenation, dehydrocyclization, and dealkylation occur, resulting in the formation of secondary asphaltenes characterized by a high degree of aromaticity. Under conditions of mild hydrogenolysis, asphaltenes are converted into resinous and oily substances. Asphaltenes are a residual product of the extraction of heavy oil residues with hexane (Golde\'s "hot method"). In industry, such extraction is carried out with liquid propane or butane (see Deasphalting). The presence of V and Ni in asphaltenes, which are poisons of oil refining catalysts, significantly limits the possibility of obtaining motor fuels based on oil residues. Asphaltenes are vulcanizing agents, inhibitors of corrosion and radical reactions, fillers for composite polymer materials, raw materials for the production of V and Ni. In the composition of tars and bitumens, they are used to create road surfaces, manufacture waterproofing materials, roofing products, etc.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'БАЗОВОЕ МАСЛО',
                'head_en' => 'BASE OIL',
                'text_ru' => '<p>Базовые масла – это сырье и основной компонент товарных масел. В качестве базовых масел при производстве смазочных материалов используют минеральные (нефтяные), синтетические, НС-синтетические масла, а также их смеси. Для специальных целей применяют и масла растительного происхождения. Базовые масла становятся товарными после смешивания с пакетами присадок, улучшающими их свойства.</p><p>Важнейшей характеристикой базового масла является индекс вязкости (сокращенно VI, от английского Viscosity Index), характеризующий способность масла разжижаться под действием температуры. Чем выше индекс вязкости, тем лучше качество масла.</p><p><b>КЛАССЫ БАЗОВОГО МАСЛА ПО API</b></p><p><b>ГРУППА 1</b> – минеральная, содержит менее 90% предельных углеводородов и 0,03% серы, имеет индекс вязкости от 80 до 120 (обычно &lt;90)</p><p><b>ГРУППА 2</b> – минеральная, содержит не менее 90% предельных углеводородов и менее 0,03% серы, имеет индекс вязкости от 80 до 120 (обычно 95)</p><p><b>ГРУППА 3</b> – содержит не менее 90% предельных углеводородов и менее 0,03% серы, имеет индекс вязкости более 120 (обычно 140-150) (НС-синтетические, крекинговые, гидросинтетические, техносинтез, Syntetishblend, МС-синтез)</p><p><b>ГРУППА 4</b> – синтетические полиальфаолефины (индекс вязкости 130)</p><p><b>ГРУППА 5</b> – синтетические базовые масла других типов, не вошедшие в группы 1-4 (сложные спирты и эфиры).</p>',
                'text_en' => '<p>Base oils are raw materials and the main component of commercial oils. As base oils in the production of lubricants, mineral (petroleum), synthetic, HC-synthetic oils, as well as their mixtures, are used. For special purposes, vegetable oils are also used. Base oils become marketable after mixing with additive packages that improve their properties.</p><p>The most important characteristic of the base oil is the viscosity index (abbreviated as VI, from the English Viscosity Index), which characterizes the ability of the oil to thin under the influence of temperature. The higher the viscosity index, the better the quality of the oil.</p><p><b>API BASE OIL GRADES</b></p><p><b>GROUP 1</b> - mineral, contains less than 90% saturated hydrocarbons and 0.03% sulfur, has a viscosity index from 80 to 120 (usually &lt;90)</p><p><b>GROUP 2</b> - mineral, contains not less than 90% saturated hydrocarbons and less than 0.03% sulfur, has a viscosity index from 80 to 120 (usually 95)</p><p><b>GROUP 3</b> - contains at least 90% saturated hydrocarbons and less than 0.03% sulfur, has a viscosity index of more than 120 (usually 140-150) (HC-synthetic, cracking, hydrosynthetic, technosynthesis, Syntetishblend, MS-synthesis)</p><p><b>GROUP 4</b> - synthetic polyalphaolefins (viscosity index 130)</p><p><b>GROUP 5</b> - synthetic base oils of other types, not included in groups 1-4 (complex alcohols and esters).</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'БЕЛОЕ МАСЛО',
                'head_en' => 'WHITE OIL',
                'text_ru' => '<p>Высокорафинированная масляная основа для применения в производстве медикаментов и косметики, а также для смазки машин в переработке пищевых продуктов. Бесцветные нефлуоресцирующие нефтяные масла, изготавливаемые путём глубокого каталитического гидрирования нефтяных фракций или глубокой очистки масляных дистиллятов дымящей серной кислотой или серным ангидридом и отбеливающей землей. Белые масла получаются путём глубокой очистки нефтяных масел, как правило, серной кислотой. Перед обработкой масел кислотой, они могут быть подвергнуты предварительной очистке каким-либо селективным растворителем Белые масла подразделяют на 2 группы:</p><ul><li>технические белые масла (используются для производства косметических кремов, парфюмерных масел, инсектицидов, в текстильной промышленности и др.);</li><li>медицинские белые масла (применяются в синтезе лекарственных препаратов и как смазочное масло в пищевой промышленности).</li></ul><p>Белые масла представляют собой чистые нафтено-парафиновые углеводороды без примесей ароматических соединений и смол. Данные масла слабее действуют на резину, а химически и биологически более инертны, чем представители других нефтяных масел, однако стойкость к окислению, как и смазывающие свойства, у белых масел хуже. Кинематическая вязкость технических белых масел при 50 °С равна 28—36 сСт, медицинских — 16—24 сСт.</p>',
                'text_en' => '<p>Highly refined oil base for use in the pharmaceutical and cosmetic industries, as well as for lubricating machines in food processing. Colorless, non-fluorescent petroleum oils produced by deep catalytic hydrogenation of petroleum fractions or deep purification of oil distillates with fuming sulfuric acid or sulfuric anhydride and bleaching earth. White oils are obtained by deep refining petroleum oils, usually with sulfuric acid. Before treating oils with acid, they can be pre-cleaned with some selective solvent. White oils are divided into 2 groups:</p><ul><li>technical white oils (used for the production of cosmetic creams, perfume oils, insecticides, in the textile industry, etc.);</li><li>medical white oils (used in the synthesis of drugs and as a lubricating oil in the food industry).</li></ul><p>White oils are pure naphthenic-paraffinic hydrocarbons without impurities of aromatic compounds and resins. These oils have a weaker effect on rubber, and are chemically and biologically more inert than representatives of other petroleum oils, however, oxidation resistance, as well as lubricating properties, are worse for white oils. The kinematic viscosity of technical white oils at 50 ° C is 28-36 cSt, medical - 16-24 cSt.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'БИОЛОГИЧЕСКАЯ РАЗЛАГАЕМОСТЬ',
                'head_en' => 'BIOLOGICAL DEGRADABILITY',
                'text_ru' => '<p>Способность вещества подвергаться разрушению микроорганизмами на нетоксичные водорастворимые соединения.</p>',
                'text_en' => '<p>The ability of a substance to be broken down by microorganisms into non-toxic, water-soluble compounds.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'БИОПОРАЖЕНИЕ ВОДОСМЕШИВАЕМЫХ ПРОДУКТОВ',
                'head_en' => 'BIOCONTAINING WATER-MIXABLE PRODUCTS',
                'text_ru' => '<p>Поражение водосмешиваемого продукта микроорганизмами – бактериями, грибками, дрожжами.</p>',
                'text_en' => '<p>The defeat of the water-miscible product by microorganisms - bacteria, fungi, yeast.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ВАКУУМНАЯ ПЕРЕГОНКА',
                'head_en' => 'VACUUM DISTILLATION',
                'text_ru' => '<p>Процесс фракционной перегонки остатка от атмосферной перегонки (мазут) в вакуумной колонне при пониженном давлении.</p>',
                'text_en' => '<p>The process of fractional distillation of the residue from atmospheric distillation (fuel oil) in a vacuum column under reduced pressure.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ВСПЕНИВАЕМОСТЬ МАСЛА',
                'head_en' => 'OIL FOAMING',
                'text_ru' => '<p>Свойство масла образовывать пену под действием вращающихся деталей механизмов.</p>',
                'text_en' => '<p>The property of oil to form foam under the action of rotating parts of mechanisms.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ВХОДНОЙ КОНТРОЛЬ',
                'head_en' => 'ENTRANCE CONTROL',
                'text_ru' => '<p>Проверка ряда показателей качества нефтепродукта на соответствие нормативной документации или документам отправителя при поступлении его на склад или потребителю.</p>',
                'text_en' => '<p>Checking a number of indicators of the quality of an oil product for compliance with regulatory documentation or documents of the sender when it arrives at the warehouse or consumer.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ВЯЗКОСТЬ НЕФТЕПРОДУКТОВ',
                'head_en' => 'VISCOSITY OF PETROLEUM PRODUCTS',
                'text_ru' => '<p>Под вязкостью понимают свойство жидкости оказывать сопротивление перемещению ее частиц при движении или силу сопротивления смещения одного слоя жидкости по отношению к другому. Это свойство еще называют внутренним трением жидкости или газа. Природа этого трения связана с преодолением сил межмолекулярного взаимодействия жидкости или газа. Вязкость характеризует текучесть или подвижность нефтепродукта или газа, прокачиваемость по трубопроводам, и является основной характеристикой парафиновой нефти, темных нефтепродуктов (мазута, моторного топлива) и масел. Принято характеризовать вязкость нефти и нефтепродуктов несколькими видами измерения: относительная; динамическая, кинематическая. Относительной (условной) вязкостью называют отношение времени истечения 200 мл нефти или нефтепродукта при заданной температуре через калиброванное отверстие вискозиметра ко времени истечения такого же количества дистиллированной воды при температуре 20 °С. Это отношение выражается в градусах условной вязкости (°ВУ). Например, ВУ50 =4° означает вязкость, равную 4 °ВУ при температуре 50 °С. В международной системе СИ вязкость различают динамическую и кинематическую. Динамическая вязкость – это мера внутреннего трения, равная отношению тангенционального напряжения к градиенту скорости сдвига при ламинарном движении жидкости, обозначается символом ц и выражается в Па или н сек/м2 или н сек/см2, или это означает, что при градиенте скорости м(см) на 1 м слоя действует сила трения равная, 1 н. Кинематическая вязкость (v) — это отношение динамической вязкости к плотности нефтепродукта, является обратной величиной динамической вязкости, обозначается символом v и выражается в стоксах: 1 см2/сек = 1 ст= 10-4 м2/сек. Переводят кинематическую вязкость в условную по эмпирической формуле Уббелоиде v = 0,0731 ВУ – 0,0631/ВУ. Вязкость нефти колеблется в широких пределах и зависит от пластового давления, температуры и растворенного в нефти газа. Вязкость нефтепродуктов зависит от температуры. В большей степени температура влияет на вязкость темных нефтепродуктов и масел, нежели на светлые нефтепродукты. В гидравлических расчетах вязкость нефтепродуктов принимают по номограмме или по паспортам качества.</p>',
                'text_en' => '<p>Viscosity is understood as the property of a liquid to resist the movement of its particles during movement or the resistance force of the displacement of one layer of the liquid relative to another. This property is also called the internal friction of a liquid or gas. The nature of this friction is associated with overcoming the forces of intermolecular interaction of a liquid or gas. Viscosity characterizes the fluidity or mobility of an oil product or gas, pumpability through pipelines, and is the main characteristic of paraffin oil, dark oil products (fuel oil, motor fuel) and oils. It is customary to characterize the viscosity of oil and oil products by several types of measurements: relative; dynamic, kinematic. Relative (conditional) viscosity is the ratio of the outflow time of 200 ml of oil or oil product at a given temperature through the calibrated opening of the viscometer to the outflow time of the same amount of distilled water at a temperature of 20 °C. This ratio is expressed in degrees of relative viscosity (°VU). For example, VU50 =4° means a viscosity equal to 4°VU at a temperature of 50°C. In the international SI system, viscosity is distinguished between dynamic and kinematic. Dynamic viscosity is a measure of internal friction, equal to the ratio of tangential stress to the shear rate gradient during laminar fluid movement, denoted by the symbol q and expressed in Pa or n s / m2 or n s / cm2, or this means that with a velocity gradient m (cm ) a friction force equal to 1 n acts on 1 m of the layer. Kinematic viscosity (v) is the ratio of dynamic viscosity to the density of an oil product, is the reciprocal of dynamic viscosity, denoted by the symbol v and is expressed in stokes: 1 cm2 / s = 1 st = 10-4 m2 / s. The kinematic viscosity is converted into conditional viscosity according to the empirical Ubbeloid formula v \u003d 0.0731 VU - 0.0631 / VU. The viscosity of oil varies widely and depends on reservoir pressure, temperature and gas dissolved in oil. The viscosity of petroleum products depends on temperature. To a greater extent, temperature affects the viscosity of dark petroleum products and oils, rather than light petroleum products. In hydraulic calculations, the viscosity of petroleum products is taken according to a nomogram or according to quality certificates.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ВЯЗКОСТЬ ПРОКАЧИВАНИЯ (ПРОКАЧИВАЕМОСТЬ)',
                'head_en' => 'VISCOSITY OF PUMPING (PUMPLABILITY)',
                'text_ru' => '<p>Мера способности масла течь и создавать необходимое давление в системе смазки в начальной стадии работы холодного двигателя.</p>',
                'text_en' => '<p>A measure of the ability of the oil to flow and build up the necessary pressure in the lubrication system in the early stages of a cold engine.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ГИГРОСКОПИЧНОСТЬ',
                'head_en' => 'HYGROSCOPICITY',
                'text_ru' => '<p>Способность нефтепродукта поглощать водяные пары или воду из окружающей среды. Чем выше температура и относительная влажность окружающей среды, тем больше воды растворяется в нефтепродукте. Нефтепродукты, содержащие парафиновые, нафтеновые и олефиновые углеводороды, растворяют воду слабее, чем нефтепродукты, содержащие ароматические углеводороды.</p>',
                'text_en' => '<p>The ability of a petroleum product to absorb water vapor or water from the environment. The higher the temperature and relative humidity of the environment, the more water is dissolved in the oil. Petroleum products containing paraffinic, naphthenic and olefinic hydrocarbons dissolve water less than petroleum products containing aromatic hydrocarbons.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ГИДРОКРЕКИНГ',
                'head_en' => 'HYDROCRACKING',
                'text_ru' => '<p>Процесс получения базовых масел с высоким индексом вязкости, противоокислительной стойкостью и стойкостью к деформациям сдвига. В ходе процесса обработки одновременно или последовательно протекает ряд химических реакций, в результате которых значительно улучшается молекулярная структура масла, усиливаются стойкость к механическим, термическим и химическим воздействиям. Гидрокрекинг является одним из самых перспективных методов улучшения свойств масел.</p>',
                'text_en' => '<p>The process of obtaining base oils with a high viscosity index, antioxidant resistance and shear resistance. During the processing process, a number of chemical reactions occur simultaneously or sequentially, as a result of which the molecular structure of the oil is significantly improved, resistance to mechanical, thermal and chemical influences is enhanced. Hydrocracking is one of the most promising methods for improving the properties of oils.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ГИДРООЧИСТКА',
                'head_en' => 'HYDROTREATMENT',
                'text_ru' => '<p>Общее название для процесса нефтепереработки при производстве топлива и нефтяного сырья. Проводится при повышенной температуре в присутствии подаваемого под давлением водорода и катализатора. Эта мягкая очистка нефти, иногда также называемая гидрофинишингом, используется для улучшения цвета и запаха топлива и базовых масел.</p>',
                'text_en' => '<p>General name for the refining process in the production of fuels and petroleum feedstocks. It is carried out at elevated temperature in the presence of pressurized hydrogen and a catalyst. This mild oil refining, sometimes also referred to as hydrofinishing, is used to improve the color and odor of fuels and base oils.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ДЕЭМУЛЬГИРУЕМОСТЬ',
                'head_en' => 'DEMULSIBILITY',
                'text_ru' => '<p>Показатель способности смазочного масла отделяться от воды.</p>',
                'text_en' => '<p>A measure of the ability of a lubricating oil to separate from water.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ДИНАМИЧЕСКАЯ ВЯЗКОСТЬ',
                'head_en' => 'DYNAMIC VISCOSITY',
                'text_ru' => '<p>Мера внутреннего трения во время течения смазочного масла (например, течения через трубы или щели).</p>',
                'text_en' => '<p>A measure of internal friction during the flow of lubricating oil (for example, flow through pipes or slots).</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ДИСПЕРГИРОВАНИЕ',
                'head_en' => 'DISPERSION',
                'text_ru' => '<p>Тонкое измельчение твердых тел и жидкостей в различных средах, приводящее к образованию дисперсных систем.</p>',
                'text_en' => '<p>Fine grinding of solids and liquids in various media, leading to the formation of dispersed systems.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЗАГУСТИТЕЛИ',
                'head_en' => 'THICKENERS',
                'text_ru' => '<p>Загустители обычно представляют собой мыла металлов (загущение мылом), но могут использоваться и другие органические и неорганические загущающие агенты (немыльное загущение, например, кремнеземом, бентонитом, мочевиной, ПТФЭ и др.).</p>',
                'text_en' => '<p>Thickeners are usually metal soaps (soap thickening), but other organic and inorganic thickening agents (non-soap thickening, eg, silica, bentonite, urea, PTFE, etc.) may be used.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЗОЛЬНОСТЬ СУЛЬФАТНАЯ',
                'head_en' => 'ASH SULFATE',
                'text_ru' => '<p>Показатель, характеризующий наличие зольных присадок (сульфонаты, алкилфеноляты, алкилсалицилаты и фосфонаты кальция, бария или магния в различных сочетаниях друг с другом, металлсодержащие) в моторных маслах. Выражается в % масс.</p>',
                'text_en' => '<p>An indicator characterizing the presence of ash additives (sulfonates, alkyl phenolates, alkyl salicylates and phosphonates of calcium, barium or magnesium in various combinations with each other, metal-containing) in motor oils. Expressed in % wt.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ИЗНОС',
                'head_en' => 'WEAR',
                'text_ru' => '<p>Вызывается трением и прямым контактом между противостоящими поверхностями после разрушения смазочной пленки. Изменение размеров, формы или состояния поверхности образца или изделия вследствие разрушения поверхностного слоя, в частности при трении. Различают четыре главных механизма износа: абразивный износ и усталостное разрушение поверхностных слоев (чисто механические процессы), а также износ под воздействием адгезии и в результате трибохимических реакций на поверхности тел (окислительный износ). Чаще процесс износа определяется несколькими механизмами.</p>',
                'text_en' => '<p>Caused by friction and direct contact between opposing surfaces after the lubricating film breaks down. Change in the size, shape or state of the surface of a sample or product due to the destruction of the surface layer, in particular during friction. There are four main wear mechanisms: abrasive wear and fatigue failure of surface layers (purely mechanical processes), as well as wear under the influence of adhesion and as a result of tribochemical reactions on the surface of bodies (oxidative wear). More often, the wear process is determined by several mechanisms.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ИНГИБИТОРЫ КОРРОЗИИ',
                'head_en' => 'CORROSION INHIBITORS',
                'text_ru' => '<p>Присадки к смазкам, которые уменьшают окисление и, тем самым, старение, образование красной ржавчины и коррозию.</p>',
                'text_en' => '<p>Lubricant additives that reduce oxidation and thus aging, red rust and corrosion.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ИНДЕКС ВЯЗКОСТИ',
                'head_en' => 'VISCOSITY INDEX',
                'text_ru' => '<p>Относительная величина, показывающая степень изменения вязкости в зависимости от температуры. Жидкости с высоким индексом вязкости в меньшей степени меняют вязкость при изменениях температуры, чем жидкости с низким индексом вязкости.</p>',
                'text_en' => '<p>Relative value showing the degree of change in viscosity depending on temperature. Liquids with a high viscosity index change less in viscosity with temperature changes than liquids with a low viscosity index.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'КИСЛОТНОЕ ЧИСЛО',
                'head_en' => 'ACID NUMBER',
                'text_ru' => '<p>Показатель, характеризующий наличие в нефтепродукте продуктов окисления углеводородов, выражается количеством миллиграммов КОН, которое требуется для нейтрализации 1г нефтепродукта.</p>',
                'text_en' => '<p>The indicator characterizing the presence of hydrocarbon oxidation products in the oil product is expressed as the number of milligrams of KOH required to neutralize 1 g of the oil product.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'КИСЛОТНОСТЬ',
                'head_en' => 'ACIDITY',
                'text_ru' => '<p>Показатель, характеризующий наличие или отсутствие в нефтепродукте продуктов окисления углеводородов, выражается количеством миллиграммов КОН, которое требуется для нейтрализации 100 мл нефтепродукта.</p>',
                'text_en' => '<p>The indicator characterizing the presence or absence of hydrocarbon oxidation products in the oil product is expressed as the number of milligrams of KOH that is required to neutralize 100 ml of the oil product.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'КОАГУЛЯЦИЯ',
                'head_en' => 'COAGULATION',
                'text_ru' => '<p>Объединение мелких диспергированных частиц в бо́льшие по размеру агрегаты.</p>',
                'text_en' => '<p>Combining small dispersed particles into larger aggregates.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'КОЛЛОИД',
                'head_en' => 'COLLOID',
                'text_ru' => '<p>Дисперсные системы, промежуточные между истинными растворами и грубодисперсными системами — взвесями, в которых дискретные частицы, капли или пузырьки дисперсной фазы, имеющие размер хотя бы в одном из измерений от 1 до 100 нм, распределены в дисперсионной среде, обычно непрерывной, отличающейся от первой по составу или агрегатному состоянию. В свободнодисперсных коллоидных системах (дымы, золи) частицы не выпадают в осадок.</p>',
                'text_en' => '<p>Dispersed systems intermediate between true solutions and coarse systems - suspensions, in which discrete particles, drops or bubbles of the dispersed phase, having a size in at least one of the measurements from 1 to 100 nm, are distributed in a dispersion medium, usually continuous, differing from the first in composition or aggregate state. In freely dispersed colloidal systems (fumes, sols), particles do not precipitate.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'КОМПАУНДИРОВАНИЕ',
                'head_en' => 'COMPOUNDING',
                'text_ru' => '<p>Смешение нескольких компонентов в определенном соотношении для получения нефтепродукта заданного качества.</p>',
                'text_en' => '<p>Mixing several components in a certain ratio to obtain an oil product of a given quality.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'КОНСИСТЕНЦИЯ',
                'head_en' => 'CONSISTENCY',
                'text_ru' => '<p>Мера состояния (твердости) консистентных смазок. Она измеряется по пенетрации инструмента в нерабочую и рабочую смазку и количественно выражается в соответствии с рекомендациями NLGI (National Lubricating Grease Institute = Национальный Институт Консистентных Смазок). Для упрощения выражения консистенции консистентных смазок, весь диапазон консистенции в соответствии с пенетрацией в рабочую смазку делится на девять классов. Согласно классификации NLGI смазки делят на классы в зависимости от уровня пенетрации – чем больше численное значение пенетрации, тем мягче смазка. Классификация NLGI пластичных смазок по консистенции приведена в таблице (соответствует сортам по DIN 51818. DIN – Институт стандартов Германии). Существует девять категорий – от 000 до 6:</p><ul><li>Категории 000 и 00 являются полужидкими смазками, использующимися в качестве альтернативы маслам в механизмах и централизованных системах смазки с малым сечением подающих каналов (например, в современных грузовиках);</li><li>0 и 1 – категории для применения в главных централизованных системах смазки (например промышленное оборудование, грузовые автомобили);</li><li>Категории 2 и 3 используются в основном для смазки подшипников;</li><li>Категории 4 и 6 представляют исключительно густые смазки и используются редко за исключением специальных случаев «блоков смазки».</li></ul><p>Примечание. Пластичные смазки, используемые на легковом автомобиле, принадлежат, как правило, ко второму классу.</p><table class="default"><thead><tr><th>КЛАСС NGLI</th><th>ПЕНЕТРАЦИЯ<br>единица = 0,1</th><th>КОНСИСТЕНЦИЯ СМАЗКИ</th><th>ОБЛАСТЬ ПРИМЕНЕНИЯ</th></tr></thead><tbody><tr><td>000</td><td>445-475</td><td>очень жидкая</td><td>закрытые зубчатые передачи</td></tr><tr><td>00</td><td>400-430</td><td>жидкая</td><td>закрытые зубчатые передачи</td></tr><tr><td>0</td><td>355-385</td><td>полужидкая</td><td>централизованные системы смазки</td></tr><tr><td>1</td><td>310-340</td><td><span style="color:#c33">очень мягкая</span></td><td>централизованные системы смазки</td></tr><tr><td>2</td><td>265-295</td><td><span style="color:#c33">мягкая</span></td><td>шар/рол подшипники</td></tr><tr><td>3</td><td>220-250</td><td><span style="color:#c33">довольно мягкая</span></td><td>высокоскоростные подшипники</td></tr><tr><td>4</td><td>175-205</td><td>полутвердая</td><td>высокоскоростные подшипники</td></tr><tr><td>5</td><td>130-160</td><td>твердая</td><td>открытые зубчатые передачи</td></tr><tr><td>6</td><td>85-115</td><td>очень твердая</td><td>открытые зубчатые передачи</td></tr></tbody></table>',
                'text_en' => '<p>Мера состояния (твердости) консистентных смазок. Она измеряется по пенетрации инструмента в нерабочую и рабочую смазку и количественно выражается в соответствии с рекомендациями NLGI (National Lubricating Grease Institute = Национальный Институт Консистентных Смазок). Для упрощения выражения консистенции консистентных смазок, весь диапазон консистенции в соответствии с пенетрацией в рабочую смазку делится на девять классов. Согласно классификации NLGI смазки делят на классы в зависимости от уровня пенетрации – чем больше численное значение пенетрации, тем мягче смазка. Классификация NLGI пластичных смазок по консистенции приведена в таблице (соответствует сортам по DIN 51818. DIN – Институт стандартов Германии). Существует девять категорий – от 000 до 6:</p><ul><li>Categories 000 and 00 are semi-fluid lubricants used as an alternative to oils in machinery and centralized lubrication systems with small cross-sections of supply channels (for example, in modern trucks);</li><li>0 and 1 - categories for use in the main centralized lubrication systems (for example, industrial equipment, trucks);</li><li>Categories 2 and 3 are mainly used for bearing lubrication;</li><li>Grades 4 and 6 are exceptionally thick greases and are rarely used except in special cases of "grease blocks".</li></ul><p>Note. Greases used on a passenger car, as a rule, belong to the second class.</p><table class="default"><thead><tr><th>CLASS NGLI</th><th>PENETRATION <br>unit = 0.1</th><th>LUBRICANT CONSISTENCY</th><th>APPLICATION AREA</th></tr></thead><tbody><tr><td>000</td><td>445-475</td><td>very liquid</td><td>losed gears</td></tr><tr><td>00</td><td>400-430</td><td>liquid</td><td>losed gears</td></tr><tr><td>0</td><td>355-385</td><td>semi-liquid</td><td>entralized lubrication systems</td></tr><tr><td>one</td><td>310-340</td><td><span style="color:#c33">very soft</span></td><td>entralized lubrication systems</td></tr><tr><td>2</td><td>265-295</td><td><span style="color:#c33">soft</span></td><td>ball/roll bearings</td></tr><tr><td>3</td><td>220-250</td><td><span style="color:#c33">quite soft</span></td><td>high speed bearings</td></tr><tr><td>four</td><td>175-205</td><td>semi-solid</td><td>high speed bearings</td></tr><tr><td>5</td><td>130-160</td><td>hard</td><td>open gears</td></tr><tr><td>6</td><td>85-115</td><td>very hard</td><td>open gears</td></tr></tbody></table>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'КОРРОЗИОННАЯ АГРЕССИВНОСТЬ',
                'head_en' => 'CORROSIVE AGGRESSIVENESS',
                'text_ru' => '<p>Свойство нефтепродуктов вызывать разрушение изделий из металлов.  Коррозионная агрессивность масел, а также отдельных групп углеводородов определяется в основном их окисляемостью и характером образующихся при этом продуктов. Поскольку ароматические углеводороды оказывают тормозящее действие на процесс окисления нафтеновых углеводородов, снижая тем самым их коррозионную агрессивность, необходимо присутствие их в масле в определенной концентрации. Интенсивность коррозии металлов под влиянием влаги в большой степени определяется влагоустойчивостью смазок, которая зависит прежде всего от растворимости и эмульгирующей способности отдельных составных частей смазки. Существенное значение имеет также механическая прочность смазок, особенно в условиях механического действия воды (атмосферные осадки, обрызгивание водой). Влажный воздух также увеличивает коррозионную агрессивность масел и смазок, особенно при содержании в нем сернистых соединений. При этом речь может идти не только о природных сернистых соединениях, но и о тех присадках, которые вводятся в смазочные материалы с целью улучшения их антиокислительных, противоизносных и прочих свойств. Среди смазок, получаемых из мыл жирных кислот, самой большой влагоустойчивостью отличаются кальциевые и алюминиевые смазки, легче всего вымываются натриевые смазки Характеристика водостойкости имеет решающее значение для смазок, предназначенных для работы в условиях возможного контакта с водой. Тесная связь между возможными проявлениями коррозионной агрессивности смазок и их химической стабильностью указывает на необходимость учитывать показатель стабильности в качестве потенциального фактора коррозии. Принятым методом для оценки химической стабильности смазок является окисление их образцов в манометрическом сосуде под повышенным давлением и при высокой температуре. Критерием стабильности смазки является количество поглощенного кислорода и выделенных кислот.</p>',
                'text_en' => '<p>The property of petroleum products to cause the destruction of metal products. The corrosive aggressiveness of oils, as well as individual groups of hydrocarbons, is determined mainly by their oxidizability and the nature of the products formed. Since aromatic hydrocarbons have an inhibitory effect on the oxidation of naphthenic hydrocarbons, thereby reducing their corrosiveness, they must be present in the oil in a certain concentration. The intensity of corrosion of metals under the influence of moisture is largely determined by the moisture resistance of lubricants, which depends primarily on the solubility and emulsifying ability of the individual components of the lubricant. The mechanical strength of lubricants is also of significant importance, especially under the conditions of the mechanical action of water (atmospheric precipitation, splashing with water). Humid air also increases the corrosiveness of oils and greases, especially when containing sulfur compounds. In this case, we can talk not only about natural sulfur compounds, but also about those additives that are introduced into lubricants in order to improve their antioxidant, antiwear and other properties. Among greases derived from fatty acid soaps, calcium and aluminum greases are the most resistant to moisture, sodium greases are the easiest to wash out. The close relationship between the possible manifestations of the corrosiveness of lubricants and their chemical stability indicates the need to take into account the stability index as a potential corrosion factor. The accepted method for evaluating the chemical stability of lubricants is the oxidation of their samples in a gauge vessel at high pressure and high temperature. The criterion for the stability of the lubricant is the amount of absorbed oxygen and released acids.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'КОЭФФИЦИЕНТ ТРЕНИЯ',
                'head_en' => 'COEFFICIENT OF FRICTION',
                'text_ru' => '<p>Отношение силы трения между двумя поверхностями, скользящими одна по другой, к силе, перпендикулярной этим поверхностям.  Коэффициент трения — это основная характеристика трения как явления. Он определяется видом и состоянием поверхностей трущихся тел. Коэффициентом трения называют коэффициент пропорциональности, связывающий силу трения () и силу нормального давления (N) тела на опору. Чаще всего коэффициент трения обозначают буквой µ . Данный коэффициент трения не зависит от площадей, соприкасающихся поверхностей. В данном случае речь идет о коэффициенте трения скольжения, который зависит от совокупных свойств трущихся поверхностей и является безразмерной величиной. Коэффициент трения зависит от: качества обработки поверхностей, трущихся тел, присутствия на них грязи, скорости движения тел друг относительно друга и т.д. Коэффициент трения определяют эмпирически (опытным путем). Коэффициент трения, который соответствует максимальной силе трения покоя в большинстве случаев больше, чем коэффициент трения движения. Для большего числа пар материалов величина коэффициента трения не больше единицы и лежит в пределах 0,1≤µ≥0,5.</p>',
                'text_en' => '<p>The ratio of the force of friction between two surfaces sliding over one another to the force perpendicular to those surfaces. The coefficient of friction is the main characteristic of friction as a phenomenon. It is determined by the type and condition of the surfaces of rubbing bodies. The coefficient of friction is the coefficient of proportionality that relates the friction force () and the force of normal pressure (N) of the body on the support. Most often, the coefficient of friction is denoted by the letter µ. This coefficient of friction does not depend on the areas of contact surfaces. In this case, we are talking about the coefficient of sliding friction, which depends on the combined properties of the rubbing surfaces and is a dimensionless quantity. The coefficient of friction depends on: the quality of surface treatment, rubbing bodies, the presence of dirt on them, the speed of movement of bodies relative to each other, etc. The coefficient of friction is determined empirically (experimentally). The coefficient of friction, which corresponds to the maximum static friction force, is in most cases greater than the coefficient of motion friction. For a larger number of pairs of materials, the value of the friction coefficient is not greater than unity and lies within 0.1≤µ≥0.5.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'КРЕКИНГ',
                'head_en' => 'CRACKING',
                'text_ru' => '<p>(англ. cracking, расщепление) — высокотемпературная переработка нефти и ее фракций с целью получения, как правило, продуктов меньшей молекулярной массы — моторного топлива, смазочных масел и т. п. Вторичный (деструктивный) процесс переработки нефти или ее фракций, проводимый для увеличения выхода светлых продуктов и повышения их качества.</p>',
                'text_en' => '<p>(eng. cracking, splitting) - high-temperature processing of oil and its fractions in order to obtain, as a rule, products of a lower molecular weight - motor fuel, lubricating oils, etc. Secondary (destructive) process of processing oil or its fractions, carried out to increase output of light products and improve their quality.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'КРИСТАЛЛИЧЕСКАЯ РЕШЕТКА',
                'head_en' => 'CRYSTAL CELL',
                'text_ru' => '<p>Упорядоченная трехмерная структура твердого вещества, обладающая правильной повторяемостью расположения частиц (атомов, молекул или ионов).</p>',
                'text_en' => '<p>An ordered three-dimensional structure of a solid that has the correct repeatability of the arrangement of particles (atoms, molecules, or ions).</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЛАКОВЫЕ ОТЛОЖЕНИЯ',
                'head_en' => 'LACQUER DEPOSITS',
                'text_ru' => '<p>Еще называемые лаковым покрытием — тонкая нерастворимая пленка на движущихся частях двигателя от окисления смазки (или горючего), при высоких температурах.</p>',
                'text_en' => '<p>Also called lacquer coating - a thin insoluble film on the moving parts of the engine from the oxidation of the lubricant (or fuel) at high temperatures.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЛЕТУЧЕСТЬ',
                'head_en' => 'VOLATILITY',
                'text_ru' => '<p>Показатель, обычно зависящий от температуры, характеризующий скорость, с которой жидкость превращается в пар. В идеальном случае, горючие материалы должны иметь высокую летучесть, а смазочные материалы.</p>',
                'text_en' => '<p>A measure, usually dependent on temperature, that characterizes the rate at which a liquid is converted to vapor. Ideally, combustible materials should have high volatility, while lubricants.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'МИНЕРАЛЬНЫЕ МАСЛА',
                'head_en' => 'MINERAL OILS',
                'text_ru' => '<p>Основа минеральных масел изготавливается из сырой нефти, которая подвергается разнообразным сложным процессам переработки. Они относительно недороги и представляют собой средний уровень качества. Они наиболее часто используются как для автомобильных, так и индустриальных нужд.</p>',
                'text_en' => '<p>The base of mineral oils is made from crude oil, which undergoes a variety of complex refining processes. They are relatively inexpensive and represent an average level of quality. They are most often used for both automotive and industrial needs.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'МОДИФИКАТОРЫ ТРЕНИЯ',
                'head_en' => 'FRICTION MODIFIERS',
                'text_ru' => '<p>Соединения, растворимые в масле, адсорбирующиеся на поверхности металла, благодаря чему модифицированный предельный слой имеет коэффициент трения, промежуточный между жидкой и предельной смазкой. Модификаторы трения применяются в маслах для снижения коэффициента трения между поверхностями металла.</p>',
                'text_en' => '<p>Oil-soluble compounds adsorbed on the metal surface, due to which the modified limiting layer has a coefficient of friction intermediate between liquid and limiting lubrication. Friction modifiers are used in oils to reduce the coefficient of friction between metal surfaces.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'МОНИТОРИНГ',
                'head_en' => 'MONITORING',
                'text_ru' => '<p>Контроль состояния масла и техники и предотвращение выхода ее из строя.</p>',
                'text_en' => '<p>Monitoring the condition of oil and equipment and preventing its failure.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'МОНОЭТИЛЕНГЛИКОЛЬ',
                'head_en' => 'MONOETHYLENE GLYCOL',
                'text_ru' => '<p>Этиленглико́ль (гликоль; 1,2-диоксиэтан; этандиол-1,2), HO—CH2—CH2—OH — двухатомный спирт, простейший представитель полиолов. В очищенном виде представляет собой прозрачную бесцветную жидкость слегка маслянистой консистенции. Не имеет запаха и обладает сладковатым вкусом. Токсичен. Попадание этиленгликоля или его растворов в организм человека может привести к необратимым изменениям в организме и к летальному исходу. Этиленгликоль впервые был получен в 1859 году французским химиком Вюрцем из диацетата этиленгликоля омылением гидроксидом калия и в 1860-м гидратацией этиленоксида. Он не находил широкого применения до Первой мировой войны, когда в Германии его стали получать из дихлорэтана для использования в качестве замены глицерина при производстве взрывчатых веществ. В США полупромышленное производство начато в 1917 году через этиленхлоргидрин. Первое крупномасштабное производство начато с возведением завода в 1925 году около Саут Чарлстона (Западная Вирджиния, США) компанией «Carbide and Carbon Chemicals Co.» (англ.). К 1929 году этиленгликоль использовался практически всеми производителями динамита. Благодаря своей дешевизне этиленгликоль нашёл широкое применение в технике:</p><p>Как компонент автомобильных антифризов и тормозных жидкостей, что составляет 60 % его потребления. Смесь 60 % этиленгликоля и 40 % воды замерзает при −49 °С. Коррозионно активен, поэтому применяется с ингибиторами коррозии.</p><ul><li>Используется как теплоноситель с содержанием не более 50 % в системах отопления (частные дома в основном).</li><li>В качестве теплоносителя в виде раствора в автомобилях, в системах жидкостного охлаждения компьютеров.</li><li>В производстве целлофана, полиуретанов и ряда других полимеров. Это второе основное применение.</li><li>Как растворитель красящих веществ.</li><li>В органическом синтезе.</li></ul>',
                'text_en' => '<p>Ethylene glycol (glycol; 1,2-dioxyethane; ethanediol-1,2), HO-CH2-CH2-OH is a dihydric alcohol, the simplest representative of polyols. When purified, it is a clear, colorless liquid with a slightly oily consistency. It is odorless and has a sweetish taste. Toxic. The ingress of ethylene glycol or its solutions into the human body can lead to irreversible changes in the body and to death. Ethylene glycol was first obtained in 1859 by the French chemist Wurtz from ethylene glycol diacetate by saponification with potassium hydroxide and in 1860 by hydration of ethylene oxide. <font class="" style="vertical-align: inherit;">It did not see widespread use until World War I, when it was made in Germany from dichloroethane to be used as a substitute for glycerin in the manufacture of explosives. In the United States, semi-industrial production began in 1917 through ethylene chlorohydrin. The first large-scale production began with the construction of a plant in 1925 near South Charleston (West Virginia, USA) by the Carbide and Carbon Chemicals Co. (English). By 1929, ethylene glycol was being used by virtually every dynamite manufacturer. Due to its low cost, ethylene glycol has found wide application in technology:</p><p>As a component of automotive antifreeze and brake fluids, accounting for 60% of its consumption. A mixture of 60% ethylene glycol and 40% water freezes at -49°C. It is corrosive, therefore it is used with corrosion inhibitors.</p><ul><li>It is used as a coolant with a content of not more than 50% in heating systems (mainly private houses).</li><li>As a coolant in the form of a solution in cars, in liquid cooling systems for computers.</li><li>In the production of cellophane, polyurethanes and a number of other polymers. This is the second main application.</li><li>As a solvent for dyes.</li><li>in organic synthesis.</li></ul>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'МОЮЩАЯ ПРИСАДКА',
                'head_en' => 'DETERGENT',
                'text_ru' => '<p>Присадка, используемая в горючих или смазочных материалах для очистки внутренних деталей двигателя при их использовании.</p>',
                'text_en' => '<p>An additive used in fuels or lubricants to clean the internal parts of an engine when they are used.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'МЫЛО (применительно к смазочным материалам)',
                'head_en' => 'SOAP (as applied to lubricants)',
                'text_ru' => '<p>Основа или загуститель, обычно металлический, применяемый в смеси с маслами для получения пластичных смазочных материалов.  Соединение жирной кислоты и гидроксида металла. За счет правильного выбора жирной кислоты и гидроксида металла (кальции, литий, алюминий) можно изменить такие свойства мыла, как водостойкость и температурная стабильность.</p>',
                'text_en' => '<p>A base or thickener, usually metallic, used in mixture with oils to make lubricating greases. Compound of a fatty acid and a metal hydroxide. By choosing the right fatty acid and metal hydroxide (calcium, lithium, aluminium), the properties of the soap, such as water resistance and temperature stability, can be changed.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'НАБУХАНИЕ / УСАДКА',
                'head_en' => 'SWELLING / SHRINKAGE',
                'text_ru' => '<p>Под действием смазочных материалов, паров или газов герметизирующие материалы, изготовленные из резины, эластомеров и т. п., могут подвергаться нежелательным изменениям, приводящим к изменению их размеров.</p>',
                'text_en' => '<p>Under the influence of lubricants, vapors or gases, sealing materials made of rubber, elastomers, etc., can undergo undesirable changes, leading to a change in their dimensions.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'НАГАР',
                'head_en' => 'NAGAR',
                'text_ru' => '<p>Углеродистые отложения значительной толщины, образующиеся на деталях двигателя, сильно нагревающихся при работе. Нагар имеет толщину от десятых долей миллиметра и более. Он покрывает поверхности деталей, образующих камеру сгорания, канавки поршня и его огневую перемычку, внутреннюю поверхность днища поршня, детали системы выпуска отработавших газов и выпускные окна двухтактных двигателей. В зависимости от состава масла и условий формирования нагар бывает различной твердости. Наиболее неблагоприятно влияет на работу двигателя образование твердого нагара большой толщины в канавках компрессионных колец, на огневой перемычке поршня. Оно сопровождается распиранием и задиром колец и цилиндров или полировкой цилиндров. Нагарообразование на днище поршня с внутренней стороны нарушает охлаждение поршней маслом и приводит к аварийным последствиям (прогар или задир поршней, обрыв шатунов). Нагар состоит в основном из углерода, кислорода и неорганических соединений, образующихся при сгорании или срабатывании металлсодержащих присадок к маслам и топливам.</p>',
                'text_en' => '<p>Carbon deposits of considerable thickness formed on engine parts that become very hot during operation. Nagar has a thickness of tenths of a millimeter or more. It covers the surfaces of the parts that form the combustion chamber, the piston grooves and its firing bridge, the inner surface of the piston crown, the parts of the exhaust system and the exhaust ports of two-stroke engines. Depending on the composition of the oil and the conditions for the formation of carbon deposits, there are different hardness. The most unfavorable effect on the operation of the engine is the formation of thick hard deposits in the grooves of the compression rings, on the fire bridge of the piston. It is accompanied by bursting and scuffing of rings and cylinders or polishing of cylinders. Carbon formation on the bottom of the piston from the inside disrupts the cooling of the pistons with oil and leads to emergency consequences (burnout or scuffing of the pistons, breakage of the connecting rods). Nagar consists mainly of carbon, oxygen and inorganic compounds formed during the combustion or actuation of metal-containing additives to oils and fuels.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'НАГРУЗКА СВАРИВАНИЯ',
                'head_en' => 'WELDING LOAD',
                'text_ru' => '<p>Определяется как наименьшая нагрузка, по достижении которой происходит заедание механизма и схватывание пар трения. Нагрузка сваривания определяется на четырехшариковой машине трения и  характеризует противозадирные (EP-Extreme Pressure) свойства пластичной смазки. Данный метод испытаний регламентирован стандартом DIN 5151 350/4. Сущность способа заключается в следующем: Три стальных шарика помещаются в чашку и смазываются исследуемой смазкой, а четвёртый устанавливается сверху между ними; этот шарик вращается относительно трех шариков с заданной скоростью. Нагрузка увеличивается с определённым шагом до тех пор, пока вращающийся шарик не приварится к трем неподвижным шарикам.</p>',
                'text_en' => '<p>It is defined as the smallest load, upon reaching which the mechanism jams and the friction pairs seize. The welding load is determined on a four-ball friction machine and characterizes the extreme pressure (EP-Extreme Pressure) properties of the grease. This test method is regulated by DIN 5151 350/4. The essence of the method is as follows: Three steel balls are placed in a cup and lubricated with the investigated lubricant, and the fourth is placed on top between them; this ball rotates relative to three balls at a given speed. The load is increased in increments until the rotating ball is welded to the three stationary balls.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'НАФТЕНОВЫЕ УГЛЕВОДОРОДЫ',
                'head_en' => 'NAPTHENIC HYDROCARBONS',
                'text_ru' => '<p>(НАФТЕНЫ, ЦИКЛОАЛКАНЫ, ЦИКЛОПАРАФИНЫ, ПОЛИМЕТИЛЕНОВЫЕ) – класс карбоциклических соединений, состоящих из замкнутых в кольцо метиленовых групп и имеющих общую формулу СпН2п – Составная часть нефтей, топлив, масел и других нефтепродуктов. Обладают высокой теплотой сгорания и низкой температурой застывания.</p>',
                'text_en' => '<p>(NAPHTHENS, CYCLOALKANES, CYCLOPARAFFINS, POLYMETHYLENE) - a class of carbocyclic compounds consisting of methylene groups closed in a ring and having the general formula SpH2p - An integral part of oils, fuels, oils and other petroleum products. They have a high calorific value and a low pour point.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'НЕЙТРАЛЬНЫЕ МАСЛА',
                'head_en' => 'NEUTRAL OILS',
                'text_ru' => '<p>Очищенные парафиновые масляные основы.</p>',
                'text_en' => '<p>Refined paraffin oil bases.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'НЕПРЕДЕЛЬНЫЕ (НЕНАСЫЩЕННЫЕ) УГЛЕВОДОРОДЫ',
                'head_en' => 'UNSATURATED (UNSATURATED) HYDROCARBONS',
                'text_ru' => '<p>Класс ациклических соединений, содержащих в молекуле двойные или тройные связи между атомами углерода. Не входят в состав нефти, но образуются в процессе ее переработки. Подразделяются на олефиновые (с одной двойной связью), диолефиновые (с двумя двойными связями) и ацетиленовые (с одной тройной связью). Обладают низкой химической стабильностью и являются нежелательным компонентом бензинов, дизельных топлив и смазочных масел.</p>',
                'text_en' => '<p>A class of acyclic compounds containing double or triple bonds between carbon atoms in the molecule. They are not part of the oil, but are formed during its processing. They are divided into olefinic (with one double bond), diolefinic (with two double bonds) and acetylenic (with one triple bond). They have low chemical stability and are an undesirable component of gasolines, diesel fuels and lubricating oils.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'НЕРАБОЧАЯ ПЕНЕТРАЦИЯ',
                'head_en' => 'NON-WORKING PENETRATION',
                'text_ru' => '<p>Консистенция смазки или пасты в состоянии покоя, т.е. в том состоянии, в котором материал поставляется.</p>',
                'text_en' => '<p>The consistency of the grease or paste at rest, i.e. in the condition in which the material is supplied.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'НЕРАСТВОРИМЫЕ ПРИМЕСИ',
                'head_en' => 'INSOLUTION IMPURITIES',
                'text_ru' => '<p>Продукты износа, пыль и другие твердые загрязнители, которые присутствуют обычно в отработавшем масле.</p>',
                'text_en' => '<p>Wear products, dust and other solid contaminants that are normally present in used oil.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'НЕСГОРЕВШИЕ ПРОДУКТЫ',
                'head_en' => 'UNBURNED PRODUCTS',
                'text_ru' => '<p>Несгоревшее топливо или газы, возникающие в результате износа поршневых колец и прокладок, насыщающие, загрязняющие или разжижающие масло, используемое в двигателе.</p>',
                'text_en' => '<p>Unburnt fuel or gases resulting from worn piston rings and gaskets that saturate, contaminate, or thin the oil used in the engine.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'НЕФТЕПРОДУКТ',
                'head_en' => 'PETROLEUM PRODUCT',
                'text_ru' => '<p>Продукт, полученный при переработке нефти.</p>',
                'text_en' => '<p>A product obtained from oil refining.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'НЕФТЕХИМИЯ',
                'head_en' => 'PETROCHEMISTRY',
                'text_ru' => '<p>Раздел химии, изучающий свойства нефти, методы ее переработки и свойства продуктов, полученных из нефти.</p>',
                'text_en' => '<p>Branch of chemistry that studies the properties of oil, methods of its processing and properties of products obtained from oil.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'НЕФТЯНЫЕ МАСЛА',
                'head_en' => 'PETROLEUM OILS',
                'text_ru' => '<p>Типы масляных основ из неочищенной нефти с насыщенными углеводородами, содержащие минимум одно замкнутое кольцо атомов углерода. нефтяные масляные основы характеризуются низкой точкой замерзания, хорошей водоотталкиваемостью и высокой растворяющей способностью.</p>',
                'text_en' => '<p>Crude oil base oil types with saturated hydrocarbons containing at least one closed ring of carbon atoms. petroleum oil bases are characterized by low freezing point, good water repellency and high solvent power.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'НИЗКОТЕМПЕРАТУРНЫЕ ХАРАКТЕРИСТИКИ',
                'head_en' => 'LOW TEMPERATURE PERFORMANCE',
                'text_ru' => '<p>Характеристика минеральных нефтепродуктов, которая описывает помутнения, фильтруемость, текучесть, температуру замерзания, точки кристаллизации.</p>',
                'text_en' => '<p>A characteristic of mineral oil products that describes cloudiness, filterability, fluidity, freezing point, crystallization points.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ОБРАЗОВАНИЕ ЗАДИРОВ',
                'head_en' => 'SCORING',
                'text_ru' => '<p>Следы на металле в форме борозд, вызванные машинной обработкой или истиранием.</p>',
                'text_en' => '<p>Marks on metal in the form of grooves caused by machining or abrasion.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ОДОБРЕНИЯ ПРОИЗВОДИТЕЛЕЙ АВТОМОБИЛЕЙ',
                'head_en' => 'AUTO MANUFACTURERS APPROVALS',
                'text_ru' => '<p>Автопроизводители могут предъявлять и более высокие требования к маслам. Не дожидаясь очередных международных спецификаций они заявляют о своих оригинальных методах испытаний. После проверки эффективности лучшие из масел получают “одобрения” к применению от конкретного производителя:</p><ul><li>для легковых автомобилей: Mercedes-Benz, Renault, Peugeot, Volkswagen, Citroen, Ford, Fiat, Porsche, BMW, и т.д.</li><li>для грузовой техники: MAN, MB, Volvo, RVI, и т.д. Например, MB-APPROVAL 229.1, BMW Longlife-04, VW 500.00 и VW 505.01.</li></ul>',
                'text_en' => '<p>Automakers may have higher requirements for oils. Without waiting for the next international specifications, they declare their original test methods. After checking the effectiveness of the best oils receive “approvals” for use from a specific manufacturer:</p><ul><li>for passenger cars: Mercedes-Benz, Renault, Peugeot, Volkswagen, Citroen, Ford, Fiat, Porsche, BMW, etc.</li><li>for trucks: MAN, MB, Volvo, RVI, etc. For example, MB-APPROVAL 229.1, BMW Longlife-04, VW 500.00 and VW 505.01.</li><ul>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ОКАЛИНА',
                'head_en' => 'SCALE',
                'text_ru' => '<p>Твердый продукт, состоящий главным образом из оксидов и образующихся на поверхности металлических изделий при нагревании их в окислительной (напр. атмосферной) среде.</p>',
                'text_en' => '<p>Solid product, consisting mainly of oxides and formed on the surface of metal products when heated in an oxidizing (eg atmospheric) environment.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ОКИСЛЕНИЕ МАСЛА',
                'head_en' => 'OIL OXIDATION',
                'text_ru' => '<p>Естественное изменение свойств смазочного материала под воздействием кислорода воздуха, высоких температур, нагрузок и каталитического действия металлов. Это приводит к деструкции, полимеризации и ряду других химических превращений. При этом вследствие образования и накопления кислородсодержащих соединений (спирты, альдегиды, кетоны и др.) и углеродистых продуктов уплотнения изменяется состав масла, и ухудшаются его эксплуатационные характеристики. Типичными признаками окисления являются изменение цвета, запаха, увеличение вязкости, появление веществ, выпадающих в виде осадка. Значительно замедлить процесс окисления возможно с помощью использования антиоксидантов.</p>',
                'text_en' => '<p>The natural change in the properties of the lubricant under the influence of atmospheric oxygen, high temperatures, loads and the catalytic action of metals. This leads to destruction, polymerization and a number of other chemical transformations. At the same time, due to the formation and accumulation of oxygen-containing compounds (alcohols, aldehydes, ketones, etc.) and carbonaceous compaction products, the composition of the oil changes, and its performance characteristics deteriorate. Typical signs of oxidation are a change in color, odor, an increase in viscosity, the appearance of substances that precipitate. Significantly slow down the oxidation process is possible with the use of antioxidants.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ОККЛЮЗИЯ',
                'head_en' => 'OCCLUSION',
                'text_ru' => '<p>1. Захват вещества среды растущими в ней кристаллами.</p><p>2. Сорбция газов расплавами, обычно металлами.</p>',
                'text_en' => '<p>1. Capture of the substance of the medium by crystals growing in it.</p><p>2. Sorption of gases by melts, usually metals.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ОСТАТОЧНЫЙ КОМПОНЕНТ (БРАЙТСТОК)',
                'head_en' => 'RESIDUE COMPONENT (BRIGHTSTOCK)',
                'text_ru' => '<p>Высоковязкая масляная основа, устойчивая к температурам и производящая прочную смазочную пленку, в частности, в высокотемпературных условиях.</p>',
                'text_en' => '<p>High viscosity oil base that is temperature stable and produces a strong lubricating film, particularly under high temperature conditions.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ОТБОР ПРОБ',
                'head_en' => 'SAMPLE SELECTION',
                'text_ru' => '<p>Методы отбора проб нефти и нефтепродуктов из резервуаров, подземных хранилищ, наливных судов, железнодорожных и автомобильных цистерн и трубопроводов, а также бочек, бидонов, канистр и др. транспортной тары установлены ГОСТ 2517. Объединенная проба нефтепродукта отбирается стационарным пробоотборником в один прием или составляется из нескольких точечных проб, отобранных с соблюдением требований стандарта, с определенного уровня резервуара, транспортной емкости или из одного тарного места (канистра, бочка и т.п.). На случай арбитражного анализа сохраняют контрольную пробу, которая является частью объединенной или точечной пробы. Объемы проб топлив, смазочных материалов и специальных жидкостей для проведения анализов приведены в нормативной документации на конкретные виды продукции.</p>',
                'text_en' => '<p>Methods for sampling oil and oil products from tanks, underground storages, bulk carriers, railway and road tanks and pipelines, as well as barrels, cans, canisters and other shipping containers are established by GOST 2517. A combined sample of an oil product is taken by a stationary sampler in one step or is several point samples taken in compliance with the requirements of the standard from a certain level of the tank, transport tank or from one container (canister, barrel, etc.). In case of arbitration analysis, a control sample is retained, which is part of the pooled or incremental sample. Sample volumes of fuels, lubricants and special fluids for analysis are given in the regulatory documentation for specific types of products.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ОТРАБОТАННЫЕ НЕФТЕПРОДУКТЫ',
                'head_en' => 'USED ​​PETROLEUM PRODUCTS',
                'text_ru' => '<p>Отработанные масла, промывочные нефтяные жидкости, а также смеси нефти и нефтепродуктов, образующиеся при зачистке средств хранения, транспортирования или извлекаемые из нефтесодержащих вод. Должны собираться по маркам, сортам, группам или подгруппам в соответствии с ГОСТ 21046.</p>',
                'text_en' => '<p>Waste oils, oil flushing liquids, as well as mixtures of oil and oil products formed during cleaning of storage, transportation facilities or extracted from oily waters. Must be collected by brands, varieties, groups or subgroups in accordance with GOST 21046.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ОЧИСТКА МАСЕЛ АДСОРБЦИОННАЯ',
                'head_en' => 'CLEANING OF OILS BY ADSORPTION',
                'text_ru' => '<p>Процесс очистки масляных дистиллятов, основанный на адсорбции на адсорбентах (природные отбеливающие земли или глины) от присутствующих в маслах нежелательных примесей (смолы, мыла нафтеновых кислот, кислый гудрон, сульфокислоты, остатки минеральной кислоты и селективных растворителей). При перколяционной адсорбционной очистке дистиллят (в чистом виде или с растворителем) фильтруют через слой зернистого адсорбента. При контактной очистке – смешивают с тонко измельченным адсорбентом (при низких (80-90°С) или повышенных (100-300°С) температурах) с последующим отделением адсорбента методом фильтрации.</p>',
                'text_en' => '<p>The process of purification of oil distillates based on adsorption on adsorbents (natural bleaching earths or clays) from undesirable impurities present in oils (resins, naphthenic acid soaps, acid tar, sulfonic acids, mineral acid residues and selective solvents). In percolation adsorption purification, the distillate (in pure form or with a solvent) is filtered through a layer of granular adsorbent. In contact cleaning, it is mixed with a finely divided adsorbent (at low (80-90°C) or elevated (100-300°C) temperatures), followed by separation of the adsorbent by filtration.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ОЧИСТКА МАСЕЛ КИСЛОТНАЯ',
                'head_en' => 'OIL CLEANING ACID',
                'text_ru' => '<p>Состоит в обработке масляных дистиллятов серной кислотой или олеумом (дымящей серной кислотой) с последующим удалением остатка (кислые гудроны). Масла после кислотной очистки содержат в небольших количествах нежелательные кислые продукты, поэтому, как правило, подвергаются последующей обработке щелочами и адсорбентами (отбеливающие глины и др.). При кислотной очистке образуется большое количество кислого гудрона, который трудно поддается утилизации и загрязняет окружающую среду. Применяется, главным образом, при получении белых масел.</p>',
                'text_en' => '<p>It consists in the treatment of oil distillates with sulfuric acid or oleum (fuming sulfuric acid) with subsequent removal of the residue (acid tars). Oils after acid cleaning contain undesirable acidic products in small quantities, therefore, as a rule, they are subjected to subsequent treatment with alkalis and adsorbents (bleaching clays, etc.). Acid cleaning produces a large amount of acid tar, which is difficult to dispose of and pollutes the environment. It is used mainly in the production of white oils.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ОЧИСТКА МАСЕЛ СЕЛЕКТИВНАЯ',
                'head_en' => 'SELECTIVE OIL CLEANING',
                'text_ru' => '<p>Процесс обработки масляных дистиллятов селективными (избирательными) растворителями (диоксид серы, нитробензол, фенол, фурфурол, н-метилпирролидон и др.) с целью удаления нежелательных компонентов масляных дистиллятов (ароматические углеводороды, смолы, асфальтены и др.) путем экстракции жидкости жидкостью. Разновидностью селективной очистки является “дуосол-процесс”, в котором применяют два, не смешивающихся между собой, растворителя. Очищенные дистилляты называют рафинатами селективной очистки.</p>',
                'text_en' => '<p>The process of treating oil distillates with selective (selective) solvents (sulfur dioxide, nitrobenzene, phenol, furfural, n-methylpyrrolidone, etc.) in order to remove unwanted components of oil distillates (aromatic hydrocarbons, resins, asphaltenes, etc.) by extracting liquid with liquid. A variety of selective purification is the “duosol process”, in which two solvents that do not mix with each other are used. The purified distillates are called selective raffinates.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПАКЕТ ПРИСАДОК',
                'head_en' => 'ADDITIVE PACKAGE',
                'text_ru' => '<p>Сбалансированная смесь присадок различного функционального назначения, позволяющая получить товарный нефтепродукт с требуемыми свойствами и заданного качества.</p>',
                'text_en' => '<p>A balanced mixture of additives for various functional purposes, which makes it possible to obtain a commercial oil product with the required properties and a given quality.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПАРАФИНОВЫЕ МАСЛА',
                'head_en' => 'PARAFFIN OILS',
                'text_ru' => '<p>Типы масляных основ, имеющие высокий молекулярный вес и содержащие мазутные парафины.</p>',
                'text_en' => '<p>Types of oil bases having a high molecular weight and containing oily waxes.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПАРАФИНОВЫЕ УГЛЕВОДОРОДЫ',
                'head_en' => 'PARAFFIN HYDROCARBONS',
                'text_ru' => '<p>(АЛКАНЫ, НАСЫЩЕННЫЕ, МЕТАНОВЫЕ ИЛИ ПРЕДЕЛЬНЫЕ УГЛЕВОДОРОДЫ) – класс углеводородов с открытой цепью (ациклические), не содержащие двойных и тройных связей, имеющие общую формулу СпН2п+2. Парафиновые углеводороды с линейной структурой называются нормальными и обозначаются приставкой “н-” (напр. н-бутан), с разветвленной – изомерами и обозначаются приставкой “изо-” (напр. изобутан). Чем сложнее молекула вещества и выше ее молекулярная масса, тем больше у нее изомеров.</p>',
                'text_en' => '<p></p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПАСПОРТ БЕЗОПАСНОСТИ',
                'head_en' => 'MSDS',
                'text_ru' => '<p>Или сертификат безопасности материала (англ.: Material Safety Data Sheet, MSDS) – это документ, предназначенный для информирования работников предприятий и персонала аварийных служб о процедурах безопасного обращения с конкретными веществами или смесями веществ. Сертификат безопасности содержит сведения о физических характеристиках (температура плавления, температура кипения, температура воспламенения и т.д.), токсичности, влиянии на здоровье, способах оказания первой помощи, химической активности, условиях хранения, переработки, использовании защитного снаряжения и спецсредств, методах обезвреживания.</p>',
                'text_en' => '<p>Or the Material Safety Data Sheet (MSDS) is a document designed to inform plant workers and emergency personnel about the safe handling procedures for specific substances or mixtures of substances. The safety certificate contains information about physical characteristics (melting point, boiling point, ignition point, etc.), toxicity, health effects, first aid methods, chemical activity, storage, processing conditions, use of protective equipment and special equipment, methods of disposal.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПАССИВИРОВАНИЕ',
                'head_en' => 'PASSIVATION',
                'text_ru' => '<p>1. При трении – термодинамически неизбежный процесс взаимодействия механически активированных поверхностей трения с активными компонентами смазочной среды с образованием вторичных структур.</p><p>2. При коррозии – образование на поверхности пленки оксида, препятствующего развитию коррозионного процесса.</p>',
                'text_en' => '<p>1. During friction, a thermodynamically inevitable process of interaction of mechanically activated friction surfaces with active components of the lubricating medium with the formation of secondary structures.</p><p>2. During corrosion - the formation of an oxide film on the surface, which prevents the development of the corrosion process.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПАСТЫ',
                'head_en' => 'PASTES',
                'text_ru' => '<p>Смазочные и монтажные пасты являются, по сути, пластичными смазками, содержащими большее количество твердых добавок для улучшения их смазочных свойств. В зависимости от количества наполнителя различают: смазочные пасты – от 10 до 40%, монтажные пасты – свыше 40%. В монтажных пастах наполнитель также может выполнять функцию загустителя. Пасты применяют в тех случаях, когда обычные масла и пластичные смазки не способны выдержать жестких условий эксплуатации. Например, часто при работе на малых скоростях образующаяся смазывающая пленка имеет недостаточную толщину для разделения контактных поверхностей, что вызывает износ (задир). Наличие твердых добавок в смазочном материале решает данную проблему. Отдельно стоит указать пасты, содержащие реакционно-способные белые наполнители, которые в трибоконтакте под действием нагрузок и температур способны формировать активные слои на металлических поверхностях, снижающие трение и защищающие от износа даже в условиях экстремальных нагрузок. Белые наполнители обычно представляют собой различные неорганические соединения.</p>',
                'text_en' => '<p>Lubricating and assembly pastes are, in fact, greases containing a higher amount of solid additives to improve their lubricating properties. Depending on the amount of filler, there are: lubricating pastes - from 10 to 40%, mounting pastes - over 40%. In mounting pastes, the filler can also act as a thickener. Pastes are used when conventional oils and greases cannot withstand harsh operating conditions. For example, often when operating at low speeds, the resulting lubricating film is not thick enough to separate the contact surfaces, which causes wear (seizure). The presence of solid additives in the lubricant solves this problem. Separately, it is worth mentioning pastes containing reactive white fillers, which in tribocontact under the action of loads and temperatures are able to form active layers on metal surfaces, reducing friction and protecting against wear even under extreme loads. White fillers are usually various inorganic compounds.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПЕНЕТРАЦИЯ',
                'head_en' => 'PENETRATION',
                'text_ru' => '<p>Показатель, учитывающий глубину проникновения в смазку, измеряемую в 0,1 мм, стандартного конуса под действием собственного веса при определенных условиях окружающей среды. Например, пенетрация в 26,5 мм – 265 x 0,1 мм. Обычно, смазки, находящиеся какое-то время в эксплуатации, становятся мягче, в связи чем различают рабочую и нерабочую пенетрацию. Консистенцию смазок определяют по величине рабочей пенетрации, что отражено в классах NLGI. Общепринято, что пенетрация – условный эмпирический показатель, который лишен физического смысла и не характеризует эксплуатационные свойства смазок, однако, этот показатель используется для оценки объемно-механических свойств.</p>',
                'text_en' => '<p>A value that takes into account the depth of penetration into the lubricant, measured in 0.1 mm, of a standard cone under the influence of its own weight under certain environmental conditions. For example, a penetration of 26.5 mm is 265 x 0.1 mm. Typically, greases that have been in service for some time become softer, in connection with which a distinction is made between working and non-working penetration. The consistency of lubricants is determined by the value of the working penetration, which is reflected in the NLGI classes. It is generally accepted that penetration is a conditional empirical indicator that has no physical meaning and does not characterize the performance properties of lubricants, however, this indicator is used to assess volumetric and mechanical properties.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПЕНООБРАЗОВАНИЕ',
                'head_en' => 'FOAMING',
                'text_ru' => '<p>Захват маслом пузырьков воздуха. Снижается с помощью присадок, ингибирующих пенообразование. Пузырьки снижают смазочные свойства и способствуют окислению.</p>',
                'text_en' => '<p>Oil captures air bubbles. Reduced with additives that inhibit foaming. Bubbles reduce lubricity and promote oxidation.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПЕПТИЗАЦИЯ',
                'head_en' => 'PEPTIZATION',
                'text_ru' => '<p>Самопроизвольное диспергирование, проявляющееся в форме перехода в коллоидный раствор осадка, образовавшегося при коагуляции.</p>',
                'text_en' => '<p>Spontaneous dispersion, manifested in the form of a transition into a colloidal solution of the precipitate formed during coagulation.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПЕРЕГОНКА',
                'head_en' => 'DISTILLATION',
                'text_ru' => '<p>Метод и процесс разделения жидких смесей, основанный на отличии состава жидкости от состава, образующегося из нее пара; проводится путем частичного испарения разделяемой смеси жидкостей с последующей конденсацией образующихся паров.</p>',
                'text_en' => '<p>Method and process for the separation of liquid mixtures, based on the difference in the composition of the liquid from the composition of the vapor formed from it; is carried out by partial evaporation of the mixture of liquids to be separated, followed by condensation of the resulting vapors.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПЛАСТИЧНАЯ СМАЗКА',
                'head_en' => 'GREASE',
                'text_ru' => '<p>Это смазочный материал, в состав которого входят базовое масло — основа, загуститель — мыла, твердые углеводороды, часто стабилизатор для сохранения однородности смазки, иногда наполнитель (например, графит). В качестве загустителей обычно используют литиевые, кальциевые, натриевые или смешанные (литиево-кальциевые) мыла. Отличительная особенность пластичных смазок состоит в том, что они способны в зависимости от условий работы обладать свойствами твердых или жидких веществ. Под действием небольших усилий смазки ведут себя как твердое тело, т. е. могут удерживаться на вертикальных и наклонных плоскостях. Если действуют большие нагрузки, смазки работают как жидкость (обладают текучестью). Это свойство и послужило причиной того, что пластичные смазки получили очень широкое распространение. Их используют в узлах трения, к которым невозможно непрерывно подводить, масло, а также при больших удельных нагрузках и малых скоростях, в трудногерметизируемых узлах. Смазки уменьшают трение и износ, а также предохраняют поверхности от коррозии.</p>',
                'text_en' => '<p>This is a lubricant, which includes a base oil - a base, a thickener - soaps, solid hydrocarbons, often a stabilizer to maintain the uniformity of the lubricant, sometimes a filler (for example, graphite). Lithium, calcium, sodium or mixed (lithium-calcium) soaps are commonly used as thickeners. A distinctive feature of greases is that, depending on the operating conditions, they are capable of possessing the properties of solid or liquid substances. Under the action of small forces, lubricants behave like a solid body, that is, they can be held on vertical and inclined planes. If there are large loads, lubricants work like a liquid (have fluidity). This property was the reason why lubricating greases are very widespread. They are used in friction units, to which it is impossible to continuously supply oil, as well as at high specific loads and low speeds, in difficult-to-seal units. Lubricants reduce friction and wear and protect surfaces from corrosion.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПЛОТНОСТЬ',
                'head_en' => 'DENSITY',
                'text_ru' => '<p>Это физическая величина, определяемая массой вещества в единице объема (кг/м3, г/см3). Плотность зависит от температуры: с ее повышением плотность уменьшается и наоборот. Отношение плотностей двух веществ при определенных стандартных физических условиях называются относительной плотностью (величина безразмерная).</p>',
                'text_en' => '<p>This is a physical quantity determined by the mass of a substance per unit volume (kg/m3, g/cm3). Density depends on temperature: with its increase, density decreases and vice versa. The ratio of the densities of two substances under certain standard physical conditions is called the relative density (dimensionless value).</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПОЛИАЛЬФАОЛЕФИНЫ (ПАО)',
                'head_en' => 'POLYALPHAOLEFINS (PAO)',
                'text_ru' => '<p>Синтетические масла на основе ПАО образуют IV группу базовых масел по классификации API. Составляют около одной трети всех синтетических масел, отличаются универсальными смазочными свойствами, могут работать в широком интервале температур, обладают высоким индексом вязкости и стабильностью свойств на протяжении всего срока службы, не вызывают коррозии металлов, не образуют нагара и отложений, не оказывают отрицательного влияния на материалы прокладок и уплотнителей, хорошо смешиваются с минеральными маслами.</p>',
                'text_en' => '<p>Synthetic oils based on PAO form the IV group of base oils according to the API classification. They make up about one third of all synthetic oils, are distinguished by universal lubricating properties, can operate in a wide temperature range, have a high viscosity index and stability of properties throughout the entire service life, do not cause corrosion of metals, do not form carbon deposits and deposits, do not adversely affect materials gaskets and seals, mix well with mineral oils.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПОЛУСИНТЕТИЧЕСКОЕ МАСЛО',
                'head_en' => 'SEMI-SYNTHETIC OIL',
                'text_ru' => '<p>Это смесь минеральных и синтетических базовых масел, и может содержать в своем составе от 20 до 40 процентов «синтетики». Специальных требований к производителям полусинтетических смазочных материалов в отношении того, какое количество синтетического базового масла (синтетического компонента) должно быть в готовом моторном масле – нет. Также нет никаких предписаний, какой синтетический компонент (базовое масло группы III или группы IV) использовать при изготовлении полусинтетического смазочного материала. По своим характеристикам эти масла занимают промежуточное положение между минеральными и синтетическими маслами, т.е. их свойства лучше обычных минеральных масел, но хуже синтетических. По цене же эти масла значительно дешевле синтетических.</p>',
                'text_en' => '<p>This is a mixture of mineral and synthetic base oils, and can contain from 20 to 40 percent "synthetics" in its composition. There are no special requirements for manufacturers of semi-synthetic lubricants regarding how much synthetic base oil (synthetic component) should be in the finished engine oil. There are also no regulations on which synthetic component (group III or group IV base oil) to use in the manufacture of a semi-synthetic lubricant. According to their characteristics, these oils occupy an intermediate position between mineral and synthetic oils, i.e. their properties are better than conventional mineral oils, but worse than synthetic ones. At a price, these oils are much cheaper than synthetic ones.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПРИСАДКИ',
                'head_en' => 'ADDITIVES',
                'text_ru' => '<p>Это синтезированные химические соединения, вводимые в базовое масло для улучшения свойств в периоды эксплуатации и хранения. Присадки применяют в концентрациях от нескольких ppm (в случае антипенных агентов) и до 20% мас. и более. Они могут, как усиливать свойства друг друга за счет синергизма, так и вызывать антагонистические эффекты. Некоторые присадки являются многофункциональными продуктами, снижающими возможность негативного воздействия друг на друга. Присадки могут оказать влияние далеко не на все свойства. Например, они не способны изменить деаэрацию, термическую стабильность, сжимаемость, температуру кипения, теплопроводность и др. Хорошо сбалансированные и оптимизированные системы присадок могут радикально улучшать эксплуатационные характеристики смазочных материалов. Для создания эффективных композиций требуются высококачественные базовые жидкости.</p>',
                'text_en' => '<p>These are synthesized chemical compounds introduced into the base oil to improve properties during periods of operation and storage. Additives are used in concentrations from a few ppm (in the case of antifoam agents) and up to 20% wt. and more. They can both enhance each other\'s properties due to synergy and cause antagonistic effects. Some additives are multifunctional products that reduce the possibility of negative impact on each other. Additives may not affect all properties. For example, they cannot change air release, thermal stability, compressibility, boiling point, thermal conductivity, etc. Well balanced and optimized additive systems can dramatically improve lubricant performance.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПРОДУКТЫ ИЗНОСА',
                'head_en' => 'WEAR PRODUCTS',
                'text_ru' => '<p>Это частицы металлов и сплавов, а также оксидов металлов или их соединений с серой, фосфором и другими элементами, входящих в состав присадок к маслам, которые могут присутствовать в работающем масле. Размеры, форма, цвет частиц зависят от характера процесса изнашивания и режима смазки. Обычно размеры частиц составляют от десятых долей микрометра до 10-15 мкм. При интенсивном абразивном изнашивании или усталостном выкрашивании, задирах в масле обнаруживают более крупные частицы. При работе на маслах с различными уровнями эксплуатационных свойств и в двигателях разной конструкций содержание в масле металлов, соответствующее нормальному и неисправному состоянию деталей трения, могут сильно различаться. Поэтому использование данных о содержании в масле металлов для диагностирования технического состояния двигателя должно основываться на рекомендациях изготовителя техники или статистических данных, накопленных в конкретных условиях работы однотипных двигателей на одном и том же моторном масле.</p>',
                'text_en' => '<p>These are particles of metals and alloys, as well as metal oxides or their compounds with sulfur, phosphorus and other elements that are part of oil additives that may be present in the operating oil. The size, shape, color of the particles depend on the nature of the wear process and the lubrication regime. Typically, particle sizes range from tenths of a micrometer to 10-15 microns. With intense abrasive wear or fatigue spalling, scuffing, larger particles are found in the oil. When operating on oils with different levels of performance properties and in engines of different designs, the content of metals in the oil corresponding to the normal and faulty state of friction parts can vary greatly.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПРОКАЧИВАЕМОСТЬ МОТОРНОГО МАСЛА',
                'head_en' => 'ENGINE OIL PUMPABILITY',
                'text_ru' => '<p>Это показатель, характеризующийся низкотемпературной динамической вязкостью масла при малом градиенте скорости сдвига, измеряемой на вискозиметре MRV по методу ASTM D 4684. Согласно классификации моторных масел SAE J 300 динамическая вязкость зимних и всесезонных масел должна быть не более 60000 мПа*с при температуре от -45 С для наименее вязких масел класса 0W до -15С для наиболее вязких масел класса 25W. Такие значения динамической вязкости при отсутствии напряжения сдвига в процессе ее измерения гарантируют стабильное давление масла в главной магистрали смазочной системы и быстрое поступление масла в наиболее удаленным узлам двигателя, смазываемым под давлением, при проворачивании двигателя стартером в процессе холодного пуска.</p>',
                'text_en' => '<p>This is an indicator characterized by low-temperature dynamic viscosity of the oil at a low shear rate gradient, measured on an MRV viscometer according to the ASTM D 4684 method. C for the least viscous oils of class 0W to -15C for the most viscous oils of class 25W. Such values ​​of dynamic viscosity in the absence of shear stress during its measurement guarantee a stable oil pressure in the main line of the lubrication system and a rapid supply of oil to the most distant parts of the engine, lubricated under pressure, when the engine is turned by the starter during a cold start.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ПУАЗ',
                'head_en' => 'POIS',
                'text_ru' => '<p>Единица измерения динамической вязкости. Один пуаз равен вязкости жидкости, оказывающей сопротивление силой в 1 дину взаимному перемещению двух слоев жидкости площадью 1 см², находящихся на расстоянии 1 см. друг от друга и взаимно перемещающихся с относительной скоростью 1 см/с.</p>',
                'text_en' => '<p>Unit of measure for dynamic viscosity. One poise is equal to the viscosity of a liquid that resists a force of 1 dyne to the mutual movement of two layers of liquid with an area of ​​​​1 cm², located at a distance of 1 cm from each other and mutually moving at a relative speed of 1 cm / s.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'РАСХОД МАСЛА',
                'head_en' => 'OIL CONSUMPTION',
                'text_ru' => '<p>Сумма расхода масла на угар и расхода масла на смену. Расход масла на угар обусловлен переносом масла поршневыми кольцами со стенок цилиндра в камеру сгорания и испарением легких фракций масла при нагреве. Обычно утечки через уплотнения и из турбокомпрессора тоже включают в расход масла на угар. Выражают в литрах на 1000 км. пробега или в процентах от расхода топлива. Расход масла на смену равен отношению вместимости смазочной системы двигателя к назначенному ресурсу масла или наработке двигателя между сменами масла по его состоянию, т.е. от момента заправки двигателя свежим маслом до наступления отказа масла.</p>',
                'text_en' => '<p>The sum of oil consumption for waste and oil consumption per shift. Oil consumption for waste is due to the transfer of oil by piston rings from the cylinder walls to the combustion chamber and the evaporation of light oil fractions during heating. Typically, leaks through the seals and from the turbocharger are also included in the waste oil consumption. Expressed in liters per 1000 km. mileage or as a percentage of fuel consumption. The oil consumption per shift is equal to the ratio of the capacity of the engine lubrication system to the assigned oil resource or engine operating time between oil changes according to its condition, i.e. from the moment the engine is filled with fresh oil until the oil fails.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'РЕГЕНЕРИРОВАННОЕ МАСЛО',
                'head_en' => 'REGENERATED OIL',
                'text_ru' => '<p>Это техническое масло, получаемое очисткой отработанного масла физическим, химическим или физико-химическими методами, с эксплуатационными свойствами, восстановленными до требований нормативно-технической документации.</p>',
                'text_en' => '<p>This is a technical oil obtained by refining used oil by physical, chemical or physico-chemical methods, with performance properties restored to the requirements of regulatory and technical documentation.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'РОСТ ВЯЗКОСТИ МАСЛА',
                'head_en' => 'GROWTH OF OIL VISCOSITY',
                'text_ru' => '<p>При работе масла в поршневом двигателе происходит рост вязкости, который обусловлен испарением из пленки масла на стенках цилиндров наиболее летучих маловязких фракций, окислением и нитрованием углеводородов базового масла с образованием растворимых и нерастворимых продуктов, загущающих масло, внешним загрязнением масла нерастворимыми частицами (в основном частицами сажи). Рост вязкости масла имеет ряд негативных последствий. Ухудшается прокачиваемость масла, затрудняется холодный пуск двигателя, увеличиваются потери на трение при гидродинамическом режиме смазки и возрастает расход топлива., снижается теплоотвод от деталей, охлаждаемых маслом, и эффективность маслоочистителей. По этим причинам верхний предел вязкости масла всегда является показателем предельного состояния моторного масла.</p>',
                'text_en' => '<p>During the operation of oil in a piston engine, an increase in viscosity occurs, which is due to the evaporation of the most volatile low-viscosity fractions from the oil film on the cylinder walls, the oxidation and nitration of base oil hydrocarbons with the formation of soluble and insoluble products that thicken the oil, external contamination of the oil with insoluble particles (mainly soot particles ). The increase in oil viscosity has a number of negative consequences. The pumpability of the oil deteriorates, the cold start of the engine becomes more difficult, friction losses increase during the hydrodynamic lubrication regime and fuel consumption increases, heat removal from parts cooled by oil and the efficiency of oil cleaners decrease. For these reasons, the upper limit of oil viscosity is always an indication of the limit state of the engine oil.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'САЖА',
                'head_en' => 'SOOT',
                'text_ru' => '<p>Это практически чистый углерод, получаемый при регулярном сжигании жидких или газообразных углеводородов в присутствии заданного количества воздуха, не обеспечивающего полного сгорания.</p>',
                'text_en' => '<p>This is practically pure carbon obtained by regular combustion of liquid or gaseous hydrocarbons in the presence of a given amount of air, which does not ensure complete combustion.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'СЕДИМЕНТАЦИЯ',
                'head_en' => 'SEDIMENTATION',
                'text_ru' => '<p>Это оседание или всплывание частиц дисперсной фазы (твердых крупинок, капелек жидкости, пузырьков газа) в жидкой или газообразной дисперсионной среде в гравитационном поле или в поле центробежных сил. Скорость седиментации зависит от массы, размера и формы частиц, вязкости и плотности среды, а также ускорения, возникающего при действии на частицы сил поля.</p>',
                'text_en' => '<p>This is the settling or floating of particles of the dispersed phase (solid grains, liquid droplets, gas bubbles) in a liquid or gaseous dispersion medium in a gravitational field or in a field of centrifugal forces. The sedimentation rate depends on the mass, size and shape of the particles, the viscosity and density of the medium, as well as the acceleration that occurs when the particles are subjected to field forces.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'СИНЕРГИЗМ',
                'head_en' => 'SYNERGISM',
                'text_ru' => '<p>Это суммарное позитивное действие двух или нескольких присадок на свойство или свойства масла, которое превышает сумму эффектов каждой присадки в отдельности. Синергизм чаще проявляют присадки, имеющие разные механизмы действия или взаимодействующие так, что срабатываемость присадок-синергистов замедляется.</p>',
                'text_en' => '<p>This is the sum of the positive effects of two or more additives on the property or properties of the oil, which exceeds the sum of the effects of each additive separately. Synergism is more often manifested by additives that have different mechanisms of action or interact in such a way that the synergistic additives work slows down.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'СИНТЕТИЧЕСКИЕ МОТОРНЫЕ МАСЛА',
                'head_en' => 'SYNTHETIC ENGINE OILS',
                'text_ru' => '<p>Это масла, изготовленные на основе синтетических базовых масел (полученных синтетическим путем из жидких или газовых химических соединений) – ПАО, эфиров и диалкилбензолов или их смесей. Композиции присадок к синтетическим маслам создаются с учетом специфики их приемистости к присадкам, а также растворимости последних в синтетических маслах.</p>',
                'text_en' => '<p>These are oils made on the basis of synthetic base oils (synthetically obtained from liquid or gas chemical compounds) - PAO, ethers and dialkylbenzenes or mixtures thereof. Compositions of additives for synthetic oils are created taking into account the specifics of their acceptance to additives, as well as the solubility of the latter in synthetic oils.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'СМАЗКА ШАРИКОВЫХ ПОДШИПНИКОВ',
                'head_en' => 'LUBRICATION OF BALL BEARINGS',
                'text_ru' => '<p>Консистентная смазка для подшипников качения часто литий омыленные смазки, а также натрий мыла смазки для специальных областей применения, например, кальциевого мыла смазки для приложений с очень тяжелой воды присутствия.</p>',
                'text_en' => '<p>Greases for rolling bearings are often lithium saponified greases, as well as sodium soap greases for special applications, such as calcium soap greases for applications with very heavy water presence.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'СМАЗОЧНО-ОХЛАЖДАЮЩИЕ ЖИДКОСТИ (СОЖ)',
                'head_en' => 'LUBRICANT AND COOLING LIQUIDS (COOLANTS)',
                'text_ru' => '<p>Это техническая жидкость, вводимая в зону обработки заготовки резанием или давлением. Разделяются на масляные и водосмешиваемые. Представляют собой многокомпонентные системы. Помимо нефтяного или синтетического масла и воды, используемых в качестве основы (базового компонента), они содержат комбинации присадок различного функционального назначения. Контакт режущего инструмента, штампа, матрицы или валка с обрабатываемым материалом и стружкой происходит при высоких давлениях и температурах. В результате возникают значительные силы трения. В этих условиях основное назначение СОЖ заключается в том, чтобы смазать поверхности трения, отвести от них теплоту, облегчить процесс деформации металла, удалить из зоны резания стружку ,металлические опилки и грязь. Благодаря этому снижаются силы резания или усилия деформации металла и потребляемая мощность, увеличивается стойкость инструмента и улучшается качество изделий. Кроме того, СОЖ временно защищает обрабатываемое изделие и детали оборудования от коррозии.</p>',
                'text_en' => '<p>This is a technical fluid introduced into the workpiece processing zone by cutting or pressure. They are divided into oil and water miscible. They are multicomponent systems. In addition to petroleum or synthetic oil and water used as a base (base component), they contain combinations of additives for various functional purposes. The contact of the cutting tool, die, matrix or roll with the material being processed and chips occurs at high pressures and temperatures. As a result, significant friction forces arise. Under these conditions, the main purpose of the coolant is to lubricate the friction surfaces, remove heat from them, facilitate the process of metal deformation, remove chips, metal filings and dirt from the cutting zone. Due to this, cutting forces or metal deformation forces and power consumption are reduced, increases tool life and improves product quality. In addition, the coolant temporarily protects the workpiece and equipment parts from corrosion.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'СМАЗЫВАЮЩАЯ СПОСОБНОСТЬ',
                'head_en' => 'LUBRICITY',
                'text_ru' => '<p>Это свойство смазочного материала снижать износ и силу трения, независимо от его вязкости. Смазывающая способность приобретает большое значение при граничной смазке. В условиях граничной смазки масла, имеющие более высокую маслянистость, обеспечивают наименьшее трение и износ, а также предотвращают заедание деталей трения. Наиболее распространенные способы оценки смазывающей способности масла – механические испытания их на приборах и машинах трения.</p>',
                'text_en' => '<p>This is the property of a lubricant to reduce wear and friction, regardless of its viscosity. Lubricity is of great importance in boundary lubrication. Under boundary lubrication conditions, oils having a higher lubricity provide the least friction and wear, and also prevent seizing of friction parts. The most common methods for assessing the lubricity of oils are mechanical tests on instruments and friction machines.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'СМЕНА МАСЛА',
                'head_en' => 'OIL CHANGE',
                'text_ru' => '<p>Данный процесс должен осуществляться согласно требованиям производителя оборудования в установленные интервалы наработки или пробега. Допустима смена масла по показателям его состояния там, где предусмотрен регулярный отбор проб работающего масла из смазочной системы двигателей и проведение анализов по показателем предельного состояния, установленным для масла конкретной марки при его работа в данном двигателе данного объекта техники.</p>',
                'text_en' => '<p>This process must be carried out in accordance with the requirements of the equipment manufacturer in the established intervals of operating time or mileage. It is permissible to change the oil according to its condition indicators where regular sampling of the operating oil from the engine lubrication system and analysis are carried out according to the limit state indicator established for the oil of a particular brand during its operation in a given engine of a given technical object.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'СОВМЕСТИМОСТЬ СМАЗОЧНЫХ МАТЕРИАЛОВ',
                'head_en' => 'LUBRICANT COMPATIBILITY',
                'text_ru' => '<p>Это способность двух или нескольких СМ смешиваться между собой без ухудшения их эксплуатационных свойств и стабильности при хранении.</p>',
                'text_en' => '<p>This is the ability of two or more lubricants to mix with each other without deteriorating their performance properties and storage stability.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'СТАРЕНИЕ МАСЛА',
                'head_en' => 'OIL AGING',
                'text_ru' => '<p>Это совокупность процессов, сопровождающихся изменением состава и свойств работающего в двигателе масла, причем большинство изменений влечет за собой снижение работоспособности масла. наиболее значимые процессы старения – окисление масла под действием высокой температуры, окисляющей среды и катализаторов – продуктов изнашивания и коррозии; загрязнение продуктами неполного сгорания топлива, пылью; истощение эффективного действия присадок, расходуемых на реакции нейтрализации, диспергирование загрязнений, ингибирование окислительных процессов; разжижение масла топливом; механическая и термическая деструкция вязкостных присадок; испарение легких фракций базового масла.</p>',
                'text_en' => '<p>This is a set of processes accompanied by a change in the composition and properties of the oil working in the engine, and most of the changes entail a decrease in the performance of the oil. the most significant aging processes are oil oxidation under the influence of high temperature, an oxidizing environment and catalysts - wear and corrosion products; pollution by products of incomplete combustion of fuel, dust; depletion of the effective action of additives consumed in neutralization reactions, dispersion of contaminants, inhibition of oxidative processes; dilution of oil by fuel; mechanical and thermal destruction of viscous additives; evaporation of light fractions of the base oil.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'СТОКС',
                'head_en' => 'STOKES',
                'text_ru' => '<p>Это единица кинематической вязкости. Один стокс равен кинематической вязкости, при которой динамическая вязкость среды плотностью 1 г/см³ равна 1 пз. Кинематическая вязкость равна отношению динамической вязкости к плотности среды и дает понятие о вязкости среды в определенных условиях — под действием силы тяжести. Это связано с методом измерения вязкости в капиллярном вискозиметре, когда измеряется время вытекания жидкости из калиброванной емкости через отверстие под действием силы тяжести.</p>',
                'text_en' => '<p>This is the unit of kinematic viscosity. One stokes is equal to the kinematic viscosity at which the dynamic viscosity of a medium with a density of 1 g/cm³ is equal to 1 poise. Kinematic viscosity is equal to the ratio of dynamic viscosity to the density of the medium and gives the concept of the viscosity of the medium under certain conditions - under the influence of gravity. This is due to the method of measuring viscosity in a capillary viscometer, when the time of fluid flow from a calibrated container through a hole under the action of gravity is measured.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'СУЛЬФАТНАЯ ЗОЛЬНОСТЬ',
                'head_en' => 'SULFATE ASH',
                'text_ru' => '<p>Это зольность масла или другого смазочного материала, определяемая путем обработки остатка серной кислотой с последующим выпариванием до полного высыхания. Выражается в % масс. В процессе эксплуатации зольные отложения могут образовываться на днище поршня, тюльпанах клапанов, свечах зажигания, головке цилиндров со стороны камеры сгорания. Зольные отложения почти целиком состоят из неорганических продуктов сгорания масла, содержащего малорастворимые металлорганические вещества (моющие и антиокислительные присадки, модификаторы трения). Для предотвращения образования зольных отложений ограничивают сульфатную зольность масел и их расход на угар, а также используют присадки с такими сочетаниями металлов, которые менее склонны к образованию зольных отложений.</p>',
                'text_en' => '<p>This is the ash content of an oil or other lubricant, determined by treating the residue with sulfuric acid and then evaporating it to dryness. Expressed in % wt. During operation, ash deposits can form on the piston crown, valve tulips, spark plugs, and the cylinder head on the side of the combustion chamber. Ash deposits almost entirely consist of inorganic combustion products of oil containing poorly soluble organometallic substances (detergent and antioxidant additives, friction modifiers). To prevent the formation of ash deposits, the sulfate ash content of oils and their waste consumption are limited, and additives with metal combinations that are less prone to the formation of ash deposits are used.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТВЕРДЫЕ СМАЗОЧНЫЕ ВЕЩЕСТВА',
                'head_en' => 'SOLID LUBRICANTS',
                'text_ru' => '<p>Твердые вещества, которые вводятся между скользящими поверхностями для уменьшения трения и износа и предотвращения заедания, холодной сварки и коррозионного истирания.</p>',
                'text_en' => '<p>Solids that are injected between sliding surfaces to reduce friction and wear and prevent seizing, cold welding and galling.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТЕМПЕРАТУРА ВОСПЛАМЕНЕНИЯ',
                'head_en' => 'FLASH TEMPERATURE',
                'text_ru' => '<p>Характеристика пожароопасности нефтепродукта – температура, при которой продукт, нагреваемый в установленных стандартом условиях, загорается при поднесении к нему пламени и горит не менее 5 с; определяется по ГОСТ 12.1.044.</p>',
                'text_en' => '<p>The fire hazard characteristic of an oil product is the temperature at which the product, heated under the conditions established by the standard, ignites when a flame is brought to it and burns for at least 5 s; determined according to GOST 12.1.044.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТЕМПЕРАТУРА ВСПЫШКИ',
                'head_en' => 'FLASH POINT',
                'text_ru' => '<p>Характеристика пожароопасности нефтепродукта – минимальная температура, при которой происходит кратковременное воспламенение паров нефтепродукта от пламени в условиях испытания; т. в. определяется в приборах с открытым (ГОСТ 4333)или закрытым (ГОСТ 6356) тиглем.</p>',
                'text_en' => '<p>Characteristics of the fire hazard of an oil product - the minimum temperature at which a short-term ignition of an oil product vapor from a flame occurs under test conditions; t.v. is determined in devices with an open (GOST 4333) or closed (GOST 6356) crucible.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТЕМПЕРАТУРА ЗАМЕРЗАНИЯ',
                'head_en' => 'FREEZING POINT',
                'text_ru' => '<p>Самая низкая температура, при которой масло в испытательных условиях будет течь свободно. Можно добиться более низкой точки замерзания с помощью присадки.</p>',
                'text_en' => '<p>The lowest temperature at which the oil will flow freely under test conditions. It is possible to achieve a lower freezing point with an additive.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТЕМПЕРАТУРА ЗАСТЫВАНИЯ',
                'head_en' => 'POUR POINT',
                'text_ru' => '<p>Характеристика низкотемпературных свойств (ГОСТ 20287) – т-ра, при которой нефтепродукт теряет подвижность.</p>',
                'text_en' => '<p>Characteristics of low-temperature properties (GOST 20287) - the temperature at which the oil product loses its mobility.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТЕМПЕРАТУРА КАПЛЕПАДЕНИЯ',
                'head_en' => 'DROPPING POINT',
                'text_ru' => '<p>Температура, при которой пластичный смазочный материал меняет состояние с пластичного твердого или полутвердого на жидкое и в стандартных испытательных условиях начинает стекать из трубки.</p>',
                'text_en' => '<p>The temperature at which a lubricating grease changes state from a ductile solid or semi-solid to a liquid and, under standard test conditions, begins to flow out of the tube.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТЕМПЕРАТУРА КИПЕНИЯ',
                'head_en' => 'BOILING TEMPERATURE',
                'text_ru' => '<p>Температура, при которой кипит химически однородная материя.</p>',
                'text_en' => '<p>The temperature at which a chemically homogeneous substance boils.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТЕМПЕРАТУРА КРИСТАЛЛИЗАЦИИ',
                'head_en' => 'CRYSTALLIZATION TEMPERATURE',
                'text_ru' => '<p>Температура, при которой облако кристаллов парафина появляется в жидкости продукта в контролируемых условиях испытаний в соответствии с DIN ISO 3015.</p>',
                'text_en' => '<p>The temperature at which a cloud of paraffin crystals appears in the product liquid under controlled test conditions according to DIN ISO 3015.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТЕМПЕРАТУРА ПЛАВЛЕНИЯ',
                'head_en' => 'MELTING TEMPERATURE',
                'text_ru' => '<p>Температура, при которой твердое тело превращается в жидкое состояние вещества при нагревании.</p>',
                'text_en' => '<p>The temperature at which a solid changes to a liquid state when heated.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТЕМПЕРАТУРНАЯ УСТОЙЧИВОСТЬ',
                'head_en' => 'TEMPERATURE STABILITY',
                'text_ru' => '<p>Свойства смазки противодействовать окислению при высоких рабочих температурах.</p>',
                'text_en' => '<p>Lubricant properties to resist oxidation at high operating temperatures.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТЕРМООКИСЛИТЕЛЬНАЯ СТАБИЛЬНОСТЬ',
                'head_en' => 'THERMO-OXIDATIVE STABILITY',
                'text_ru' => '<p>Показатель, характеризующий антиокислительные свойства масел (ГОСТ 23175); определяется временем, в течение которого тонкий слой масла превращается в лаковую пленку; чем выше т.с., тем медленнее масло будет окисляться, тем меньше опасность пригорания поршневых колец при работе двигателя на этом масле; в реактивных топливах т.с. определяется по ГОСТ 17751 и характеризует его антиокислительные свойства.</p>',
                'text_en' => '<p>An indicator characterizing the antioxidant properties of oils (GOST 23175); determined by the time during which a thin layer of oil turns into a varnish film; the higher the t.s., the slower the oil will oxidize, the less the risk of burning the piston rings when the engine is running on this oil; in jet fuels t.s. is determined according to GOST 17751 and characterizes its antioxidant properties.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТИКСОТРОПИЯ',
                'head_en' => 'THIXOTROPY',
                'text_ru' => '<p>Это специфическое свойство коагуляционных структур после их разрушения в результате механического воздействия самопроизвольно восстанавливаться во времени. Сущность тиксотропии заключается в том, что связи, которые были разрушены при механическом воздействии. Восстанавливаются в результате случайных удачных соударений частиц, находящихся в броуновском движении. Тиксотропия – это важное свойство пластичных смазок, гелей и паст, которое проявляется при производстве продуктов и в процессе их хранения и применения.</p>',
                'text_en' => '<p>This is a specific property of coagulation structures after their destruction as a result of mechanical action to spontaneously recover in time. The essence of thixotropy lies in the fact that bonds that have been destroyed by mechanical action. They are restored as a result of random successful collisions of particles in Brownian motion. Thixotropy is an important property of lubricating greases, gels and pastes, which manifests itself during the production of products and during their storage and use.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТИТР',
                'head_en' => 'TITER',
                'text_ru' => '<p>Число граммов растворенного вещества в 1 мл раствора.</p>',
                'text_en' => '<p>Number of grams of solute in 1 ml of solution.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТИТРАНТ',
                'head_en' => 'TITRANT',
                'text_ru' => '<p>Раствор реагента или включающая его газовая смесь с точно известной концентрацией, используемые в титриметрическом анализе.</p>',
                'text_en' => '<p>A solution of a reagent, or a gas mixture containing it, at precisely known concentrations, used in titrimetric analysis.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТИТРОВАНИЕ',
                'head_en' => 'TITRATION',
                'text_ru' => '<p>Метод и процесс определения концентрации раствора путем постепенного прибавления к нему контролируемого количества реагирующего с ним титранта до достижения конечной точки титрования.</p>',
                'text_en' => '<p>Method and process for determining the concentration of a solution by gradually adding to it a controlled amount of a titrant that reacts with it until the end point of the titration is reached.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТОКСИЧНОСТЬ',
                'head_en' => 'TOXICITY',
                'text_ru' => '<p>Экологический показатель; отражает воздействие нефтепродукта и продуктов его сгорания и разложения на человека и окружающую среду.</p>',
                'text_en' => '<p>Environmental indicator; reflects the impact of the oil product and products of its combustion and decomposition on humans and the environment.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТОРМОЗНЫЕ И АМОРТИЗАТОРНЫЕ ЖИДКОСТИ',
                'head_en' => 'BRAKE AND SHOCK ABSORBER FLUIDS',
                'text_ru' => '<p>Группа жидких рабочих сред для гидравлических систем; первые применяются в качестве рабочей жидкости гидропривода тормозной системы автомобиля, вторые – в качестве жидкой среды в телескопических и рычажно-кулачковых амортизаторах автомобилей; широко распространенными тормозными жидкостями являются смесевые продукты БСК, ГТЖ-22, ГТЖ-22М, «Нева», «Томь», «Роса» и др.; амортизаторными жидкостями – АЖ-12Т, АЖ-170, МГП-10 и др.</p>',
                'text_en' => '<p>Group of liquid working media for hydraulic systems; the first ones are used as a working fluid for the hydraulic drive of the brake system of a car, the second ones - as a liquid medium in telescopic and lever-cam shock absorbers of cars; widespread brake fluids are mixed products BSK, GTZH-22, GTZH-22M, Neva, Tom, Rosa, etc.; shock absorber fluids - AZh-12T, AZh-170, MGP-10, etc.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТРАНСМИССИОННОЕ МАСЛО',
                'head_en' => 'TRANSMISSION OIL',
                'text_ru' => '<p>Смазочные масла для промышленных передач: 51509 DIN, 51517-1/-2/-3 (смазочных масел C, CL, CLP), для зубчатых колес транспортных средств в соответствии с API GL 1 до 6 GL, SAE классы: DIN 51512.</p>',
                'text_en' => '<p>Lubricating oils for industrial gears: DIN 51509, 51517-1/-2/-3 (C, CL, CLP lubricating oils), for vehicle gears in accordance with API GL 1 to 6 GL, SAE classes: DIN 51512.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТРЕНИЕ',
                'head_en' => 'FRICTION',
                'text_ru' => '<p>Сопротивление скольжению двух поверхностей одна относительно другой.</p>',
                'text_en' => '<p>Slip resistance of two surfaces relative to one another.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ТРИБОЛОГИЯ',
                'head_en' => 'TRIBOLOGY',
                'text_ru' => '<p>Наука, занимающаяся исследованием связей между трением, износом и смазкой, а также свойствами смазочных материалов, и внедрением результатов этих исследований в технику.</p>',
                'text_en' => '<p>The science concerned with the study of the relationship between friction, wear and lubrication, as well as the properties of lubricants, and the implementation of the results of these studies in technology.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'УГЛЕВОДОРОДЫ',
                'head_en' => 'HYDROCARBONS',
                'text_ru' => '<p>Индивидуальные органические соединения, состоящие из углерода и водорода, с различным строением и соотношением между элементами. Различают углеводороды трех классов: парафиновые, нафтеновые, ароматические. Широко распространены углеводороды смешанного строения: нафтено-парафиновые, нафтено-ароматические, ароматико-парафиновые. Практически вся масса нефти состоит из углеводородов.</p>',
                'text_en' => '<p>Individual organic compounds, consisting of carbon and hydrogen, with different structures and ratios between the elements. There are three classes of hydrocarbons: paraffinic, naphthenic, aromatic. Hydrocarbons of a mixed structure are widespread: naphtheno-paraffin, naphthene-aromatic, aromatic-paraffin. Almost the entire mass of oil consists of hydrocarbons.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'УНИФИКАЦИЯ',
                'head_en' => 'UNIFICATION',
                'text_ru' => '<p>Выбор оптимального количества разновидностей продукции, процессов, услуг, значений их параметров и размеров.</p>',
                'text_en' => '<p>Selection of the optimal number of varieties of products, processes, services, values ​​of their parameters and sizes.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'УСИЛИТЕЛИ АДГЕЗИИ',
                'head_en' => 'ADHESION PROMOTIONERS',
                'text_ru' => '<p>Вещества для повышения клейкости к рабочим поверхностям – присадки, добавляемые к маслам и консистентным смазкам для улучшения адгезии (например, полиизобутен).</p>',
                'text_en' => '<p>Tackifiers are additives added to oils and greases to improve adhesion (e.g. polyisobutene).</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ФИКСАНАЛЫ',
                'head_en' => 'FIXANALS',
                'text_ru' => '<p>Запаянные стеклянные ампулы заводского производства, содержащие строго определенное (обычно 0,1 моль) количество химического соединения; предназначены для приготовления титров.</p>',
                'text_en' => '<p>Factory-sealed glass ampoules containing a strictly defined (usually 0.1 mol) amount of a chemical compound; intended for the preparation of titles.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ФИЛЬТРУЕМОСТЬ',
                'head_en' => 'FILTERABILITY',
                'text_ru' => '<p>Применительно к моторным маслам в классификациях API и ILSAC принято характеризовать уменьшением скорости фильтрации при обводнении масла. Метод определения разработан фирмой General Motors (GM 9099P). Допустимое уменьшение скорости фильтрации может составлять не более 50% (для масел, применяемых в бензиновых двигателях легковых автомобилей).</p>',
                'text_en' => '<p>With regard to motor oils in the API and ILSAC classifications, it is customary to characterize the decrease in the filtration rate when the oil is watered. The determination method was developed by General Motors (GM 9099P). Permissible reduction in filtration rate can be no more than 50% (for oils used in gasoline engines of passenger cars).</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ФЛЕГМА',
                'head_en' => 'REFLUX',
                'text_ru' => '<p>Часть дистиллята, возвращаемая на верхнюю тарелку ректификационной колонны для ее орошения.</p>',
                'text_en' => '<p>Part of the distillate returned to the top plate of the distillation column for its irrigation.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ФЛОКУЛЯЦИЯ',
                'head_en' => 'FLOCCULATION',
                'text_ru' => '<p>Вид коагуляции, при которой частицы дисперсной фазы образуют рыхлые хлопьевидные агрегаты (флокулы).</p>',
                'text_en' => '<p>A type of coagulation in which the particles of the dispersed phase form loose flocculent aggregates (flocculi).</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ФОРМОВОЧНОЕ МАСЛО',
                'head_en' => 'MOLDING OIL',
                'text_ru' => '<p>Масло, используемое в формах при литье или формовании с тем, чтобы материал не прилипал к форме.</p>',
                'text_en' => '<p>An oil used in molds during casting or molding to keep the material from sticking to the mould.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ФРАКЦИЯ',
                'head_en' => 'FRACTION',
                'text_ru' => '<p>Часть нефти или нефтепродукта, выкипающая в определенном температурном диапазоне.</p>',
                'text_en' => '<p>Part of an oil or oil product that boils away within a certain temperature range.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ФТОРОСИЛИКОНЫ',
                'head_en' => 'FLUOROSILICONES',
                'text_ru' => '<p>Силиконы, которые содержат в молекуле атомы фтора.</p>',
                'text_en' => '<p>Silicones that contain fluorine atoms in the molecule.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ХАРАКТЕРИСТИКА ПРОПУСКНОЙ СПОСОБНОСТИ',
                'head_en' => 'CAPACITY CHARACTERISTICS',
                'text_ru' => '<p>Реологические свойства (способность потока) связаны с вязкостью, вязкостно-температурными, релаксационными, адгезионными и другими характеристиками масел. </p>',
                'text_en' => '<p>Rheological properties (flow ability) are associated with viscosity, viscosity-temperature, relaxation, adhesion and other characteristics of oils.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ХЕМОСОРБЦИЯ',
                'head_en' => 'CHEMOSORPTION',
                'text_ru' => '<p>Адсорбция, сопровождающаяся химическим взаимодействием между молекулами сорбата и сорбента.</p>',
                'text_en' => '<p>Adsorption accompanied by chemical interaction between sorbate and sorbent molecules.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ХИМИЧЕСКИ ИНЕРТНЫЙ',
                'head_en' => 'CHEMICALLY INERT',
                'text_ru' => '<p>(смазочный агент) не вступающий в химические реакции с некоторыми веществами.</p>',
                'text_en' => '<p>(lubricating agent) that does not enter into chemical reactions with certain substances.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЦВЕТ НЕФТЕПРОДУКТОВ И СМАЗОЧНЫХ МАТЕРИАЛОВ',
                'head_en' => 'COLOR OF PETROLEUM PRODUCTS AND LUBRICANTS',
                'text_ru' => '<p>Показатель нефтепродуктов, определяемый либо визуально, либо с помощью колориметра (ГОСТ 20284); основан на сравнении цвета испытуемого образца с цветом эталонного стекла или стандартного раствора в колориметрах; этилированные бензины окрашиваются согласно нормативной документации; цвет чистых минеральных масел (без присадок) является показателем степени очистки масла и его происхождения. Цвет смазочных масел зависит от происхождения, переработки и степени окисления. Большинство товарных масел имеют более темный цвет, чем базовые масла. Цвет не имеет отношения к качественным характеристикам. Определение цвета с помощью ASTM-колориметра: DIN ISO 2049, Sayboldt номер цвета: DIN 51 411.</p>',
                'text_en' => '<p>An indicator of oil products, determined either visually or using a colorimeter (GOST 20284); based on a comparison of the color of the test sample with the color of a reference glass or standard solution in colorimeters; leaded gasolines are painted in accordance with regulatory documentation; The color of pure mineral oils (without additives) is an indicator of the degree of refinement of the oil and its origin. The color of lubricating oils depends on the origin, processing and degree of oxidation. Most commercial oils are darker in color than base oils. Color has nothing to do with quality. Color determination with ASTM colorimeter: DIN ISO 2049, Sayboldt color number: DIN 51 411.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЦЕНТРАЛИЗОВАННАЯ СИСТЕМА СМАЗКИ',
                'head_en' => 'CENTRALIZED LUBRICATION SYSTEM',
                'text_ru' => '<p>Это широко распространённый в промышленности и на производстве способ дозированной подачи смазочных материалов (консистентных или жидких) к узлам трения механизмов. Главные части ЦСС – резервуар, куда помещается смазка, насосная установка, приборы управления системой, установки контроля и другие вспомогательные устройства. Централизованная система смазки разработана для уменьшения износа оборудования, предотвращения преждевременного износа трущихся поверхностей и общего контроля над работой всех узлов системы.</p>',
                'text_en' => '<p>This is a method of dosed supply of lubricants (consistent or liquid) to the friction units of mechanisms, widely used in industry and production. The main parts of the CSS are the reservoir where the lubricant is placed, the pumping unit, system control devices, control units and other auxiliary devices. The centralized lubrication system is designed to reduce equipment wear, prevent premature wear of rubbing surfaces and overall control over the operation of all system components.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЦЕПНЫЕ РЕАКЦИИ',
                'head_en' => 'CHAIN ​​REACTIONS',
                'text_ru' => '<p>Химические реакции, в которых участвуют активные частицы – атомы, свободные радикалы, и др., причем в результате взаимодействия активной частицы с исходной молекулой образуются новые активные частицы, реагирующие с исходными молекулами, что вызывает цепи превращений. Ц. р. при которых в результате взаимодействия активной частицы с молекулой образуется одна новая активная частица называют не разветвленными (открытым Боденштейном), если образуется две и более активных частиц – разветвленными (открыты Н. Н. Семеновым).</p>',
                'text_en' => '<p>Chemical reactions in which active particles participate - atoms, free radicals, etc., and as a result of the interaction of the active particle with the original molecule, new active particles are formed that react with the original molecules, which causes chains of transformations. C. r. in which, as a result of the interaction of an active particle with a molecule, one new active particle is formed, they are called unbranched (discovered by Bodenstein), if two or more active particles are formed, branched (discovered by N. N. Semenov).</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЦЕТАНОВОЕ ЧИСЛО',
                'head_en' => 'CETAN NUMBER',
                'text_ru' => '<p>Способ определения воспламенительной способности дизельного топлива. Чем выше цетановое число, тем лучше качество горючего.</p>',
                'text_en' => '<p>Method for determining the ignitability of diesel fuel. The higher the cetane number, the better the quality of the fuel.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЧЕТЫРЕХШАРИКОВАЯ МАШИНА ТРЕНИЯ',
                'head_en' => 'FOUR-BALL FRICTION MACHINE',
                'text_ru' => '<p>Это одно из самых первых известных испытательных устройств для жидких и пластичных смазочных материалов. Устройство позволяет определить показатель износа и коэффициент трения материала. При всей простоте конструкции оно позволяет также определить критические нагрузки смазок и масел посредством широко распространенных испытаний на свариваемость. Данное устройство представляет собой закрепленный в роликоподшипнике шарик, вращающийся с постоянно скоростью и контактирующий с тремя неподвижными шариками. На поверхность контакта наносят смазочный материал. Постепенно увеличивая осевое усилие, а вместе с этим и контактное давление, можно определить нагрузку сваривания, показатель износа и коэффициент трения. В процессе увеличения осевой нагрузки на неподвижных шариках появляется пятно износа, характеризующее испытуемый смазочный материал.</p>',
                'text_en' => '<p>It is one of the earliest known testing devices for liquid and grease lubricants. The device allows you to determine the wear rate and the coefficient of friction of the material. Despite its simple design, it also allows the critical loads of lubricants and oils to be determined through widely used weldability tests. This device is a ball fixed in a roller bearing, rotating at a constant speed and in contact with three fixed balls. A lubricant is applied to the contact surface. By gradually increasing the axial force, and with it the contact pressure, it is possible to determine the welding load, the wear rate and the coefficient of friction. In the process of increasing the axial load, a wear mark appears on the stationary balls, which characterizes the tested lubricant.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЩЕЛОЧНОЕ ЧИСЛО',
                'head_en' => 'BASE NUMBER',
                'text_ru' => '<p>Показатель (ГОСТ 11362), характеризующий способность переводить образующиеся в двигателе в результате сгорания топлива и окисления масла кислые продукты в нейтральные соединения; в современных маслах нейтрализующая способность обеспечивается в основном введением зольных моющих присадок; обычно устанавливают нижний предел щ.ч.; выражается в мг КОН/г.</p>',
                'text_en' => '<p>Indicator (GOST 11362), which characterizes the ability to convert acidic products formed in the engine as a result of fuel combustion and oil oxidation into neutral compounds; in modern oils, the neutralizing ability is provided mainly by the introduction of ash detergent additives; usually set the lower limit of the h.h.; expressed in mg KOH/g.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЭЛАСТО-ГИДРОДИНАМИЧЕСКАЯ СМАЗКА',
                'head_en' => 'ELASTO-HYDRODYNAMIC GREASE',
                'text_ru' => '<p>Условия, при которых смазка, подверженная высоким нагрузкам и при высоких рабочих скоростях, увеличивает вязкость и, благодаря своей эластичности, принимает на себя деформацию трущихся поверхностей.</p>',
                'text_en' => '<p>Conditions under which the lubricant, subjected to high loads and at high operating speeds, increases viscosity and, due to its elasticity, takes on the deformation of rubbing surfaces.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЭЛЕКТРОЛИЗ',
                'head_en' => 'ELECTROLYSIS',
                'text_ru' => '<p>Химические реакции, протекающие под действием электрического тока на электродах в растворах и расплавах электролитов, а также твердых электролитах.</p>',
                'text_en' => '<p>Chemical reactions occurring under the influence of electric current on electrodes in solutions and melts of electrolytes, as well as solid electrolytes.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЭЛЕКТРОЛИТЫ',
                'head_en' => 'ELECTROLYTES',
                'text_ru' => '<p>Системы, обладающие в жидком или твердом состоянии ионной проводимостью.</p>',
                'text_en' => '<p>Systems that have ionic conductivity in the liquid or solid state.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЭЛЕКТРООТРИЦАТЕЛЬНОСТЬ',
                'head_en' => 'ELECTRONEGNATIVITY',
                'text_ru' => '<p>Количественная характеристика способности атомов химического элемента поляризовать образуемые ими ковалентные связи.</p>',
                'text_en' => '<p>A quantitative characteristic of the ability of atoms of a chemical element to polarize the covalent bonds they form.</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЭМУЛЬГАТОР',
                'head_en' => 'EMULSIFIER',
                'text_ru' => '<p>Вещество, способствующее образованию стабильной эмульсии (например, масла с водой).</p>',
                'text_en' => '<p>A substance that promotes the formation of a stable emulsion (for example, oil with water).</p>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЭМУЛЬСИЯ',
                'head_en' => 'EMULSION',
                'text_ru' => '<p>(новолат. emulsio; от лат. emulgeo — дою, выдаиваю) — дисперсная система, состоящая из микроскопических капель жидкости (дисперсной фазы), распределенных в другой жидкости (дисперсионной среде). Эмульсии могут быть образованы двумя любыми несмешивающимися жидкостями; в большинстве случаев одной из фаз эмульсий является вода, а другой — вещество, состоящее из слабополярных молекул (например, жидкие углеводороды, жиры). Одна из первых изученных эмульсий — молоко. В нём капли молочного жира распределены в водной среде. Эмульсии относятся обычно к грубодисперсным системам, поскольку капельки дисперсной фазы имеют размеры от 1 до 50 мкм. Эмульсии низкой концентрации — неструктурированные жидкости. Высококонцентрированные эмульсии — структурированные системы. Тип эмульсии зависит от состава и соотношения её жидких фаз, от количества и химической природы эмульгатора, от способа эмульгирования и некоторых других факторов.</p><ul><li>Прямые, с каплями неполярной жидкости в полярной среде (типа «масло в воде»). Для эмульсий типа «масло в воде» хорошими эмульгаторами могут служить растворимые в воде мыла (натриевые и калиевые соли жирных кислот). Молекулы этих соединений, адсорбируясь на поверхности раздела фаз, не только снижают поверхностное натяжение на ней, но благодаря закономерной ориентации в поверхностном слое создают в нем пленку, обладающую механической прочностью и защищающей эмульсию от разрушения.</li><li>Обратные, или инвертные (типа «вода в масле»). Для эмульсии типа «вода в масле» хорошими эмульгаторами могут быть нерастворимые в воде мыла (кальциевые, магниевые и алюминиевые соли жирных кислот).</li></ul><p>Изменение состава эмульсий или внешнее воздействие могут привести к превращению прямой эмульсии в обратную или наоборот. Также эмульсии разделяются на лиофильные и лиофобные.</p><ul><li>Лиофильные эмульсии образуются самопроизвольно и термодинамически устойчивы. К ним относятся т. н. критические эмульсии, образующиеся вблизи критической температуры смешения двух жидких фаз, а также некоторые смазочно-охлаждающие жидкости.</li><li>Лиофобные эмульсии возникают при механическом, акустическом или электрическом эмульгировании (диспергировании), а также вследствие конденсационного образования капель дисперсной фазы в перенасыщенных растворах или расплавах. Они термодинамически неустойчивы и длительно существуют лишь в присутствии эмульгаторов — веществ, облегчающих диспергирование и препятствующих коалесценции (слиянию). Эффективные эмульгаторы — мицеллообразующие ПАВ, растворимые высокомолекулярные вещества, некоторые высокодисперсные твёрдые тела.</li></ul><p>Эмульсии образуются двумя путями.</p><ul><li>Путём дробления капель. Этот метод осуществляется путём медленного прибавления диспергируемого вещества в дисперсную систему в присутствии эмульгатора при непрерывном и сильном перемешивании. Главными факторами, от которых зависит степень дисперсности частиц получаемой эмульсии и её устойчивость, является скорость перемешивания, скорость введения диспергируемого вещества, его количество, природа эмульгатора и его концентрация, температура и pH среды.</li><li>Путём образования плёнок и их разрыва на мелкие капли. Механизм образования состоит в следующем. Жидкость, образующая дисперсную фазу (например, масло), при медленном прибавлении к дисперсионной среде образует плёнку. Эта плёнка разрывается пузырьками воздуха, выходящими из отверстия трубки, которые находятся на дне сосуда. Образуются мелкие единичные капли. Одновременно пузырьки воздуха энергично размешивают всю жидкость и этим самым способствуют дальнейшему эмульгированию. В настоящее время для получения концентрированной эмульсии масла с водой её подвергают действию ультразвука.</li></ul>',
                'text_en' => '<p>(novolat. emulsio; from lat. emulgeo - milking, milking) - a dispersed system consisting of microscopic drops of a liquid (dispersed phase) distributed in another liquid (dispersion medium). Emulsions can be formed by any two immiscible liquids; in most cases, one of the phases of emulsions is water, and the other is a substance consisting of weakly polar molecules (for example, liquid hydrocarbons, fats). One of the first emulsions studied was milk. In it, drops of milk fat are distributed in the aquatic environment. Emulsions usually belong to coarse systems, since the droplets of the dispersed phase have sizes from 1 to 50 μm. Low concentration emulsions are unstructured liquids. Highly concentrated emulsions are structured systems. The type of emulsion depends on the composition and ratio of its liquid phases, on the amount and chemical nature of the emulsifier, on the method of emulsification, and some other factors.</p><ul><li>Direct, with drops of a non-polar liquid in a polar medium (such as "oil in water"). For oil-in-water emulsions, water-soluble soaps (sodium and potassium salts of fatty acids) can serve as good emulsifiers. The molecules of these compounds, being adsorbed on the interface, not only reduce the surface tension on it, but due to the regular orientation in the surface layer create a film in it that has mechanical strength and protects the emulsion from destruction.</li><li>Reverse, or invert (such as "water in oil"). For a water-in-oil emulsion, water-insoluble soaps (calcium, magnesium and aluminum salts of fatty acids) can be good emulsifiers.</li></ul><p>A change in the composition of emulsions or external influences can lead to the transformation of a direct emulsion into an inverse one or vice versa. Also, emulsions are divided into lyophilic and lyophobic.</p><ul><li>Lyophilic emulsions form spontaneously and are thermodynamically stable. These include the so-called. critical emulsions formed near the critical temperature of mixing of two liquid phases, as well as some cutting fluids.</li><li>Lyophobic emulsions arise during mechanical, acoustic or electrical emulsification (dispersion), as well as due to the condensation formation of droplets of the dispersed phase in supersaturated solutions or melts. They are thermodynamically unstable and exist for a long time only in the presence of emulsifiers - substances that facilitate dispersion and prevent coalescence (fusion). Effective emulsifiers are micelle-forming surfactants, soluble macromolecular substances, some highly dispersed solids.</li></ul><p>Emulsions are formed in two ways.</p><ul><li>By crushing drops. This method is carried out by slowly adding the dispersant to the dispersion system in the presence of an emulsifier with continuous and strong stirring. The main factors that determine the degree of dispersion of the particles of the resulting emulsion and its stability are the speed of mixing, the rate of introduction of the dispersed substance, its amount, the nature of the emulsifier and its concentration, temperature and pH of the medium.</li><li>By the formation of films and their rupture into small drops. The mechanism of education is as follows. The liquid forming the dispersed phase (eg oil) forms a film when slowly added to the dispersion medium. This film is torn by air bubbles emerging from the opening of the tube, which are located at the bottom of the vessel. Small single drops are formed. At the same time, the air bubbles vigorously stir the entire liquid and thereby further emulsify. Currently, to obtain a concentrated oil-water emulsion, it is subjected to ultrasound.</li></ul>',
                'sub_menu_id' => 15
            ],
            [
                'head_ru' => 'ЭФИРНЫЕ МАСЛА',
                'head_en' => 'ESSENTIAL OILS',
                'text_ru' => '<p>Соединения кислот и спиртов, используемые для смазки и производства консистентных смазок.</p>',
                'text_en' => '<p>Compounds of acids and alcohols used for lubrication and the production of greases.</p>',
                'sub_menu_id' => 15
            ]
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            Content::create($item);
        }
    }
}