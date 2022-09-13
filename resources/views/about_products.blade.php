@extends('layouts.main',['title' => $head])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $head }}</h1>
                <div class="text-diplom-block">
                    <div class="left-diplom more-width">
                        @include('blocks._image_block',['full' => $content->full, 'preview' => $content->preview, 'alt' => 'About products'])
                    </div>
                    <div class="text_diplom">
                        {!! $content['text_'.app()->getLocale()] !!}
                    </div>
                </div>
                @if (count($add_content))
                    <div class="lubricants-list">
                        @foreach($add_content as $product)
                            <div class="title-base">{{ $product['head_'.app()->getLocale()] }}</div>
                            <div class="lubricant-item">
                                <div class="lubricant-prev">
                                    <img class="lazyload" data-src="{{ asset($product->image) }}" src="{{ asset($product->image) }}">
                                </div>
                                <div class="lubricant-descr">
                                    <div class="lubricant-txt">
                                        {!! $product['text_'.app()->getLocale()] !!}
                                    </div>
                                </div>
                                @include('blocks._brochure_download_block', [
                                    'description' => $product->brochure['description_'.app()->getLocale()],
                                    'link' => $product->brochure->link
                                ])
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection