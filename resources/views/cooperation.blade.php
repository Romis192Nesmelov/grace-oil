@extends('layouts.main',['title' => $content['head_'.app()->getLocale()]])

@section('content')
    @include('blocks._feedback_def_popup_block',[
        'popupId' => 'partner_popup',
        'popupRoute' => 'partner',
        'popupHead' => trans('content.submit_request'),
    ])

    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $content['head_'.app()->getLocale()] }}</h1>
                <div class="indstr-solutions-banner sotrud_banner" style="background-image: url('{{ asset($content->full) }}')">
                    <div class="banner_text">
                        <div class="banner-title">{{ $content['head_'.app()->getLocale()] }}</div>
                    </div>
                </div>
                {!! $content['text_'.app()->getLocale()] !!}
                @include('blocks._button_type1_block',[
                    'btnHref' => '#partner_popup',
                    'btnText' => trans('content.to_make_a_partner'),
                    'addClass' => 'fancybox'
                ])
            </div>
        </div>
    </div>
@endsection