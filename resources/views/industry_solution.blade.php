@extends('layouts.main',['title' => $slug_content['name_'.app()->getLocale()]])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $slug_content['name_'.app()->getLocale()] }}</h1>
                <div class="lubricant-item">
                    <div class="lubricant-prev">
                        <img class="lazyload" data-src="{{ asset($slug_content->image) }}" src="{{ asset($slug_content->image) }}" alt="{{ $slug_content['name_'.app()->getLocale()] }}">
                    </div>
                    <div class="lubricant-descr">
                        <div class="lubricant-txt text_edit">
                            {!! $slug_content['text_'.app()->getLocale()] !!}
                        </div>
                    </div>
                    @include('blocks._brochure_download_block', [
                        'description' => $slug_content->brochure['description_'.app()->getLocale()],
                        'link' => $slug_content->brochure->link
                    ])
                </div>
                <div class="main-struct">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="sidebar">
                                <div class="site-list">
                                    <ul>
                                        <li style="padding-top: 3px;" class="parent active"><a href="#">{{ trans('content.other_sections_of_the_catalog') }}<div class="trigger-arrow"></div></a>
                                            <ul>
                                                @foreach($all_slug_in_model as $solutions)
                                                    <li style="padding-top: 5px;" {{ $slug_content->slug == $solutions->slug ? 'class=active' : '' }}><a href="/{{ $breadcrumbs[count($breadcrumbs)-2]['href'].'/'.$solutions->slug }}">{{ $solutions['name_'.app()->getLocale()] }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-8">
                            <div class="text_edit industry-title">
                                <h2>{{ $slug_content['head_'.app()->getLocale()] }}</h2>
                            </div>

                            <div class="industry-assort-block section-tabs">
                                <div class="category-list-wp">
                                    <ul class="tabs">
                                        @php $oilSolution = []; @endphp
                                        @foreach($catalogue as $k => $oilType)
                                            @php
                                                $matches = false;
                                                foreach($slug_content->toOil as $toOil) {
                                                    if ($toOil->oil->oilType->id == $oilType->id) {
                                                        $matches = true;
                                                        $oilSolution[$oilType->id][] = $toOil->oil;
                                                    }
                                                }
                                            @endphp
                                            @if ($matches)
                                                <li {{ !$k ? 'class=current' : '' }}>{{ $oilType['name_'.app()->getLocale()] }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="category-tovar-list">
                                    <ul class="tabs">
                                        @foreach($oilSolution as $oilTypeId => $oils)
                                            <div class="box {{ $loop->first ? 'visible' : '' }}">
                                                <ul>
                                                    @foreach($oils as $oil)
                                                        <li><a href="{{ url('/'.$menu[2]->slug.'/'.$oil->oilType->slug.'/'.$oil->slug) }}/">{{ $oil['name_'.app()->getLocale()] }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection