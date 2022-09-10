@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['slug_content']['name_'.App::getLocale()] }}</h1>
                <div class="lubricant-item">
                    <div class="lubricant-prev">
                        <img class="lazyload" data-src="{{ asset($data['slug_content']->image) }}" src="{{ asset($data['slug_content']->image) }}" alt="{{ $data['slug_content']['name_'.App::getLocale()] }}">
                    </div>
                    <div class="lubricant-descr">
                        <div class="lubricant-txt text_edit">
                            {!! $data['slug_content']['text_'.App::getLocale()] !!}
                        </div>
                    </div>
                    @include('_brochure_download_block', [
                        'description' => $data['slug_content']->brochure['description_'.App::getLocale()],
                        'link' => $data['slug_content']->brochure->link
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
                                                @foreach($data['all_slug_in_model'] as $solutions)
                                                    <li style="padding-top: 5px;" {{ $data['slug_content']->slug == $solutions->slug ? 'class=active' : '' }}><a href="/{{ $data['breadcrumbs'][count($data['breadcrumbs'])-2]['href'].'/'.$solutions->slug }}">{{ $solutions['name_'.App::getLocale()] }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-8">
                            <div class="text_edit industry-title">
                                <h2>{{ $data['slug_content']['head_'.App::getLocale()] }}</h2>
                            </div>

                            <div class="industry-assort-block section-tabs">
                                <div class="category-list-wp">
                                    <ul class="tabs">
                                        <?php $oilSolution = []; ?>
                                        @foreach($catalogue as $k => $oilType)
                                            <?php
                                                $matches = false;
                                                foreach($data['slug_content']->toOil as $toOil) {
                                                    if ($toOil->oil->oilType->id == $oilType->id) {
                                                        $matches = true;
                                                        $oilSolution[$oilType->id][] = $toOil->oil;
                                                    }
                                                }
                                            ?>
                                            @if ($matches)
                                                <li {{ !$k ? 'class=current' : '' }}>{{ $oilType['name_'.App::getLocale()] }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="category-tovar-list">
                                    <ul class="tabs">
                                        <?php $counter = 0; ?>
                                        @foreach($oilSolution as $oilTypeId => $oils)
                                            <div class="box {{ !$counter ? 'visible' : '' }}">
                                                <ul>
                                                    @foreach($oils as $oil)
                                                        <li><a href="{{ url('/'.$menu[2]->slug.'/'.$oil->oilType->slug.'/'.$oil->slug) }}/">{{ $oil->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <?php $counter++; ?>
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