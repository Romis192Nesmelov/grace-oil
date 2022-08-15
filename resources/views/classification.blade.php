@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>

                @foreach($data['add_content'] as $classification)
                <div class="tovar-slide-item">
                    <div class="trigger-title">{{ $classification['name_'.App::getLocale()] }}</div>
                    <div class="tovar-slide-text">
                        <div class="text_edit">
                            {!! $classification['text_'.App::getLocale()] !!}
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection