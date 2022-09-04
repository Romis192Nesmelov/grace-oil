@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
                @foreach($data['content'] as $content)
                    <a name="enc_{{ $content->id }}"></a>
                    <div class="tovar-slide-item">
                        <div class="trigger-title">{{ $content['head_'.App::getLocale()] }}</div>
                        <div class="tovar-slide-text {{ Request::has('id') && Request::input('id') == $content->id ? 'open-slide-text' : '' }}">
                            <div class="text_edit">
                                {!! $content['text_'.App::getLocale()] !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection