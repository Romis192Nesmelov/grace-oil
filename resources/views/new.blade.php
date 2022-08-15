@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['slug_content']['head_'.App::getLocale()] }}</h1>
            </div>
            <div class="article-data">{{ date('d.m.Y', $data['slug_content']->time) }}</div>
            <div class="text_edit article-container">
                {!! $data['slug_content']['text_full_'.App::getLocale()] !!}
            </div>

            @if (count($data['slug_content']->newsImages))
                <div class="photo-gallery">
                    <div class="photo-galley-list">
                        @foreach($data['slug_content']->newsImages as $image)
                            <div class="photo-item">
                                <a href="{{ asset($image->full) }}" data-fancybox="images">
                                    <img class="lazyload" data-src="{{ asset($image->preview) }}" src="{{ asset($image->preview) }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="button-wrapp">
                @include('layouts._button_type1_block',[
                    'btnHref' => '/'.$data['breadcrumbs'][count($data['breadcrumbs'])-2]['href'],
                    'btnText' => trans('content.back_to_news'),
                ])
            </div>

            @if (count($data['slug_content']->similarNews))
                <div class="more-articles">
                    <div class="title-base">{{ trans('content.read_more') }}</div>
                    <div class="more-news-list">
                        @foreach($data['slug_content']->similarNews as $similarNews)
                            <div class="news-item-wp">
                                <div class="news-item">
                                    <div class="prev">
                                        <a href="{{ '/'.$data['breadcrumbs'][count($data['breadcrumbs'])-2]['href'].'/'.$similarNews->similar->slug }}">
                                            <img class="lazyload" data-src="{{ asset($similarNews->similar->image) }}" src="{{ asset($similarNews->similar->image) }}">
                                        </a>
                                    </div>
                                    <div class="descr">
                                        <a href="{{ '/'.$data['breadcrumbs'][count($data['breadcrumbs'])-2]['href'].'/'.$similarNews->similar->slug }}" class="news-title">Новые масла GRACE по международному стандарту API CK-4</a>
                                        <div class="news-txt">{{ $similarNews->similar['head_'.App::getLocale()] }}</div>
                                        <div class="data">{{ date('d.m.Y', $similarNews->similar->time) }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection