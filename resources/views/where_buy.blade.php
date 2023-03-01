@extends('layouts.main',['title' => $head])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $head }}</h1>
                <h2>{{ trans('content.dealers_and_distributors') }}</h2>
                @foreach($areas as $area)
                    @php ob_start(); @endphp
                    @foreach($area->dealers as $dealer)
                        <div class="dealer">
                            @if ($dealer->town_ru)
                                <p>{{ trans('content.town').$dealer['town_'.app()->getLocale()] }}</p>
                            @endif
                            <h3>{{ $dealer['name_'.app()->getLocale()] }}</h3>
                            @if ($dealer->phone)
                                <p>@include('blocks._custom_phone_block',['phone' => $dealer->phone])</p>
                            @endif
                            @if ($dealer->email)
                                <p>@include('blocks._custom_email_block',['email' => $dealer->email])</p>
                            @endif
                            @if ($dealer->url)
                                <p>@include('blocks._custom_url_block',['url' => $dealer->url])</p>
                            @endif
                        </div>
                    @endforeach
                    @include('blocks._accordion_block',[
                        'title' => $area['name_'.app()->getLocale()],
                        'text' => ob_get_clean()
                    ])
                @endforeach
                <h2>{{ trans('content.retail_sales') }}</h2>
                <div class="retail-block">
                    @foreach($retail as $item)
                        <div class="retail-img">
                            <a href="{{ $item->url }}" title="{{ $item['name_'.app()->getLocale()] }}" target="_blank">
                                <img title="{{ $item['name_'.app()->getLocale()] }}" src="{{ asset('images/'.$item->image) }}" />
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection