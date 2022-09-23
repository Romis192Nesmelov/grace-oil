@extends('layouts.main',['title' => $head])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $head }}</h1>
            </div>
            @foreach($news as $new)
                <div class="news-list-block">
                    <div class="news-list">
                        <div class="news-item">
                            <div class="prev">
                                <a href="{{ '/'.end($breadcrumbs)['href'].'/'.$new->slug }}">
                                    <img class="lazyload" data-src="{{ $new->image }}" src="{{ $new->image }}" alt="{{ $new['head_'.app()->getLocale()] }}">
                                </a>
                            </div>
                            <div class="descr">
                                <a href="{{ '/'.end($breadcrumbs)['href'].'/'.$new->slug }}" class="news-title">{{ $new['head_'.app()->getLocale()] }}</a>
                                <div class="news-txt">{{ $new['text_short_'.app()->getLocale()] }}</div>
                                <div class="data">{{ date('d.m.Y', $new->time) }}</div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
            <div class="pagin-list">{{ $news->render() }}</div>
        </div>
    </div>
@endsection