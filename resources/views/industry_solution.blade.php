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
                                                @foreach($data['all_slug_in_model'] as $slug => $name)
                                                    <li style="padding-top: 5px;" {{ $data['slug_content']->slug == $slug ? 'class=active' : '' }}><a href="{{ Request::getPathInfo().'/'.$data['slug_content']->slug }}">{{ $name }}</a></li>
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

                                </div>
                                <div class="category-tovar-list">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection