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
                @if (count($data['add_content']))
                    <div class="lubricants-list">
                        @foreach($data['add_content'] as $product)
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
                                @include('_brochure_download_block', [
                                    'description' => $product->brochure['description_'.App::getLocale()],
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