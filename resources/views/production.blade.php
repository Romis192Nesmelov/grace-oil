@extends('layouts.main',['title' => $head])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $head }}</h1>
                @foreach($content as $item)
                    <div class="row">
                        <h2 align="center">{{ $item['head_'.app()->getLocale()] }}</h2>
                        <div class="col-sm-8" style="margin: 0 0 50px">
                            {!! $item['text_'.app()->getLocale()] !!}
                        </div>
                        <div class="col-sm-4" style="margin: 0 0 50px; text-align: center;">
                            <img class="lazyload" data-src="{{ asset($item->full) }}" src="{{ asset($item->full) }}" alt="{{ $item['head_'.app()->getLocale()] }}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection