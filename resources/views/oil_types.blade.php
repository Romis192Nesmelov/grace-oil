@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
            </div>
            <div class="catalog-list">
                <div class="row row-flex">
                    @foreach($data['types'] as $type)
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 col-xxs">
                            <div class="catalog-item">
                                <div class="prev">
                                    <div class="prev-img-wp">
                                        <a href="{{ '/'.$data['breadcrumbs'][count($data['breadcrumbs'])-1]['href'].'/'.$type->slug }}">
                                            <img class="lazyload" data-src="{{ asset($type->icon) }}" src="{{ asset($type->icon) }}" alt="{{ $type['name_'.App::getLocale()] }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="descr">
                                    <a href="{{ '/'.$data['breadcrumbs'][count($data['breadcrumbs'])-1]['href'].'/'.$type->slug }}" class="catalog-item-title">{{ $type['name_'.App::getLocale()] }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection