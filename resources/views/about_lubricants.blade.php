@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
                <div class="text-diplom-block">
                    <div class="left-diplom">
                        @include('_image_block',['full' => $data['content']->full, 'preview' => $data['content']->preview, 'alt' => 'About products'])
                    </div>
                    <div class="text_diplom">
                        {!! $data['content']['text_'.App::getLocale()] !!}
                    </div>
                </div>
                @if (count($data['icons']))
                    <div class="about-comp-item-list">
                        <div class="row row-flex">
                            @foreach($data['icons'] as $icon)
                                <div class="col-lg-4 col-sm-6 col-xs-6 col-xxs">
                                    <div class="about-comp-item">
                                        <div class="prev">
                                            <img class="lazyload" data-src="{{ asset($icon->image) }}" src="{{ asset($icon->image) }}" alt="{{ $icon['head_'.App::getLocale()] }}">
                                        </div>
                                        <div class="descr">
                                            <div class="comp-item-title">{{ $icon['head_'.App::getLocale()] }}</div>
                                            <div class="comp-item-text">{{ $icon['text_'.App::getLocale()] }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection