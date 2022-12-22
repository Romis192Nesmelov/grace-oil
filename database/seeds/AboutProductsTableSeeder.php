<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\AboutProduct;

class AboutProductsTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            [
                'image' => 'images/about_products/image1.jpg',
                'head_ru' => 'Моторные масла для легкового транспорта',
                'head_en' => 'Motor Oils for Passenger Vehicles',
                'text_ru' => '<p>Компания «Грейс Лубрикантс» предлагает широкий ассортимент моторных масел высшего качества для легковых автомобилей, включая синтетические, полусинтетические и минеральные масла, масла для автомобилей с большим пробегом, масла для бензиновых и дизельных двигателей, в том числе с турбонаддувом, для двигателей на газе и спортивных автомобилей.</p><p>Высококачественные масла GRACE предназначены для самых современных легковых автомобилей, легких грузовиков, небольшой техники и микроавтобусов европейского, американского и азиатского производства.</p><p>Соответствуют действующим гарантийным требованиям по новейшим классификациям API SN, АСЕА 2016 г. и ISLAC GF-5, или превосходят их. Разработаны в соответствии с требованиями ведущих мировых автопроизводителей.</p>',
                'text_en' => '<p>GRACE Lubricants offers a wide range of premium quality motor oils for passenger cars, including synthetic, semi-synthetic and mineral oils, oils for high mileage vehicles, oils for gasoline and diesel engines, turbocharged, gas engines and sports cars.</p><p>GRACE high-quality oils are designed for the most modern passenger cars, light trucks, small vehicles and vans of European, American and Asian production.</p><p>Meets or exceeds applicable warranty requirements for the latest API SN, ACEA 2016 and ISLAC GF-5 classifications. Developed in accordance with the requirements of the world\'s leading car manufacturers.</p>',
                'brochure_id' => 1
            ],
            [
                'image' => 'images/about_products/image2.jpg',
                'head_ru' => 'Масла для коммерческой техники',
                'head_en' => 'Oils for Commercial Vehicles',
                'text_ru' => '<p>Высокопроизводительные смазочные материалы GRACE для смешанных автопарков грузовой техники для двигателей Евро I, II, III, IV, V и VI разработаны для тяжелых условий эксплуатации.</p><p>Продукция GRACE для коммерческой техники производится для дизельных, бензиновых, пропановых и/или работающих на сжатом природном газе двигателей как шоссейного, так и внедорожного транспорта европейского, американского и азиатского производства. В ассортименте минеральные, полусинтетические и синтетические масла, масла с повышенным щелочным числом, малозольные масла (Low-SAPS технология), а также сезонные  и масла для двигателей с большим пробегом.</p><p>Соответствуют современным мировым стандартам и требованиям ведущих производителей техники, в том числе MAN, MB, Scania, Renault, Volvo, или превосходят их.</p>',
                'text_en' => '<p>GRACE high performance mixed fleet lubricants for Euro I, II, III, IV, V and VI engines are designed for heavy duty applications.</p><p>GRACE commercial vehicle products are manufactured for European, American and Asian diesel, gasoline, propane and/or CNG engines in both on- and off-highway vehicles. The range includes mineral, semi-synthetic and synthetic oils, oils with a high base number, low-ash oils (Low-SAPS technology), as well as seasonal and oils for engines with high mileage.</p><p>Correspond to modern world standards and requirements of leading equipment manufacturers, including MAN, MB, Scania, Renault, Volvo, or exceed them.</p>',
                'brochure_id' => 2
            ],
            [
                'image' => 'images/about_products/image3.jpg',
                'head_ru' => 'Универсальные масла для сельскохозяйственной и строительной техники',
                'head_en' => 'Multipurpose Oils for Farm and Construction Equipment',
                'text_ru' => '<p>Компания «Грейс Лубрикантс» предлагает полный ассортимент смазочных материалов, предназначенных для сельскохозяйственной техники и машин: универсальные всесезонные тракторные масла класса STOU, UTTO и универсальные трансмиссионно-гидравлические жидкости согласно спецификаций ТО-4. Масла GRACE могут применяться одновременно в различных масляных системах сельскохозяйственной техники, в зависимости от класса.</p><p>Универсальные масла позволяют сократить количество продуктов, которые должны храниться на складе, сводят к минимуму опасность заливки в масляную систему неподходящего продукта, а также обеспечивают надежную защиту узлов техники.</p><p>Ассортимент продукции GRACE для сельского хозяйства разработан с учетом требований ведущих российских и зарубежных производителей сельскохозяйственной техники.</p>',
                'text_en' => '<p>GRACE Lubricants offers a full range of lubricants designed for agricultural machinery and machinery: universal all-weather tractor oils of STOU, UTTO class and universal hydraulic transmission fluids according to TO-4 specifications. GRACE oils can be used simultaneously in various oil systems of agricultural machinery, depending on the class.</p><p>Multipurpose oils reduce the amount of products that must be stored in the warehouse, minimize the risk of filling the oil system with the wrong product, and also provide reliable protection for equipment components.</p><p>The GRACE product range for agriculture is designed to meet the requirements of leading Russian and foreign manufacturers of agricultural equipment.</p>',
                'brochure_id' => 3
            ],
            [
                'image' => 'images/about_products/image4.jpg',
                'head_ru' => 'Масла для мото- и садовой техники',
                'head_en' => 'Oils for Mechanized and Gardening Equipment',
                'text_ru' => '<p>Компания «Грейс Лубрикантс» предлагает смазочные материалы, специально созданные для различной садовой и сельскохозяйственной техники: газонокосилок, триммеров, культиваторов, генераторов, мотопомп, мини-тракторов, бензиновых и электрических ручных пил, а также для зимней техники.</p><p>Содержат высокоэффективные присадки, повышающие противозадирные и противоизносные характеристики, что обеспечивает надежность и длительный срок службы двигателя и чистоту внутренних поверхностей.</p><p>Серии масел GRACE – GARDEN и CHAIN – обеспечивают надежную защиту садовой и сельскохозяйственной техники и гарантируют бесперебойную работу даже в самых тяжелых условиях эксплуатации.</p>',
                'text_en' => '<p>GRACE Lubricants offers lubricants specially formulated for various garden and agricultural equipment: lawn mowers, trimmers, cultivators, generators, motor pumps, mini tractors, gasoline and electric hand saws, as well as for winter equipment.</p><p>Contains high-performance additives that increase extreme pressure and anti-wear characteristics, which ensures reliability and long engine life and clean internal surfaces.</p><p>The GRACE oil series - GARDEN and CHAIN ​​- provide reliable protection for garden and agricultural equipment and guarantee trouble-free operation even under the most difficult operating conditions.</p>',
                'brochure_id' => 4
            ],
            [
                'image' => 'images/about_products/image5.jpg',
                'head_ru' => 'Судовые масла',
                'head_en' => 'Marine oils',
                'text_ru' => '<p>Серия масел GRACE Oceanic представляют собой моторные масла высокого качества, предназначенные для использования во всех категориях судов, тронковых и крейцкопфных. Обеспечивают эффективное смазывание как главных, так и вспомогательных дизельных агрегатов, установленных на судах речного, промыслового и морского флотов.</p><p>Разработаны с учетом требований ведущих производителей судовых энергетических установок и вспомогательного оборудования.</p><p>Судовые масла GRACE Oceanic обладают высокими смазывающими свойствами, эффективно охлаждает трущиеся детали двигателей, такие как поршни и цилиндры, уменьшают образование твердых отложений на деталях, легко отделяются при сепарации от воды.</p>',
                'text_en' => '<p>The GRACE Oceanic series of oils are high quality engine oils designed for use in all categories of boats, trunk and crosshead. They provide effective lubrication of both main and auxiliary diesel units installed on ships of the river, fishing and marine fleets.</p><p>Designed to meet the requirements of leading manufacturers of marine power plants and auxiliary equipment.</p><p>Marine oils GRACE Oceanic have high lubricating properties, effectively cool the rubbing parts of engines, such as pistons and cylinders, reduce the formation of solid deposits on parts, and are easily separated from water during separation.</p>',
                'brochure_id' => 5
            ],
            [
                'image' => 'images/about_products/image6.jpg',
                'head_ru' => 'Трансмиссионные масла',
                'head_en' => 'Transmission Oils',
                'text_ru' => '<p>Трансмиссионные масла GRACE представлены достаточно большим ассортиментом, состоящим из нескольких линеек:</p><ul><li>GRACE GYP, UNIS и EP-4 – масла для механических трансмиссий, мостов и дифференциалов;</li><li>GRACE ATF – масла для автоматических трансмиссий;</li><li>GRACE CVT – масла для бесступенчатых трансмиссий (вариаторов).</li></ul><p>Ассортимент трансмиссионных масел GRACE включает минеральные, полусинтетические, синтетические масла, предназначенные для эксплуатации в легковых, грузовых автомобилях и специальной техники.</p>',
                'text_en' => '<p>GRACE gear oils are represented by a fairly large assortment, consisting of several lines:</p><ul><li>GRACE GYP, UNIS and EP-4 - oils for mechanical transmissions, axles and differentials;</li><li>GRACE ATF - oils for automatic transmissions;</li><li>GRACE CVT - oils for continuously variable transmissions (variators).</li></ul><p>The range of GRACE gear oils includes mineral, semi-synthetic, synthetic oils designed for use in cars, trucks and special vehicles.</p>',
                'brochure_id' => 25
            ],
            [
                'image' => 'images/about_products/image7.jpg',
                'head_ru' => 'Индустриальные масла',
                'head_en' => 'Industrial Oils',
                'text_ru' => '<p>Высокоэффективные смазочные материалы GRACE для промышленного оборудования:</p><ul><li>Гидравлические жидкости</li><li>Турбинные масла</li><li>Редукторные масла</li><li>Компрессорные масла</li><li>Масла для направляющих скольжения</li><li>Шпиндельные масла</li></ul>',
                'text_en' => '<p>GRACE High Performance Lubricants for Industrial Equipment:</p><ul><li>Hydraulic fluids</li><li>Turbine oils</li><li>gear oils</li><li>Compressor oils</li><li>Guide oils</li><li>Spindle oils</li></ul>',
                'brochure_id' => 6
            ],
            [
                'image' => 'images/about_products/image8.jpg',
                'head_ru' => 'Охлаждающие жидкости',
                'head_en' => 'Coolants',
                'text_ru' => '<p>В ассортименте компании «Грейс Лубрикантс» присутствуют охлаждающие жидкости: антифризы и тосол, закрывающие все потребности потребителей. Они используются в легковом, грузовом, коммерческом автотранспорте, а также в сельскохозяйственной, тяжелой и спецтехнике.</p><p>Предназначены для использования в качестве охлаждающей жидкости и жидкого теплоносителя в двигателях внутреннего сгорания, независимо от того, сделаны они из чугуна, алюминия или комбинации обоих этих материалов, а также в системах охлаждения из алюминиевых и медных сплавов.</p><p>Охлаждающие жидкости GRACE гарантируют быстрое и качественное охлаждение работающих двигателей внутреннего сгорания любых транспортных средств.</p>',
                'text_en' => '<p>The range of GRACE Lubricants contains coolants: antifreeze and antifreeze, covering all the needs of consumers. They are used in cars, trucks, commercial vehicles, as well as in agricultural, heavy and special equipment.</p><p>Designed for use as a coolant and heat transfer fluid in internal combustion engines, whether they are made of cast iron, aluminum or a combination of both, as well as in cooling systems made of aluminum and copper alloys.</p><p>GRACE coolants guarantee fast and high-quality cooling of working internal combustion engines of any vehicles.</p>',
                'brochure_id' => 7
            ],
       ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            AboutProduct::create($item);
        }
    }
}