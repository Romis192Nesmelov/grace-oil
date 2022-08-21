@extends('layouts.main')

@section('content')
    <?php ob_start(); ?>
    @include('layouts._input_block',[
        'inputName' => 'surname',
        'inputId' => 'surname',
        'inputLabel' => trans('content.surname').'*',
        'useAjax' => true,
    ])
    @include('layouts._input_block',[
        'inputName' => 'name',
        'inputId' => 'firstName',
        'inputLabel' => trans('content.name').'*',
        'useAjax' => true,
    ])
    @include('layouts._input_block',[
        'inputName' => 'patronymic',
        'inputId' => 'patronymic',
        'inputLabel' => trans('content.patronymic').'*',
        'useAjax' => true,
    ])
    @include('layouts._input_block',[
        'inputName' => 'city',
        'inputId' => 'city',
        'inputLabel' => trans('content.city').'*',
        'useAjax' => true,
    ])
    @include('layouts._input_block',[
        'inputName' => 'last_work',
        'inputId' => 'last_work',
        'inputLabel' => trans('content.last_work'),
        'useAjax' => true,
    ])
    @include('layouts._input_block',[
        'inputName' => 'position_held',
        'inputId' => 'position_held',
        'inputLabel' => trans('content.position_held'),
        'useAjax' => true,
    ])
    @include('layouts._input_block',[
        'inputName' => 'email',
        'inputId' => 'email',
        'inputLabel' => trans('content.email').'*',
        'useAjax' => true,
    ])
    @include('layouts._input_file_block',[
        'inputName' => 'resume_file',
        'inputId' => 'resume_file',
        'inputLabel' => trans('content.resume_file'),
        'useAjax' => true,
    ])
    @include('layouts._popup_block',[
        'popupContent' => ob_get_clean(),
        'popupId' => 'resume_popup',
        'popupUri' => 'resume',
        'popupHead' => trans('content.submit_request'),
        'useAjax' => true
    ])

    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
                @foreach($data['add_content'] as $vacancy)
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

                @include('layouts._button_type1_block',[
                    'btnHref' => '#resume_popup',
                    'btnText' => trans('content.send_resume'),
                    'addClass' => 'fancybox'
                ])
            </div>
        </div>
    </div>
@endsection