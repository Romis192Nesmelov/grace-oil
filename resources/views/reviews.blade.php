@extends('layouts.main',['title' => $head])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $head }}</h1>
                <div class="main-struct">
                    <div class="row" id="mse2_mfilter">
                        <div class="col-lg-3 col-md-4">
                            <div class="sidebar">
                                <div class="site-list site-list-reviews">
                                    <div id="filter-mob" class="filter-side popup-filter">
                                        <div class="filter-category-block" id="checkboxes-list">
                                           <div class="trigger-filter-title">{{ trans('content.segment') }}</div>
                                            <div class="checkbox-toggle-list open">
                                                @foreach($segments as $key => $segment)
                                                    @include('blocks._checkbox_block',[
                                                        'inputId' => $key,
                                                        'inputName' => $key,
                                                        'inputVal' => $key,
                                                        'inputLabel' => $segment['name'].' ('.$segment['counter'].')'
                                                    ])
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-8">
                            <div id="mse2_results">
                                @foreach($add_content as $review)
                                    <div class="item">
                                        <div class="item_image">
                                            <div class="img_wrap">
                                                @include('blocks._image_block',[
                                                    'full' => $review->full,
                                                    'preview' => $review->preview,
                                                    'alt' => $review['name_'.app()->getLocale()]
                                                ])
                                            </div>
                                        </div>
                                        <div class="item_info">
                                            <div class="item_name title-base">{{ $review['name_'.app()->getLocale()] }}</div>
                                            <div class="item_segment">
                                                <p class="review-segments">{{ trans('content.segment') }}:
                                                    @if (count($review->solutions))
                                                        @foreach($review->solutions as $counter => $solution)
                                                            <span class="{{ strtolower(str_replace(' ','_',$solution->industrySolution->name_en)) }}">{{ $solution->industrySolution['name_'.app()->getLocale()].($counter != count($review->solutions)-1 ? ', ' : '') }}</span>
                                                        @endforeach
                                                    @else
                                                        <span class="dealer">{{ trans('content.dealer_review') }}</span>
                                                    @endif
                                                </p>
                                            </div>
                                            {{--<div class="item_link">--}}
                                                {{--<a href="assets/content/reviews/ООО Мехземстрой-Липецк_page-0001.jpg" target="_blank" class="def-btn">Смотреть отзыв 0</a>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection