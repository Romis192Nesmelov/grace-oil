@extends('layouts.main',['title' => $head])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $head }}</h1>
                <div class="text-diplom-block">
                    <div class="left-diplom">
                        @include('blocks._image_block',['full' => $content->full, 'preview' => $content->preview, 'alt' => 'Achievement'])
                    </div>
                    <div class="text_diplom">
                        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $content['head_'.app()->getLocale()] }}</font></font></h2>
                        {!! $content['text_'.app()->getLocale()] !!}
                    </div>
                </div>
                <div class="sertificate-list-block">
                    <div class="title-base">{{ trans('content.results_of_our_work') }}</div>
                    <div class="sertificate-list">
                        <div class="row">
                            @foreach($add_content as $diploma)
                                <div class="col-md-3 col-sm-4 col-xs-6 col-xxs">
                                    <div class="sertificate-item">
                                        @include('blocks._image_block',[
                                            'full' => $diploma->full,
                                            'preview' => $diploma->preview,
                                            'alt' => $diploma['text_'.app()->getLocale()],
                                            'subscribe' => $diploma['text_'.app()->getLocale()]
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