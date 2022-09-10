@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
                @foreach($data['content'] as $content)
                    <a name="enc_{{ $content->id }}"></a>
                    @include('_accordion_block',[
                        'title' => $content['head_'.App::getLocale()],
                        'text' => $content['text_'.App::getLocale()],
                        'open' => Request::has('id') && Request::input('id') == $content->id
                    ])
                @endforeach
            </div>
        </div>
    </div>
@endsection