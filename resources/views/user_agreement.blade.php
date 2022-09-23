@extends('layouts.main',['title' => trans('footer.user_agreement')])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ trans('footer.user_agreement') }}</h1>
                {!! $content !!}
            </div>
        </div>
    </div>
@endsection