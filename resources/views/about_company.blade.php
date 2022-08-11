@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
                <div class="about-comp-item-list">
                    <div class="row row-flex">
                        @foreach($data['add_content'] as $point)
                            <div class="col-lg-4 col-sm-6 col-xs-6 col-xxs">
                                <div class="about-comp-item">
                                    <div class="prev">
                                        <img class="lazyload" data-src="{{ asset($point->image) }}" src="{{ asset('images/history/'.$point->image) }}" alt="{{ $point['head_'.App::getLocale()] }}">
                                    </div>
                                    <div class="descr">
                                        <div class="comp-item-title">{{ $point['head_'.App::getLocale()] }}</div>
                                        <div class="comp-item-text">{{ $point['text_'.App::getLocale()] }}</div>
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