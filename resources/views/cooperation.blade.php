@extends('layouts.main')

@section('content')
    @include('layouts._feedback_def_popup_block',[
        'popupId' => 'partner_popup',
        'popupUri' => 'partner',
        'popupHead' => trans('content.submit_request'),
    ])

    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['content']['head_'.App::getLocale()] }}</h1>
                <div class="indstr-solutions-banner sotrud_banner" style="background-image: url('{{ asset($data['content']->full) }}')">
                    <div class="banner_text">
                        <div class="banner-title">{{ $data['content']['head_'.App::getLocale()] }}</div>
                    </div>
                </div>
                {!! $data['content']['text_'.App::getLocale()] !!}
                @include('layouts._button_type1_block',[
                    'btnHref' => '#partner_popup',
                    'btnText' => trans('content.to_make_a_partner'),
                    'addClass' => 'fancybox'
                ])
            </div>
        </div>
    </div>
@endsection