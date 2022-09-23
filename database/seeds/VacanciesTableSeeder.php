<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Vacancy;
use App\Models\VacancyDuty;
use App\Models\VacancyRequirement;
use App\Models\VacancyTerm;

class VacanciesTableSeeder extends Seeder
{

    public function run()
    {
        $dataVacanciees = [
            [
                'name_ru' => 'Менеджер по развитию дилерской сети',
                'name_en' => 'Dealer Network Development Manager',
                'skills' => '3-5',
                'employment_ru' => 'Полная занятость, полный день',
                'employment_en' => 'Full employment, on a full time basis',
            ],
            [
                'name_ru' => 'Менеджер в сегменте B2B',
                'name_en' => 'Manager in Business-to-Business Segment',
                'skills' => '1-3',
                'employment_ru' => 'Полная занятость, полный день',
                'employment_en' => 'Full employment, on a full time basis'
            ],
        ];

        $dataDuties = [
            ['text_ru' => 'Выполнение годового, квартального плана продаж','text_en' => 'Fulfillment of yearly, quarterly sales plans', 'vacancy_id' => 1],
            ['text_ru' => 'Развитие дилерской сети','text_en' => 'Dealer network development', 'vacancy_id' => 1],
            ['text_ru' => 'Еженедельное проведение удаленных совещаний с дилерами, постановка задач, контроль выполнения','text_en' => 'Weekly holding of distant meetings with dealers, mission definition, control over implementation', 'vacancy_id' => 1],
            ['text_ru' => 'Работа в связке с техническими специалистами компании для внедрения продукции','text_en' => 'Cooperation with the Company technical specialists for introduction of products', 'vacancy_id' => 1],
            ['text_ru' => 'Контроль дебиторской задолженности','text_en' => 'Control over receivables', 'vacancy_id' => 1],
            ['text_ru' => 'Поиск, разработка и привлечение новых клиентов: авто транспортные предприятия, СТО грузовой и спецтехники, промышленные предприятия, агрохолдинги, горно-обогатительные комбинаты, металлургические комбинаты, тяжелое машиностроение и т д.','text_en' => 'Prospecting (search for clients) development and capture of clients, in particular, automobile operating companies, road freight transport & special vehicle service stations, industrial establishments, agricultural holdings, mining and processing works, integrated iron-and-steel works, basic engineering industry facilities, etc.', 'vacancy_id' => 2],
            ['text_ru' => 'Работа с возражениями клиентов','text_en' => 'Customers’ claims settlement', 'vacancy_id' => 2],
            ['text_ru' => 'Работа с документами – заключение договоров, ведение документооборота','text_en' => 'Paperwork management-conclusion of contracts, document management', 'vacancy_id' => 2],
            ['text_ru' => 'Ежемесячное/ежеквартальное планирование, контроль своих показателей продаж','text_en' => 'Monthly/quarterly scheduling, control over his/her own sales performance', 'vacancy_id' => 2],
            ['text_ru' => 'Контроль дебиторской задолженности','text_en' => 'Control over receivables', 'vacancy_id' => 2]
        ];

        $dataRequirements = [
            ['text_ru' => 'Высшее образование','text_en' => 'Higher education', 'vacancy_id' => 1],
            ['text_ru' => 'Владение навыком техники продаж','text_en' => 'Competence in sales techniques', 'vacancy_id' => 1],
            ['text_ru' => 'Знание способов борьбы с возражениями','text_en' => 'Claims settlement', 'vacancy_id' => 1],
            ['text_ru' => 'Умение вести переговоры и решать конфликтные ситуации','text_en' => 'Negotiating and bargaining skills and conflict management', 'vacancy_id' => 1],
            ['text_ru' => 'Коммуникабельность, умение правильно и грамотно говорить, желание и умение активно обучаться новому','text_en' => 'Interpersonal skill, well-bred speech, will and ability to be trained on the new', 'vacancy_id' => 1],
            ['text_ru' => 'Опыт работы в оптовых продажах от 3-х лет в аналогичной сфере (со смазочными материалами)','text_en' => 'Operational experience in wholesale sales, at least 3 years in a similar field (with lubricants)', 'vacancy_id' => 1],
            ['text_ru' => 'Опыт работы в оптовых продажах от 2 лет в аналогичной сфере (со смазочными материалами, оборудованием, запасными частями, и пр.)','text_en' => 'Operational experience in wholesale sales, at least 2 years in a similar field (with lubricants, equipment, spare parts, etc.)', 'vacancy_id' => 2],
            ['text_ru' => 'Опыт поиска, разработки и привлечения клиентов (прохождение всех основных этапов продаж)','text_en' => 'Experience in prospecting (search for clients), development and capture of clients (key sales stage hitting milestones)', 'vacancy_id' => 2],
            ['text_ru' => 'Опыт самостоятельного проведения презентаций и обучений у клиентов','text_en' => 'Experience in making presentations independently and lessons learnt from clients', 'vacancy_id' => 2],
            ['text_ru' => 'Успешный опыт ведения сложных переговоров','text_en' => 'Successful experience in delicate negotiations', 'vacancy_id' => 2],
            ['text_ru' => 'Готовность к командировкам','text_en' => 'Willingness to travel', 'vacancy_id' => 2]
        ];

        $dataTerms = [
            ['text_ru' => 'Современный офис в районе метро Окружная','text_en' => 'State of the art office in Okruzhnaya metro area', 'vacancy_id' => 1],
            ['text_ru' => 'Сплоченный коллектив','text_en' => 'Cohesive team', 'vacancy_id' => 1],
            ['text_ru' => 'Перспективы карьерного роста и заработной платы','text_en' => 'Career prospects and salary growth', 'vacancy_id' => 1],
            ['text_ru' => 'Условия заработной платы будут обсуждаться с успешным кандидатом по результатам собеседования','text_en' => 'Terms of pay will be discussed with a eligible negotiator based on the job interview results', 'vacancy_id' => 1],
            ['text_ru' => 'Режим работы: с 09:00 по 17:00 с понедельника по пятницу','text_en' => 'Business hours: 9.00 a.m. to 5.00 p.m., from Monday to Friday', 'vacancy_id' => 1],
            ['text_ru' => 'Современный офис в районе метро Окружная','text_en' => 'State of the art office in Okruzhnaya metro area', 'vacancy_id' => 2],
            ['text_ru' => 'Сплоченный коллектив','text_en' => 'Cohesive team', 'vacancy_id' => 2],
            ['text_ru' => 'Перспективы карьерного роста и заработной платы','text_en' => 'Career prospects and salary growth', 'vacancy_id' => 2],
            ['text_ru' => 'Условия заработной платы будут обсуждаться с успешным кандидатом по результатам собеседования','text_en' => 'Terms of pay will be discussed with a eligible negotiator based on the job interview results', 'vacancy_id' => 2],
            ['text_ru' => 'Режим работы: с 09:00 по 17:00 с понедельника по пятницу','text_en' => 'Business hours: 9.00 a.m. to 5.00 p.m., from Monday to Friday', 'vacancy_id' => 2]
        ];
        
        foreach ($dataVacanciees as $item) {
            $item['active'] = 1;
            Vacancy::create($item);
        }

        foreach ($dataDuties as $item) {
            VacancyDuty::create($item);
        }

        foreach ($dataRequirements as $item) {
            VacancyRequirement::create($item);
        }

        foreach ($dataTerms as $item) {
            VacancyTerm::create($item);
        }
    }
}