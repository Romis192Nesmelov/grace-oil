@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
                @foreach($data['vacancies'] as $vacancy)
                    <div class="tovar-slide-item">
                        <div class="trigger-title">{{ $vacancy['name_'.App::getLocale()] }}</div>
                        <div class="tovar-slide-text">
                            <div class="text_edit">
                                <h3>{{ trans('content.job_experience_required').' '.$vacancy->skills.' '.trans('content.years') }}</h3>
                                <p>{{ $vacancy['employment_'.App::getLocale()] }}</p>

                                @include('_vacancy_point_block',[
                                    'pointHead' => trans('content.duties'),
                                    'pointItems' => $vacancy->duties
                                ])

                                @include('_vacancy_point_block',[
                                    'pointHead' => trans('content.requirements'),
                                    'pointItems' => $vacancy->requirements
                                ])

                                @include('_vacancy_point_block',[
                                    'pointHead' => trans('content.you_will_be_provided_with'),
                                    'pointItems' => $vacancy->terms
                                ])
                            </div>
                        </div>
                    </div>
                @endforeach
                {!! $data['content']['text_'.App::getLocale()] !!}

                @include('layouts._button_tyoe2_block',[
                    'btnHref' => '#',
                    'btnText' => trans('content.send_resume'),
                    'addClass' => ''
                ])
            </div>
        </div>
    </div>
@endsection