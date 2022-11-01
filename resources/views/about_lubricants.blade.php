@extends('layouts.main',['title' => $head])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $head }}</h1>
                <div class="text-diplom-block">
                    <div class="left-diplom">
                        @include('blocks._image_block',['full' => $content->full, 'preview' => $content->preview, 'alt' => 'About products'])
                    </div>
                    <div class="text_diplom">
                        {!! $content['text_'.app()->getLocale()] !!}
                    </div>
                </div>
                @if (count($add_content))
                    <div class="about-comp-item-list">
                        <div class="row row-flex">
                            @foreach($add_content as $icon)
                                <div class="col-lg-4 col-sm-6 col-xs-6 col-xxs">
                                    <div class="about-comp-item">
                                        <div class="prev">
                                            <img class="lazyload" data-src="{{ asset($icon->image) }}" src="{{ asset($icon->image) }}" alt="{{ $icon['head_'.app()->getLocale()] }}">
                                        </div>
                                        <div class="descr">
                                            <div class="comp-item-title">{{ $icon['head_'.app()->getLocale()] }}</div>
                                            <div class="comp-item-text">{{ $icon['text_'.app()->getLocale()] }}</div>
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