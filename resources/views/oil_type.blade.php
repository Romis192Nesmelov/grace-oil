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

                                                @if (count($viscosity) > 1)
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
                                                @endif
                                            </div>

                                            @if (count($engine_types) > 1)
                                                <div class="filter-category-block" id="engine_type">
                                                    <div class="trigger-filter-title">{{ trans('content.engine_type') }}</div>
                                                    <div class="checkbox-toggle-list open">
                                                        @foreach($engine_types as $key => $item)
                                                            @include('blocks._checkbox_block',[
                                                                'inputId' => 'engine_type_'.$key,
                                                                'inputName' => 'engine_type_'.$key,
                                                                'inputVal' => 'engine_type_'.$key,
                                                                'inputLabel' => $item['name'].'<span>('.$item['counter'].')</span>'
                                                            ])
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif

                                            @if (count($tolerances) > 1)
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
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="category_menu">
                            @if (count($subsections))
                                <a href="{{ url('/'.$breadcrumbs[1]['href']) }}" {{ !isset($subsection_id) ? 'class=active' : '' }}>{{ trans('content.all') }}</a>
                                <ul>
                                    @foreach ($subsections as $subsection)
                                        <li {{ isset($subsection_id) && $subsection['id'] == $subsection_id ? 'class=active' : '' }}><a href="{{ url('/'.$breadcrumbs[1]['href'].'/'.$subsection['slug']) }}">{{ $subsection['name'] }}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div class="tovar-list" id="mse2_results">
                            @foreach($oil as $item)

                                @php $toleranceClassName = ''; @endphp
                                @foreach($item->tolerances as $tolerance)
                                    @php $toleranceClassName .= 'tolerance_'.strtolower(str_replace([' ','/','.','`'],'_',$tolerance->name)).' '; @endphp
                                @endforeach

                                @php $engineTypeClassName = ''; @endphp
                                @foreach($item->engineTypes as $engineType)
                                    @php $engineTypeClassName .= 'engine_type_'.$engineType->slug.' '; @endphp
                                @endforeach

                                <div class="tovar-item item viscosity_{{ strtolower(str_replace(' ','_',$item->viscosity->slug)) }} {{ $engineTypeClassName }} {{ $toleranceClassName }}">
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