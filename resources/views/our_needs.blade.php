@extends('layouts.main',['title' => $head])

@section('content')
    @php ob_start(); @endphp
    @include('blocks._input_block',[
        'inputName' => 'company_name',
        'inputId' => 'company_name',
        'inputLabel' => trans('content.your_company_name').'*',
        'useAjax' => true,
    ])
    @include('blocks._input_block',[
        'inputName' => 'name',
        'inputId' => 'firstName',
        'inputLabel' => trans('content.name').'*',
        'useAjax' => true,
    ])
    @include('blocks._input_block',[
        'inputName' => 'email',
        'inputId' => 'email',
        'inputLabel' => trans('content.email').'*',
        'useAjax' => true,
    ])
    @include('blocks._input_file_block',[
        'inputName' => 'offer_file',
        'inputId' => 'offer_file',
        'inputLabel' => trans('content.offer_file'),
        'useAjax' => true,
    ])
    @include('blocks._popup_block',[
        'popupContent' => ob_get_clean(),
        'popupId' => 'offer_popup',
        'popupUri' => 'offer',
        'popupHead' => trans('content.send_offer'),
        'useAjax' => true
    ])
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $head }}</h1>
                {!! $content['text_'.app()->getLocale()] !!}
                <p>{!! trans('content.in_case_of_any_questions').view('blocks._phone_block', ['settings' => $settings])->render() !!}</p>

                @include('blocks._button_type1_block',[
                    'btnHref' => '#offer_popup',
                    'btnText' => trans('content.send_offer'),
                    'addClass' => 'fancybox'
                ])
            </div>
        </div>
    </div>
@endsection