@extends('layouts.main',['title' => $head])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $head }}</h1>
                @foreach($add_content as $classification)
                    @include('blocks._accordion_block',[
                        'title' => $classification['name_'.app()->getLocale()],
                        'text' => $classification['text_'.app()->getLocale()]
                    ])
                @endforeach

            </div>
        </div>
    </div>
@endsection