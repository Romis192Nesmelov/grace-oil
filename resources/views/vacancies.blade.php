@extends('layouts.main',['title' => $head])

@section('content')
    @php ob_start(); @endphp
    @include('blocks._input_block',[
        'inputName' => 'surname',
        'inputId' => 'surname',
        'inputLabel' => trans('content.surname').'*',
        'useAjax' => true,
    ])
    @include('blocks._input_block',[
        'inputName' => 'name',
        'inputId' => 'firstName',
        'inputLabel' => trans('content.name').'*',
        'useAjax' => true,
    ])
    @include('blocks._input_block',[
        'inputName' => 'patronymic',
        'inputId' => 'patronymic',
        'inputLabel' => trans('content.patronymic').'*',
        'useAjax' => true,
    ])
    @include('blocks._input_block',[
        'inputName' => 'city',
        'inputId' => 'city',
        'inputLabel' => trans('content.city').'*',
        'useAjax' => true,
    ])
    @include('blocks._input_block',[
        'inputName' => 'last_work',
        'inputId' => 'last_work',
        'inputLabel' => trans('content.last_work'),
        'useAjax' => true,
    ])
    @include('blocks._input_block',[
        'inputName' => 'position_held',
        'inputId' => 'position_held',
        'inputLabel' => trans('content.position_held'),
        'useAjax' => true,
    ])
    @include('blocks._input_block',[
        'inputName' => 'email',
        'inputId' => 'email',
        'inputLabel' => trans('content.email').'*',
        'useAjax' => true,
    ])
    @include('blocks._input_file_block',[
        'inputName' => 'resume_file',
        'inputId' => 'resume_file',
        'inputLabel' => trans('content.resume_file'),
        'useAjax' => true,
    ])
    @include('blocks._popup_block',[
        'popupContent' => ob_get_clean(),
        'popupId' => 'resume_popup',
        'popupUri' => 'resume',
        'popupHead' => trans('content.submit_request'),
        'useAjax' => true
    ])

    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $head }}</h1>
                @foreach($add_content as $vacancy)

                    @php ob_start(); @endphp
                    <h3>{{ trans('content.job_experience_required').' '.$vacancy->skills.' '.trans('content.years') }}</h3>
                    <p>{{ $vacancy['employment_'.app()->getLocale()] }}</p>
                    @include('blocks._vacancy_point_block',[
                        'pointHead' => trans('content.duties'),
                        'pointItems' => $vacancy->duties
                    ])

                    @include('blocks._vacancy_point_block',[
                        'pointHead' => trans('content.requirements'),
                        'pointItems' => $vacancy->requirements
                    ])

                    @include('blocks._vacancy_point_block',[
                        'pointHead' => trans('content.you_will_be_provided_with'),
                        'pointItems' => $vacancy->terms
                    ])

                    @include('blocks._accordion_block',[
                        'title' => $vacancy['name_'.app()->getLocale()],
                        'text' => ob_get_clean(),
                    ])

                @endforeach
                {!! $content['text_'.app()->getLocale()] !!}

                @include('blocks._button_type1_block',[
                    'btnHref' => '#resume_popup',
                    'btnText' => trans('content.send_resume'),
                    'addClass' => 'fancybox'
                ])
            </div>
        </div>
    </div>
@endsection