@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
                <p><a href="{{ asset('statements/statement2018.pdf') }}" target="_blank">{{ trans('content.consolidated_statement').' 2018' }}</a></p>
                <p><a href="{{ asset('statements/statement2020.pdf') }}" target="_blank">{{ trans('content.consolidated_statement').' 2020' }}</a></p>
            </div>
        </div>
    </div>
@endsection