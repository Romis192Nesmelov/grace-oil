@extends('layouts.main',['title' => $head])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <div class="indstr-solutions-banner" style="background-image: url('{{ asset($content->preview) }}')">
                    <div class="banner_text">
                        <div class="banner-title"><h1>{{ $head }}</h1></div>
                        <div class="banner-descr">{!! $content['head_'.app()->getLocale()] !!}</div>
                    </div>
                </div>
                {!! $content['text_'.app()->getLocale()] !!}
            </div>

            @if (count($add_content))
                <div class="industry-list">
                    @foreach($add_content as $solution)
                        <div class="industry-item">
                            <div class="prev">
                                <a href="{{ Request::getPathInfo().'/'.$solution->slug }}">
                                    <img class="lazyload" data-src="{{ asset($solution->image) }}" src="{{ asset($solution->image) }}" alt="{{ $solution['name_'.app()->getLocale()] }}">
                                </a>
                            </div>
                            <div class="descr">
                                <a href="{{ Request::getPathInfo().'/'.$solution->slug }}" class="industry-item-title">{{ $solution['name_'.app()->getLocale()] }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection