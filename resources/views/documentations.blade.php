@extends('layouts.main',['title' => $head])


@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title" style="min-height: 300px;">
                <h1>{{ $head }}</h1>
                <p><a href="{{ asset('statements/statement2018.pdf') }}" target="_blank">{{ trans('content.consolidated_statement').' 2018' }}</a></p>
                <p><a href="{{ asset('statements/statement2020.pdf') }}" target="_blank">{{ trans('content.consolidated_statement').' 2020' }}</a></p>
            </div>
        </div>
    </div>
@endsection