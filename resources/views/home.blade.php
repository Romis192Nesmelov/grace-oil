@extends('layouts.main')

@section('content')
    <main class="main home">
        <div class="container">
           @if (count($data['slider']))
              <div class="top-carousel-block">
                 <div class="top-carousel">
                    @foreach($data['slider'] as $slide)
                       <div class="banner-item">
                          <div class="prev" style="background-image: url({{ asset($slide->image) }})">
                          </div>
                          <div class="descr">
                             <div class="slide-title">{!! $slide['head_'.App::getLocale()] !!}</div>
                             <div class="slide-title-sub">{!! $slide['sub_head_'.App::getLocale()] !!}</div>
                             <div class="slide-descr">{!! $slide['text_'.App::getLocale()] !!}</div>
                             <a href="#" class="def-btn">{{ trans('content.more_details') }}</a>
                          </div>
                       </div>
                    @endforeach
                 </div>
              </div>
           @endif

           @if (count($data['home_blocks']))
               <div class="service-list-block">
                   <div class="service-list">
                        @foreach($data['home_blocks'] as $block)
                           <div class="service-item">
                               <div class="prev">
                                   <a href="#">
                                       <img src="{{ asset($block->image) }}" alt="service_img">
                                   </a>
                               </div>
                               <div class="descr">
                                   <a href="#" class="title-item">{!! $block['head_'.App::getLocale()] !!}</a>
                                   {!! $block['text_'.App::getLocale()] !!}
                               </div>
                               @include('layouts._button_type1_block',[
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