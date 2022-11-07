<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\IndustrySolution;

class IndustrySolutionsTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            [
                'image' => 'images/industry_solutions/image1.jpg',
                'name_ru' => 'Легковой транспорт',
                'name_en' => 'Passenger Vehicles',
                'text_ru' => '<p>Каждый автовладелец знает, как важно использовать высококачественные смазочные материалы, которые надежно защищают узлы и агрегаты автомобиля, предотвращают их выход из эксплуатации и увеличивают ресурс двигателя.</p><p>Компания «Грейс Лубрикантс» предлагает широкий ассортимент смазочных материалов для легковых автомобилей – моторные масла, трансмиссионные масла и охлаждающие жидкости.</p><p>Постоянное усовершенствование продукции, тестовые испытания в собственной лаборатории, изучение требований к смазочным материалам ведущих мировых автопроизводителей позволяют «Грейс Лубрикантс» производить инновационные продукты, удовлетворяющие требования самых современных стандартов, норм и ОЕМ.</p>',
                'text_en' => '<p>Every car owner knows how important it is to use high-quality lubricants that reliably protect vehicle components and assemblies, prevent their failure and increase engine life.</p><p>Grace Lubricants offers a wide range of lubricants for passenger cars - engine oils, gear oils and coolants.</p><p>Continuous product improvement, testing in our own laboratory, studying the requirements for lubricants of the world\'s leading car manufacturers allow Grace Lubricants to produce innovative products that meet the requirements of the latest standards, norms and OEM.</p>',
                'head_ru' => 'Ассортимент смазочных материалов для легкового транспорта',
                'head_en' => 'Range of lubricants for Passenger Vehicles',
                'brochure_id' => 8
            ],
            [
                'image' => 'images/industry_solutions/image2.jpg',
                'name_ru' => 'Коммерческий транспорт',
                'name_en' => 'Commercial Vehicles',
                'text_ru' => '<p>Правильный подбор масел для современной коммерческой техники всегда был одним из определяющих ее ресурс факторов.</p><p>Компания «Грейс Лубрикантс» производит высококачественные смазочные материалы для коммерческой техники, которые помогут автотранспортным предприятиям снизить расходы на обслуживание и получить максимальную производительность.</p><p>Смазочные материалы GRACE для коммерческого транспорта обеспечивают удлиненные интервалы замены, гарантируют бесперебойную работу двигателя в тяжелых условиях эксплуатации и учитывают особенности работы смешанных парков.</p>',
                'text_en' => '<p>The correct selection of oils for modern commercial vehicles has always been one of the factors determining its resource.</p><p>Grace Lubricants manufactures high quality commercial vehicle lubricants to help trucking companies reduce maintenance costs and maximize productivity.</p><p>GRACE commercial vehicle lubricants offer extended drain intervals, trouble-free engine operation in harsh operating conditions and mixed fleet operation.</p>',
                'head_ru' => 'Ассортимент смазочных материалов для коммерческого транспорта',
                'head_en' => 'Range of lubricants for Commercial Vehicles',
                'brochure_id' => 9
            ],
            [
                'image' => 'images/industry_solutions/image3.jpg',
                'name_ru' => 'Строительство',
                'name_en' => 'Construction',
                'text_ru' => '<p>Смазочные материалы для строительной техники и оборудования должны не только эффективно работать в экстремальных условиях, но и обеспечивать максимально возможные межсервисные интервалы обслуживания.</p><p>Широкий ассортимент смазочных материалов GRACE для строительной техники обеспечивает надежную и бесперебойную работу оборудования, что гарантирует существенное сокращение издержек.</p><p>Специализированные масла GRACE для спецтехники обладают высокими противоизносными характеристиками, стабильностью вязкости, низкой вспениваемостью и высокими антикоррозионными свойствами.</p>',
                'text_en' => '<p>Lubricants for construction machinery and equipment must not only work effectively in extreme conditions, but also provide the maximum possible service intervals.</p><p>A wide range of GRACE lubricants for construction equipment ensures reliable and trouble-free operation of the equipment, which guarantees a significant reduction in costs.</p><p>Specialized GRACE oils for special equipment have high anti-wear characteristics, viscosity stability, low foaming and high anti-corrosion properties.</p>',
                'head_ru' => 'Ассортимент смазочных материалов для строительной техники',
                'head_en' => 'Range of lubricants for Construction Equipment',
                'brochure_id' => 10
            ],
            [
                'image' => 'images/industry_solutions/image4.jpg',
                'name_ru' => 'Сельское хозяйство',
                'name_en' => 'Agricultural Industry',
                'text_ru' => '<p>В период посева и сбора урожая успех сельскохозяйственного бизнеса напрямую зависит от бесперебойной работы техники.</p><p>Компания «Грейс Лубрикантс» предлагает полный ассортимент смазочных материалов, специально предназначенных для сельскохозяйственных машин и оборудования.</p><p>Смазочные материалы GRACE разработаны в соответствии со строгими требованиями ведущих производителей сельскохозяйственного оборудования, значительно снижают риск поломок, минимизируют простои и обеспечивают надежную работу даже в режиме максимальных нагрузок.</p>',
                'text_en' => '<p>During the sowing and harvesting period, the success of the agricultural business directly depends on the smooth operation of the equipment.</p><p>Grace Lubricants offers a complete range of lubricants specifically designed for agricultural machinery and equipment.</p><p>GRACE lubricants are designed to meet the stringent requirements of leading agricultural equipment manufacturers to significantly reduce the risk of breakdowns, minimize downtime and provide reliable performance even under the most demanding conditions.</p>',
                'head_ru' => 'Ассортимент смазочных материалов для сельскохозяйственной техники',
                'head_en' => 'Range of lubricants for Agricultural Machinery',
                'brochure_id' => 11
            ],
            [
                'image' => 'images/industry_solutions/image5.jpg',
                'name_ru' => 'Горнодобывающая промышленность',
                'name_en' => 'Mining Industry',
                'text_ru' => '<p>В списке промышленного оснащения в горнодобывающей промышленности значатся такие машины как: карьерные самосвалы, погрузчики, экскаваторы, бульдозеры, буровой инструмент и другая техника.</p><p>В условиях экстремальной эксплуатации такое оборудование требует обязательного проведения технического обслуживания с использованием высокотехнологичных смазочных материалов для увеличения запаса прочности, продления сроков эксплуатации и межсервисных интервалов замены масла.</p><p>Смазочные материалы GRACE для горнодобывающей промышленности специально разработаны для защиты оборудования в самых суровых климатических условиях, в том числе в регионах с резкими перепадами среднесуточных температур.</p>',
                'text_en' => '<p>The list of industrial equipment in the mining industry includes such machines as: mining dump trucks, loaders, excavators, bulldozers, drilling tools and other equipment.</p><p>Under extreme operating conditions, such equipment requires mandatory maintenance using high-tech lubricants to increase the safety margin, extend the service life and oil change intervals.</p><p>GRACE lubricants for the mining industry are specifically designed to protect equipment in the most severe climatic conditions, including in regions with sharp changes in average daily temperatures.</p>',
                'head_ru' => 'Ассортимент смазочных материалов для горнодобывающей промышленности',
                'head_en' => 'Range of lubricants for the Mining Industry',
                'brochure_id' => 12
            ],
            [
                'image' => 'images/industry_solutions/image6.jpg',
                'name_ru' => 'Лесная промышленность',
                'name_en' => 'Forest Industry',
                'text_ru' => '<p>Лесозаготовительная и лесоперерабатывающая промышленности – отрасли, оснащенные современной высокопроизводительной техникой, нуждаются в специализированных смазочных материалах.</p><p>Смазочные материалы GRACE обладают улучшенными характеристиками и превосходят основные требования производителей техники, обеспечивают максимально эффективную работу в тяжелых условиях эксплуатации.</p>',
                'text_en' => '<p>The logging and wood processing industries are industries equipped with modern high-performance equipment that require specialized lubricants.</p><p>GRACE lubricants are advanced performance lubricants that exceed the basic requirements of equipment manufacturers to provide maximum performance in severe operating conditions.</p>',
                'head_ru' => 'Ассортимент смазочных материалов для лесной промышленности',
                'head_en' => 'Range of lubricants for the Forest Industry',
                'brochure_id' => 13
            ],
            [
                'image' => 'images/industry_solutions/image7.jpg',
                'name_ru' => 'Металлургия',
                'name_en' => 'Metallurgical Industry',
                'text_ru' => '<p>Металлургическая промышленность отличается повышенными требованиями к смазочным материалам при эксплуатации в условиях постоянных высоких температур, тяжелых нагрузках и запыленности.</p><p>Смазочные материалы GRACE полностью соответствуют повышенным требованиям металлургической отрасли и обеспечивают: уменьшение потерь мощности на трение, снижение интенсивности износа трущихся поверхностей, а также предохранение их от заедания, задиров, коррозии и для лучшего отвода тепла.</p>',
                'text_en' => '<p>The metallurgical industry is characterized by increased requirements for lubricants when operating in conditions of constant high temperatures, heavy loads and dustiness.</p><p>Lubricants GRACE fully comply with the increased requirements of the metallurgical industry and provide: reduction of power losses due to friction, reduction of the intensity of wear of rubbing surfaces, as well as their protection from seizing, scoring, corrosion and for better heat dissipation.</p>',
                'head_ru' => 'Ассортимент смазочных материалов для металлурнии',
                'head_en' => 'Range of lubricants for the Metallurgical Industry',
                'brochure_id' => 14
            ],
            [
                'image' => 'images/industry_solutions/image8.jpg',
                'name_ru' => 'Машиностроение',
                'name_en' => 'Machine-building Industry',
                'text_ru' => '<p>Характерной особенностью машиностроительных предприятий является большой парк оборудования. На среднем предприятии отрасли размещены заготовительное, обрабатывающее и сборочное производства. Кроме этого, на разных технологических операциях схожее оборудование может работать в различных условиях нагрузки, обводнения и температуры.</p><p>В ассортименте смазочных материалов «Грейс Лубрикантс» имеется более 60 высококачественных специализированных продуктов для удовлетворения всех потребностей машиностроительных производств.</p><p>Приведенный ассортимент отвечает требованиям стандартов DIN, ISO. Масла GRACE соответствуют требованиям ведущих российских и зарубежных производителей оборудования.</p>',
                'text_en' => '<p>A characteristic feature of machine-building enterprises is a large fleet of equipment. The average enterprise of the industry has procurement, manufacturing and assembly facilities. In addition, in different technological operations, similar equipment can operate under different load, water and temperature conditions.</p><p>Grace Lubricants\' range of lubricants includes more than 60 high-quality specialized products to meet all the needs of machine-building industries.</p><p>The above range meets the requirements of DIN, ISO standards. GRACE oils meet the requirements of leading Russian and foreign equipment manufacturers.</p>',
                'head_ru' => 'Ассортимент смазочных материалов для машиностроения',
                'head_en' => 'Range of lubricants for Machine-building Industry',
                'brochure_id' => 15
            ],
            [
                'image' => 'images/industry_solutions/image9.jpg',
                'name_ru' => 'Лёгкая промышленность',
                'name_en' => 'Light Industry',
                'text_ru' => '<p>Требования к смазочным материалам в легкой промышленности отличаются, в зависимости от конструкции оборудования и особенностей технологических операций. При этом подшипники, цепи и шестерни могут подвергаться очень высоким вибрациям, работать на высоких скоростях и под большой нагрузкой.</p><p>Компания «Грейс Лубрикантс» предлагает высококачественные шпиндельные масла, предназначенные для смазывания легконагруженных высокоскоростных механизмов, таких как шпиндельные узлы с подшипниками скольжения, веретена прядильных и крутильных машин, швейных, вязальных и других машин. А также масло GRACE IZOROL - универсальное минеральное масло, предназначенное для смазывания роликовых, конвейерных, соединительных цепей, открытых зубчатых передач, зубчатых колес, подшипников скольжения и качения, работающих в условиях малых нагрузок и невысоких скоростей.</p>',
                'text_en' => '<p>Requirements for lubricants in light industry differ depending on the design of the equipment and the characteristics of technological operations. In this case, bearings, chains and gears can be subjected to very high vibrations, operate at high speeds and under heavy load.</p><p>Grace Lubricants offers high quality spindle oils designed for the lubrication of lightly loaded high-speed mechanisms, such as spindle units with plain bearings, spindles of spinning and twisting machines, sewing, knitting and other machines. As well as GRACE IZOROL oil - a universal mineral oil designed for lubrication of roller, conveyor, connecting chains, open gears, gear wheels, plain and rolling bearings operating under light loads and low speeds.</p>',
                'head_ru' => 'Ассортимент смазочных материалов для легкой промышленности',
                'head_en' => 'Range of lubricants for Light Industry',
                'brochure_id' => 17
            ],
            [
                'image' => 'images/industry_solutions/image10.jpg',
                'name_ru' => 'Энергетика',
                'name_en' => 'Energy Industry',
                'text_ru' => '<p>В энергетической отрасли ключевым показателем является бесперебойная выработка электроэнергии. Смазочные материалы для энергетической отрасли должны соответствовать жестким требованиям производителей оборудования и техники для электростанций различных типов, исключать аварийные остановки и обеспечивать сокращение времени техобслуживания.</p><p>Смазочные материалы GRACE для энергетической отрасли обеспечат надежную работу узлов силовой установки в типичных для энергетики условиях высоких температур, перепадов давления и экстремальных нагрузок.</p><p>Широкий ассортимент масел и охлаждающих жидкостей GRACE предназначен для всех областей промышленного использования в секторе энергетики.</p>',
                'text_en' => '<p>In the energy industry, uninterrupted power generation is a key indicator. Lubricants for the power industry must meet the stringent requirements of manufacturers of equipment and machinery for power plants of various types, eliminate emergency shutdowns and ensure reduced maintenance times.</p><p>GRACE lubricants for the power industry will ensure the reliable operation of power plant components in typical power industry conditions of high temperatures, pressure drops and extreme loads.</p><p>The wide range of GRACE oils and coolants is designed for all industrial applications in the energy sector.</p>',
                'head_ru' => 'Ассортимент смазочных материалов для энергетической отрасли',
                'head_en' => 'Range of lubricants for the Energy Industry',
                'brochure_id' => 17
            ],
            [
                'image' => 'images/industry_solutions/image11.jpg',
                'name_ru' => 'Судоходство',
                'name_en' => 'Shipping Industry',
                'text_ru' => '<p>Эксплуатация судового оборудования происходит в условиях повышенной влажности. Чтобы все механизмы работали слаженно, необходимо использовать специальные судовые масла.</p><p>Большая часть судов во всем мире работает на дизельных двигателях. Не зависимо от принципа их работы, цилиндропоршневая система агрегата подлежит смазке, которая должна поддерживать легкое скольжение деталей, предотвращать образование задиров, развитие коррозии. Так как работа цилиндров в дизеле происходит при экстремально высоких температурах, к смазочным материалам предъявляются особые требования.</p><p>Смазочные материалы GRACE для тронковых и крейцкопфных двигателей: способствуют снижению образования нагара, устойчивы к образованию пены, обладают антикоррозионными свойствами, нейтрализуют продукты окисления, образующиеся в результате сгорания.</p>',
                'text_en' => '<p>Operation of ship equipment takes place in conditions of high humidity. In order for all mechanisms to work smoothly, it is necessary to use special marine oils.</p><p>Most ships around the world run on diesel engines. Regardless of the principle of their operation, the cylinder-piston system of the unit is subject to lubrication, which should support the easy sliding of parts, prevent the formation of scoring, and the development of corrosion. Since the cylinders in a diesel engine operate at extremely high temperatures, special requirements are placed on lubricants.</p><p>GRACE lubricants for trunk and crosshead engines: contribute to the reduction of carbon deposits, are resistant to foam formation, have anti-corrosion properties, and neutralize oxidation products resulting from combustion.</p>',
                'head_ru' => 'Ассортимент смазочных материалов для судовой промышленности',
                'head_en' => 'Range of lubricants for the Shipping Industry',
                'brochure_id' => 18
            ],
            [
                'image' => 'images/industry_solutions/image12.jpg',
                'name_ru' => 'Малоразмерная техника',
                'name_en' => 'Small Engine Vehicles',
                'text_ru' => '<p>Помимо комплексных решений для базовых отраслей промышленности Компания «Грейс Лубрикантс» предлагает специфические продукты для других видов деятельности.</p><p>Смазочные материалы «GRACE» для малоразмерной техники представлены ассортиментом масел для мото- и садовой техники, масел для цепей, бытовых компрессоров и лодочных двигателей. Регулярное обслуживание высококачественными маслами GRACE для садовой техники гарантирует сохранение и увеличение ресурса газонокосилок и культиваторов, бензопил и триммеров, садовых тракторов, а также различной зимней техники.</p>',
                'text_en' => '<p>In addition to complex solutions for basic industries, Grace Lubricants offers specific products for other activities.</p><p>Lubricants "GRACE" for garden equipment are represented by a range of motor, chain and transmission-hydraulic oils. Regular maintenance with high-quality GRACE oils for garden equipment guarantees the preservation and increase in the life of lawn mowers and cultivators, chainsaws and trimmers, garden tractors, as well as various winter equipment.</p>',
                'head_ru' => 'Ассортимент смазочных материалов для садовой техники',
                'head_en' => 'Range of lubricants for Small Engine Vehicles',
                'brochure_id' => 19
            ]
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            IndustrySolution::create($item);
        }
    }
}