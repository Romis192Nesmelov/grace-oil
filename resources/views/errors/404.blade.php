@extends('layouts.error')

@section('content')
    <main class="main home">
        <div class="container">
            <div class="top-carousel-block">
                <div class="top-carousel owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"></div>
                    </div>
                    <div class="owl-nav disabled">
                        <div class="arrow-left"></div>
                        <div class="arrow-right"></div>
                    </div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
            <h3>{{ trans('errors.en_sorry') }}</h3>
            <p>{{ trans('errors.there_may_be_several_explanations_for_this') }}</p>
            <ul>
                <li>{{ trans('errors.page_removed') }}</li>
                <li>{{ trans('errors.page_moved') }}</li>
                <li>{{ trans('errors.it_is_possible_that_some_letter_was_missed') }}</li>
            </ul>
            <p>{!! trans('errors.however') !!}</p>
        </div>
    </main>
@endsection