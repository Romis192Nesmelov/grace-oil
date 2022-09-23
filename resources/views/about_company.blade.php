@extends('layouts.main',['title' => $head])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $head }}</h1>
                <div class="about-comp-item-list">
                    <div class="row row-flex">
                        @foreach($add_content as $point)
                            <div class="col-lg-4 col-sm-6 col-xs-6 col-xxs">
                                <div class="about-comp-item">
                                    <div class="prev">
                                        <img class="lazyload" data-src="{{ asset($point->image) }}" src="{{ asset($point->image) }}" alt="{{ $point['head_'.app()->getLocale()] }}">
                                    </div>
                                    <div class="descr">
                                        <div class="comp-item-title">{{ $point['head_'.app()->getLocale()] }}</div>
                                        <div class="comp-item-text">{{ $point['text_'.app()->getLocale()] }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection