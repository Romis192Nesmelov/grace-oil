@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
                <div class="text-diplom-block">
                    <div class="left-diplom">
                        @include('_image_block',['full' => $data['content']->full, 'preview' => $data['content']->preview, 'alt' => 'Achievement'])
                    </div>
                    <div class="text_diplom">
                        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $data['content']['head_'.App::getLocale()] }}</font></font></h2>
                        {!! $data['content']['text_'.App::getLocale()] !!}
                    </div>
                </div>
                <div class="sertificate-list-block">
                    <div class="title-base">{{ trans('content.results_of_our_work') }}</div>
                    <div class="sertificate-list">
                        <div class="row">
                            @foreach($data['diplomas'] as $diploma)
                                <div class="col-md-3 col-sm-4 col-xs-6 col-xxs">
                                    <div class="sertificate-item">
                                        @include('_image_block',[
                                            'full' => $diploma->full,
                                            'preview' => $diploma->preview,
                                            'alt' => $diploma['text_'.App::getLocale()],
                                            'subscribe' => $diploma['text_'.App::getLocale()]
                                        ])
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection