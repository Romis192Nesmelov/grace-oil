@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <div class="indstr-solutions-banner" style="background-image: url('{{ asset($data['content']->full) }}')">
                    <div class="banner_text">
                        <div class="banner-title"><h1>{{ $data['head'] }}</h1></div>
                        <div class="banner-descr">{!! $data['content']['head_'.App::getLocale()] !!}</div>
                    </div>
                </div>
                {!! $data['content']['text_'.App::getLocale()] !!}
            </div>
        </div>
    </div>
@endsection