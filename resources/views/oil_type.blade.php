@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['breadcrumbs'][count($data['breadcrumbs'])-1]['name'] }}</h1>
            </div>
            <div class="main-struct">
                <div class="row" id="mse2_mfilter">
                    <div class="col-lg-3 col-md-4">
                        <div class="sidebar">
                            <div class="site-list">
                                <ul>
                                    <li class="parent active"><a href="">{{ trans('content.other_sections_of_the_catalog') }}<div class="trigger-arrow"></div></a>
                                        <ul>
                                            @foreach ($data['types'] as $type)
                                                <li class="{{ $type->id == $data['oil_type_id'] ? 'active' : '' }}">
                                                    <a href="{{ url('/'.$data['breadcrumbs'][0]['href'].'/'.$type->slug) }}">{{ $type['name_'.App::getLocale()] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div id="checkboxes-list" class="filter-side popup-filter">
                                            <div class="filter-category-block" id="viscosity_grade">
                                                <div class="trigger-filter-title">{{ trans('content.viscosity_grade') }}</div>
                                                <div class="checkbox-toggle-list open">
                                                    <?php $viscosity = []; $gasEngineCount = 0; $dieselEngineCount = 0; $tolerances = []; ?>

                                                    @foreach($data['oil'] as $oil)
                                                        <?php $viscosityName = $oil->viscosity->name; $viscosityKey = strtolower(str_replace(' ','_',$oil->viscosity->slug));?>

                                                        @if (!count($viscosity) || !in_array($viscosityKey, array_keys($viscosity)))
                                                            <?php $viscosity[$viscosityKey] = ['counter' => 1, 'name' => $viscosityName]; ?>
                                                        @else
                                                            <?php $viscosity[$viscosityKey]['counter']++; ?>
                                                        @endif

                                                        @if (!$oil->engine_type)
                                                            <?php $gasEngineCount++; ?>
                                                        @else
                                                            <?php $dieselEngineCount++; ?>
                                                        @endif

                                                        @foreach($oil->toTolerances as $toTolerance)
                                                            <?php $toleranceName = $toTolerance->tolerance->name; $toleranceKey = strtolower(str_replace([' ','/','.','`'],'_',$toleranceName)); ?>

                                                            @if (!count($tolerances) || !in_array($toleranceKey, array_keys($tolerances)))
                                                                <?php $tolerances[$toleranceKey] = ['counter' => 1, 'name' => $toleranceName]; ?>
                                                            @else
                                                                <?php $tolerances[$toleranceKey]['counter']++; ?>
                                                            @endif
                                                        @endforeach
                                                    @endforeach

                                                    @foreach($viscosity as $key => $item)
                                                        @include('layouts._checkbox_block',[
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

                                                    @if ($gasEngineCount)
                                                        @include('layouts._checkbox_block',[
                                                            'inputId' => 'engine_type_0',
                                                            'inputName' => 'engine_type_0',
                                                            'inputVal' => 'engine_type_0',
                                                            'inputLabel' => trans('content.gas_engine').'<span>('.$gasEngineCount.')</span>'
                                                        ])
                                                    @endif

                                                    @if ($dieselEngineCount)
                                                        @include('layouts._checkbox_block',[
                                                            'inputId' => 'engine_type_1',
                                                            'inputName' => 'engine_type_1',
                                                            'inputVal' => 'engine_type_1',
                                                            'inputLabel' => trans('content.diesel_engine').'<span>('.$dieselEngineCount.')</span>'
                                                        ])
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="filter-category-block" id="specification">
                                                <div class="trigger-filter-title">{{ trans('content.tolerances_and_compliances') }}</div>
                                                <div class="checkbox-toggle-list open">
                                                    @foreach($tolerances as $key => $item)
                                                        @include('layouts._checkbox_block',[
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
                        @if (count($data['subsections']))
                            <div class="category_menu">
                                <a href="{{ url('/'.$data['breadcrumbs'][1]['href']) }}" {{ !isset($data['subsection_id']) ? 'class=active' : '' }}>{{ trans('content.all') }}</a>
                                <ul>
                                    @foreach ($data['subsections'] as $oil)
                                        <li {{ isset($data['subsection_id']) && $oil->subsection_id == $data['subsection_id'] ? 'class=active' : '' }}><a href="{{ url('/'.$data['breadcrumbs'][1]['href'].'/'.$oil->subsection->slug) }}">{{ $oil->subsection['name_'.App::getLocale()] }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="tovar-list" id="mse2_results">
                            @foreach($data['oil'] as $oil)

                                <?php $toleranceClassName = ''; ?>
                                @foreach($oil->toTolerances as $toTolerance)
                                    <?php $toleranceClassName .= 'tolerance_'.strtolower(str_replace([' ','/','.','`'],'_',$toTolerance->tolerance->name)).' '; ?>
                                @endforeach

                                <div class="tovar-item item viscosity_{{ strtolower(str_replace(' ','_',$oil->viscosity->slug)) }} engine_type_{{ $oil->engine_type }} {{ $toleranceClassName }}">
                                    <div class="prev">
                                        <a href="{{ url('/'.$data['breadcrumbs'][0]['href'].'/'.$oil->oilType->slug.'/'.$oil->slug) }}">
                                            <img class="lazyload" data-src="{{ asset($oil->image_base) }}" src="{{ asset($oil->image_base) }}" alt="{{ $oil->name }}">
                                        </a>
                                    </div>
                                    <div class="descr">
                                        <a href="{{ url('/'.$data['breadcrumbs'][0]['href'].'/'.$oil->oilType->slug.'/'.$oil->slug) }}" class="tovar-title">{{ $oil->name }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mse2_pagination text-center">{{ $data['oil']->render() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection