@extends('layouts.main')

@section('content')
    <main class="main home">
        <div class="container">
           @if (count($slider))
              <div class="top-carousel-block">
                 <div class="top-carousel">
                    @foreach($slider as $slide)
                       <div class="banner-item">
                          <div class="prev" style="background-image: url({{ asset($slide->image) }})"></div>
                          <div class="descr">
                             <div class="slide-title">{!! $slide['head_'.app()->getLocale()] !!}</div>
                             <div class="slide-title-sub">{!! $slide['sub_head_'.app()->getLocale()] !!}</div>
                             <div class="slide-descr">{!! $slide['text_'.app()->getLocale()] !!}</div>
                             <a href="{{ url($slide->href) }}" class="def-btn">{{ trans('content.more_details') }}</a>
                          </div>
                       </div>
                    @endforeach
                 </div>
              </div>
           @endif

           @if (count($home_blocks))
               <div class="service-list-block">
                   <div class="service-list">
                        @foreach($home_blocks as $block)
                           <div class="service-item">
                               <div class="prev">
                                   <a href="#">
                                       <img src="{{ asset($block->image) }}" alt="service_img">
                                   </a>
                               </div>
                               <div class="descr">
                                   <a href="#" class="title-item">{!! $block['head_'.app()->getLocale()] !!}</a>
                                   {!! $block['text_'.app()->getLocale()] !!}
                               </div>
                               @include('blocks._button_type1_block',[
                                    'btnHref' => '/',
                                    'btnText' => trans('content.more_details')
                                ])
                           </div>
                        @endforeach
                   </div>
               </div>
            @endif
        </div>
    </main>
@endsection