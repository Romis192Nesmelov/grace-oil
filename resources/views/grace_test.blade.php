@extends('layouts.main')

@section('content')
    <?php ob_start(); ?>
    @include('layouts._input_block',[
        'inputName' => 'purpose_of',
        'inputId' => 'purpose_of',
        'inputLabel' => trans('content.purpose_of').'*',
        'useAjax' => true,
    ])

    @include('layouts._input_block',[
        'inputName' => 'equipment',
        'inputId' => 'equipment',
        'inputLabel' => trans('content.equipment').'*',
        'useAjax' => true,
    ])

    @include('layouts._input_block',[
        'inputName' => 'competitor_product',
        'inputId' => 'competitor_product',
        'inputLabel' => trans('content.competitor_product').'*',
        'useAjax' => true,
    ])

    @include('layouts._input_block',[
        'inputName' => 'grace_product',
        'inputId' => 'grace_product',
        'inputLabel' => trans('content.grace_product').'*',
        'useAjax' => true,
    ])

    @include('layouts._input_block',[
        'inputName' => 'number_of_samples',
        'inputId' => 'number_of_samples',
        'inputLabel' => trans('content.number_of_samples').'*',
        'useAjax' => true,
    ])

    @include('layouts._input_block',[
        'inputName' => 'expected_effect',
        'inputId' => 'expected_effect',
        'inputLabel' => trans('content.expected_effect').'*',
        'useAjax' => true,
    ])

    @include('layouts._input_block',[
        'inputName' => 'partner',
        'inputId' => 'partner',
        'inputLabel' => trans('content.partner').'*',
        'useAjax' => true,
    ])

    @include('layouts._input_block',[
        'inputName' => 'email',
        'inputId' => 'email',
        'inputLabel' => trans('content.email').'*',
        'useAjax' => true,
    ])

    @include('layouts._input_block',[
        'inputName' => 'phone',
        'dataType' => 'phone',
        'inputId' => 'phone',
        'inputLabel' => trans('content.phone').'*',
        'useAjax' => true,
    ])

    @include('layouts._popup_block',[
        'popupId' => 'test_popup',
        'popupUri' => 'grace_test_request',
        'popupHead' => trans('content.test_application'),
        'popupContent' => ob_get_clean(),
        'useAjax' => true
    ])

    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
                <div class="title-base" style="color: #eb7c1e; text-align: center;">{{ trans('content.through_your_own_experience_make_sure') }}</div>
                @foreach($data['content'] as $content)
                    <div class="row">
                        <h2 align="center">{{ $content['head_'.App::getLocale()] }}</h2>
                        <div class="col-sm-8" style="margin: 0 0 50px">
                            {!! $content['text_'.App::getLocale()] !!}
                        </div>
                        <div class="col-sm-4" style="margin: 0 0 50px; text-align: center;">
                            <img class="lazyload" data-src="{{ asset($content->full) }}" src="{{ asset($content->full) }}" alt="{{ $content['head_'.App::getLocale()] }}">
                        </div>
                    </div>
                @endforeach

                @include('layouts._button_type1_block',[
                    'btnHref' => asset('brochures/grace_test.pdf'),
                    'btnText' => trans('content.download_grace_test_presentation'),
                    'btnBlank' => true
                ])

                @include('layouts._button_type1_block',[
                    'btnHref' => '#test_popup',
                    'btnText' => trans('content.request_for_grace_test'),
                    'addClass' => 'fancybox'
                ])
            </div>
        </div>
    </div>
@endsection