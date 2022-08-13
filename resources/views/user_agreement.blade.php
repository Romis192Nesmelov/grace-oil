@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ trans('footer.user_agreement') }}</h1>
                {!! $data['content'] !!}
            </div>
        </div>
    </div>
@endsection