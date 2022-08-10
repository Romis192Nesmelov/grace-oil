<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\AboutLubricant;

class AboutLubricantTableSeeder extends Seeder
{

    public function run()
    {
        $data = [
            [
                'image' => 'images/icons/icon1.png',
                'head_ru' => 'Качество',
                'text_ru' => 'Вся продукция компании «Грейс Лубрикантс» производится по уникальной технологии HDT в соответствии с новейшими требованиями мировых стандартов и проходит строгий контроль качества.',
                'head_en' => 'Quality',
                'text_en' => 'All Grace Lubricants products are manufactured using the unique HDT technology in accordance with the latest requirements of world standards and undergo strict quality control.'
            ],
            [
                'image' => 'images/icons/icon2.png',
                'head_ru' => 'Эффективность',
                'text_ru' => 'Для 100% доверия к качеству продукции GRACE работает программа GRACE Test. Эффективность нашей продукции неоднократно доказана успешными испытаниями на технике наших потребителей.',
                'head_en' => 'Efficiency',
                'text_en' => 'For 100% confidence in the quality of GRACE products, the GRACE Test program operates. The effectiveness of our products has been repeatedly proven by successful tests on the equipment of our consumers.'
            ],
            [
                'image' => 'images/icons/icon3.png',
                'head_ru' => 'Взаимовыгодность',
                'text_ru' => 'Долгосрочные партнерские связи с нашими потребителями, гарантированное финансовое преимущество от использования нашей высокотехнологичной и надежной продукции – одна из ключевых элементов стратегии компании.',
                'head_en' => 'Mutual benefit',
                'text_en' => 'Long-term partnerships with our customers, a guaranteed financial advantage from the use of our high-tech and reliable products is one of the key elements of the company\'s strategy.'
            ],
            [
                'image' => 'images/icons/icon4.png',
                'head_ru' => 'Совершенствование',
                'text_ru' => 'Компания «Грейс Лубрикантс» своевременно проводит мониторинг рынка смазочных материалов, оперативно разрабатывает и в кратчайшие сроки внедряет в производство самые современные масла и технические жидкости.',
                'head_en' => 'Perfection',
                'text_en' => 'Grace Lubricants monitors the lubricants market in a timely manner, promptly develops and introduces the most modern oils and technical fluids into production as soon as possible.'
            ],
            [
                'image' => 'images/icons/icon5.png',
                'head_ru' => 'Ответственность',
                'text_ru' => 'Компания «Грейс Лубрикантс» гарантирует качество своей продукции, несет ответственность за нее по страховому полису от крупнейшей российской страховой компании «Ренессанс Страхование».',
                'head_en' => 'A responsibility',
                'text_en' => 'Grace Lubricants guarantees the quality of its products, is responsible for it under an insurance policy from the largest Russian insurance company, Renaissance Insurance.'
            ],
            [
                'image' => 'images/icons/icon6.png',
                'head_ru' => 'Надежность',
                'text_ru' => 'Честность и открытость – основа бизнеса компании. Компания «Грейс Лубрикантс» надежный производитель с безупречной репутацией на рынке смазочных материалов.',
                'head_en' => 'Reliability',
                'text_en' => 'Honesty and openness are the basis of the company\'s business. Grace Lubricants is a reliable manufacturer with an impeccable reputation in the lubricants market.'
            ],
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            AboutLubricant::create($item);
        }
    }
}