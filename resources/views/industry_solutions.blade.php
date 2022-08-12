@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <div class="indstr-solutions-banner" style="background-image: url('{{ asset($data['content']->full) }}')">
                    <div class="banner_text">
                        <div class="banner-title"><h1>{{ $data['head'] }}</h1></div>
                        <div class="banner-descr">{!! $data['content']['head_'.App::getLocale()] !!}</div>
                    </div>
                </div>
                {!! $data['content']['text_'.App::getLocale()] !!}
            </div>

            @if (count($data['add_content']))
                <div class="industry-list">
                    @foreach($data['add_content'] as $solution)
                        <div class="industry-item">
                            <div class="prev">
                                <a href="{{ Request::getPathInfo().'/'.$solution->slug }}">
                                    <img class="lazyload" data-src="{{ asset($solution->image) }}" src="{{ asset($solution->image) }}" alt="{{ $solution['name_'.App::getLocale()] }}">
                                </a>
                            </div>
                            <div class="descr">
                                <a href="{{ Request::getPathInfo().'/'.$solution->slug }}" class="industry-item-title">{{ $solution['name_'.App::getLocale()] }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection