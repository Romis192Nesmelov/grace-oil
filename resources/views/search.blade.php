@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ trans('content.search_results') }}</h1>
            </div>
            <div class="search_result_block">
                @foreach($data['found'] as $k => $item)
                    <div class="search_item">
                        <div class="item_content">
                            <div class="item_name">
                                {{ $k+1 }}. <a href="{{ $item['href'] }}">{{ $item['title_'.App::getLocale()] }}</a>
                            </div>
                            <div class="item_descr">
                                <p>{{ mb_substr(strip_tags($item['text_'.App::getLocale()]),0,500,'UTF-8') }}…</p>
                            </div>
                            @include('layouts._button_type2_block',[
                                'btnHref' => $item['href'],
                                'btnBlank' => true,
                                'btnText' => trans('content.more_details')
                            ])
                        </div>
                    </div>
                @endforeach
                <div class="pagin-list">{{ $data['found']->render() }}</div>
            </div>
        </div>
    </div>
@endsection