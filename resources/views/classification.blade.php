@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
                @foreach($data['add_content'] as $classification)
                    @include('_accordion_block',[
                        'title' => $classification['name_'.App::getLocale()],
                        'text' => $classification['text_'.App::getLocale()]
                    ])
                @endforeach

            </div>
        </div>
    </div>
@endsection