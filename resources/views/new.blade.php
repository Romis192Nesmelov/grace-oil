@extends('layouts.main',['title' => $head])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $slug_content['head_'.app()->getLocale()] }}</h1>
            </div>
            <div class="article-data">{{ date('d.m.Y', $slug_content->time) }}</div>
            <div class="text_edit article-container">
                {!! $slug_content['text_full_'.app()->getLocale()] !!}
            </div>

            @if (count($slug_content->newsImages))
                <div class="photo-gallery">
                    <div class="photo-galley-list">
                        @foreach($slug_content->newsImages as $image)
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
                @include('blocks._button_type1_block',[
                    'btnHref' => '/'.$breadcrumbs[count($breadcrumbs)-2]['href'],
                    'btnText' => trans('content.back_to_news'),
                ])
            </div>

            @if (count($slug_content->similarNews))
                <div class="more-articles">
                    <div class="title-base">{{ trans('content.read_more') }}</div>
                    <div class="more-news-list">
                        @foreach($slug_content->similarNews as $similarNews)
                            <div class="news-item-wp">
                                <div class="news-item">
                                    <div class="prev">
                                        <a href="{{ '/'.$breadcrumbs[count($breadcrumbs)-2]['href'].'/'.$similarNews->similar->slug }}">
                                            <img class="lazyload" data-src="{{ asset($similarNews->similar->image) }}" src="{{ asset($similarNews->similar->image) }}">
                                        </a>
                                    </div>
                                    <div class="descr">
                                        <a href="{{ '/'.$breadcrumbs[count($breadcrumbs)-2]['href'].'/'.$similarNews->similar->slug }}" class="news-title">Новые масла GRACE по международному стандарту API CK-4</a>
                                        <div class="news-txt">{{ $similarNews->similar['head_'.app()->getLocale()] }}</div>
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