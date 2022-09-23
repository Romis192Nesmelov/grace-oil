@extends('layouts.main',['title' => end($breadcrumbs)['name']])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ end($breadcrumbs)['name'] }}</h1>
            </div>
            <div class="main-struct">
                <div class="row" id="mse2_mfilter">
                    <div class="col-lg-3 col-md-4">
                        <div class="sidebar">
                            <div class="site-list">
                                <ul>
                                    <li class="parent active"><a href="">{{ trans('content.other_sections_of_the_catalog') }}<div class="trigger-arrow"></div></a>
                                        <ul>
                                            @foreach ($types as $type)
                                                <li class="{{ $type->id == $oil_type_id ? 'active' : '' }}">
                                                    <a href="{{ url('/'.$breadcrumbs[0]['href'].'/'.$type->slug) }}">{{ $type['name_'.app()->getLocale()] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div id="checkboxes-list" class="filter-side popup-filter">
                                            <div class="filter-category-block" id="viscosity_grade">
                                                <div class="trigger-filter-title">{{ trans('content.viscosity_grade') }}</div>
                                                <div class="checkbox-toggle-list open">
                                                    @foreach($viscosity as $key => $item)
                                                        @include('blocks._checkbox_block',[
                                                            'inputId' => 'viscosity_'.$key,
                                                            'inputName' => 'viscosity_'.$key,
                                                            'inputVal' => 'viscosity_'.$key,
                                                            'inputLabel' => $item['name'].'<span>('.$item['counter'].')</span>'
                                                        ])
                                                    @endforeach
                                                </div>
                                            </div>

                                            <div class="filter-category-block" id="engine_type">
                                                <div class="trigger-filter-title">{{ trans('content.engine_type') }}</div>
                                                <div class="checkbox-toggle-list open">

                                                    @if ($gas_engine_count)
                                                        @include('blocks._checkbox_block',[
                                                            'inputId' => 'engine_type_0',
                                                            'inputName' => 'engine_type_0',
                                                            'inputVal' => 'engine_type_0',
                                                            'inputLabel' => trans('content.gas_engine').'<span>('.$gas_engine_count.')</span>'
                                                        ])
                                                    @endif

                                                    @if ($diesel_engine_count)
                                                        @include('blocks._checkbox_block',[
                                                            'inputId' => 'engine_type_1',
                                                            'inputName' => 'engine_type_1',
                                                            'inputVal' => 'engine_type_1',
                                                            'inputLabel' => trans('content.diesel_engine').'<span>('.$diesel_engine_count.')</span>'
                                                        ])
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="filter-category-block" id="specification">
                                                <div class="trigger-filter-title">{{ trans('content.tolerances_and_compliances') }}</div>
                                                <div class="checkbox-toggle-list open">
                                                    @foreach($tolerances as $key => $item)
                                                        @include('blocks._checkbox_block',[
                                                            'inputId' => 'tolerance_'.$key,
                                                            'inputName' => 'tolerance_'.$key,
                                                            'inputVal' => 'tolerance_'.$key,
                                                            'inputLabel' => $item['name'].'<span>('.$item['counter'].')</span>'
                                                        ])
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        @if (count($subsections))
                            <div class="category_menu">
                                <a href="{{ url('/'.$breadcrumbs[1]['href']) }}" {{ !isset($subsection_id) ? 'class=active' : '' }}>{{ trans('content.all') }}</a>
                                <ul>
                                    @foreach ($subsections as $item)
                                        <li {{ isset($subsection_id) && $item->subsection_id == $subsection_id ? 'class=active' : '' }}><a href="{{ url('/'.$breadcrumbs[1]['href'].'/'.$item->subsection->slug) }}">{{ $item->subsection['name_'.app()->getLocale()] }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="tovar-list" id="mse2_results">
                            @foreach($oil as $item)

                                @php $toleranceClassName = ''; @endphp
                                @foreach($item->tolerances as $tolerance)
                                    @php $toleranceClassName .= 'tolerance_'.strtolower(str_replace([' ','/','.','`'],'_',$tolerance->name)).' '; @endphp
                                @endforeach

                                <div class="tovar-item item viscosity_{{ strtolower(str_replace(' ','_',$item->viscosity->slug)) }} engine_type_{{ $item->engine_type }} {{ $toleranceClassName }}">
                                    <div class="prev">
                                        <a href="{{ url('/'.$breadcrumbs[0]['href'].'/'.$item->oilType->slug.'/'.$item->slug) }}">
                                            <img class="lazyload" data-src="{{ asset($item->image_base) }}" src="{{ asset($item->image_base) }}" alt="{{ $item->name }}">
                                        </a>
                                    </div>
                                    <div class="descr">
                                        <a href="{{ url('/'.$breadcrumbs[0]['href'].'/'.$item->oilType->slug.'/'.$item->slug) }}" class="tovar-title">{{ $item->name }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mse2_pagination text-center">{{ $oil->render() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection