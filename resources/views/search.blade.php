@extends('layouts.main',['title' => trans('footer.search_results')])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ trans('content.search_results').': «'.$searching.'»' }}</h1>
            </div>
            <div class="search_result_block">
                @foreach($found as $k => $item)
                    <div class="search_item">
                        <div class="item_content">
                            <div class="item_name">
                                {{ $k+1 }}. <a href="{{ $item['href'] }}">{{ $item['title_'.app()->getLocale()] }}</a>
                            </div>
                            <div class="item_descr">
                                <p>{{ mb_substr(strip_tags($item['text_'.app()->getLocale()]),0,500,'UTF-8') }}…</p>
                            </div>
                            @include('blocks._button_type2_block',[
                                'btnHref' => $item['href'],
                                'btnBlank' => true,
                                'btnText' => trans('content.more_details')
                            ])
                        </div>
                    </div>
                @endforeach
                <div class="pagin-list">{{ $found->render() }}</div>
            </div>
        </div>
    </div>
@endsection