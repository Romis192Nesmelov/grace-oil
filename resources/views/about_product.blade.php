@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
                <div class="text-diplom-block">
                    <div class="left-diplom more-width">
                        @include('_image_block',['full' => $data['content']->full, 'preview' => $data['content']->preview, 'alt' => 'About products'])
                    </div>
                    <div class="text_diplom">
                        {!! $data['content']['text_'.App::getLocale()] !!}
                    </div>
                </div>
                @if (count($data['products']))
                    <div class="lubricants-list">
                        @foreach($data['products'] as $product)
                            <div class="title-base">{{ $product['head_'.App::getLocale()] }}</div>
                            <div class="lubricant-item">
                                <div class="lubricant-prev">
                                    <img class="lazyload" data-src="{{ asset($product->image) }}" src="{{ asset($product->image) }}">
                                </div>
                                <div class="lubricant-descr">
                                    <div class="lubricant-txt">
                                        {!! $product['text_'.App::getLocale()] !!}
                                    </div>
                                </div>
                                <div class="lubricant-download">
                                    <div class="title-download">{{ $product['description_'.App::getLocale()] }}</div>
                                    <a href="{{ asset($product->brochure) }}" target="_blank" class="def-btn">{{ trans('content.download') }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection