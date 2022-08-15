@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
            </div>
            @foreach($data['news'] as $new)
                <div class="news-list-block">
                    <div class="news-list">
                        <div class="news-item">
                            <div class="prev">
                                <a href="{{ '/'.$data['breadcrumbs'][count($data['breadcrumbs'])-1]['href'].'/'.$new->slug }}">
                                    <img class="lazyload" data-src="{{ $new->image }}" src="{{ $new->image }}" alt="{{ $new['head_'.App::getLocale()] }}">
                                </a>
                            </div>
                            <div class="descr">
                                <a href="{{ '/'.$data['breadcrumbs'][count($data['breadcrumbs'])-1]['href'].'/'.$new->slug }}" class="news-title">{{ $new['head_'.App::getLocale()] }}</a>
                                <div class="news-txt">{{ $new['text_short_'.App::getLocale()] }}</div>
                                <div class="data">{{ date('d.m.Y', $new->time) }}</div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
            <div class="pagin-list">{{ $data['news']->render() }}</div>
        </div>
    </div>
@endsection