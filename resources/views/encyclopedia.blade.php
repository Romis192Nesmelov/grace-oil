@extends('layouts.main',['title' => $head])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $head }}</h1>
                @foreach($content as $item)
                    <a name="enc_{{ $item->id }}"></a>
                    @include('blocks._accordion_block',[
                        'title' => $item['head_'.app()->getLocale()],
                        'text' => $item['text_'.app()->getLocale()],
                        'open' => Request::has('id') && Request::input('id') == $item->id
                    ])
                @endforeach
            </div>
        </div>
    </div>
@endsection