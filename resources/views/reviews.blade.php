@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
                <div class="main-struct">
                    <div class="row" id="mse2_mfilter">
                        <div class="col-lg-3 col-md-4">
                            <div class="sidebar">
                                <div class="site-list site-list-reviews">
                                    <div id="filter-mob" class="filter-side popup-filter">
                                        <div class="filter-category-block" id="mse2_tv|segment_filter">
                                           <div class="trigger-filter-title">{{ trans('content.segment') }}</div>
                                            <div class="checkbox-toggle-list review-filters open">
                                                <?php $segments = []; ?>
                                                @foreach($data['add_content'] as $review)
                                                    @if (count($review->solutions))
                                                        @foreach($review->solutions as $solution)

                                                            <?php
                                                                $name = $solution->industrySolution['name_'.App::getLocale()];
                                                                $key = strtolower(str_replace(' ','_',$solution->industrySolution->name_en));
                                                            ?>

                                                            @if (!count($segments) || !in_array($key, array_keys($segments)))
                                                                <?php $segments[$key] = ['counter' => 1, 'name' => $name]; ?>
                                                            @else
                                                                <?php $segments[$key]['counter']++; ?>
                                                            @endif

                                                        @endforeach
                                                    @else
                                                        <?php $segments['dealer'] = ['counter'  => 1, 'name' => trans('content.dealer_review')]; ?>
                                                    @endif
                                                @endforeach

                                                @foreach($segments as $key => $segment)
                                                    @include('layouts._checkbox_block',[
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
                            <div class="reviews_list" id="mse2_results">

                                @foreach($data['add_content'] as $review)
                                    <div class="item">
                                        <div class="item_image">
                                            <div class="img_wrap">
                                                @include('_image_block',[
                                                    'full' => $review->full,
                                                    'preview' => $review->preview,
                                                    'alt' => $review['name_'.App::getLocale()]
                                                ])
                                            </div>
                                        </div>
                                        <div class="item_info">
                                            <div class="item_name title-base">{{ $review['name_'.App::getLocale()] }}</div>
                                            <div class="item_segment">
                                                <p class="review-segments">{{ trans('content.segment') }}:
                                                    @if (count($review->solutions))
                                                        @foreach($review->solutions as $counter => $solution)
                                                            <span class="{{ strtolower(str_replace(' ','_',$solution->industrySolution->name_en)) }}">{{ $solution->industrySolution['name_'.App::getLocale()].($counter != count($review->solutions)-1 ? ', ' : '') }}</span>
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