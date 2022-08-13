@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
                {!! $data['content']['text_'.App::getLocale()] !!}
                <p>{!! trans('content.in_case_of_any_questions').view('layouts._phone_block', ['settings' => $settings])->render() !!}</p>
            </div>
        </div>
    </div>
@endsection