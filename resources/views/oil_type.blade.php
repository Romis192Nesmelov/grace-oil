@extends('layouts.main',['title' => end($breadcrumbs)['name']])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ end($breadcrumbs)['name'] }}</h1>
            </div>
            <div class="main-struct">
                <div class="row">
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
                                        <div id="checkboxes-list-catalogue" class="filter-side popup-filter">
{{--                                            <form action="{{ Request::url() }}" method="POST">--}}
                                                {{ csrf_field() }}
                                                <input type="hidden" name="oil_type_id" value="{{ $oil_type_id }}" />
                                                <input type="hidden" name="subsection_id" value="{{ isset($subsection_id) ? subsection_id : 0 }}" />

                                                <div class="filter-category-block" id="viscosity_grade">
                                                    <div class="trigger-filter-title">{{ trans('content.viscosity_grade') }}</div>

                                                    @if (count($viscosity) > 1)
                                                        <div id="viscosity-filters" class="checkbox-toggle-list open">
                                                            @foreach($viscosity as $key => $item)
                                                                @include('blocks._checkbox_block',[
                                                                    'inputId' => 'viscosity_'.$key,
                                                                    'inputName' => 'viscosity_'.$key,
                                                                    'inputVal' => $item['id'],
                                                                    'inputLabel' => $item['name'].'<span>('.$item['counter'].')</span>',
                                                                    'checked' => session()->has('filters') && isset(session()->get('filters')['viscosity']) && in_array($item['id'], session()->get('filters')['viscosity'])
                                                                ])
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </div>

                                                @if (count($engine_types) > 1)
                                                    <div class="filter-category-block" id="engine_type">
                                                        <div class="trigger-filter-title">{{ trans('content.engine_type') }}</div>
                                                        <div id="engine_type-filters" class="checkbox-toggle-list open">
                                                            @foreach($engine_types as $key => $item)
                                                                @include('blocks._checkbox_block',[
                                                                    'inputId' => 'engine_type_'.$key,
                                                                    'inputName' => 'engine_type_'.$key,
                                                                    'inputVal' => $item['id'],
                                                                    'inputLabel' => $item['name'].'<span>('.$item['counter'].')</span>',
                                                                    'checked' => session()->has('filters') && isset(session()->get('filters')['engine_type']) && in_array($item['id'], session()->get('filters')['engine_type'])
                                                                ])
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endif

                                                @if (count($tolerances) > 1)
                                                    <div class="filter-category-block" id="tolerances">
                                                        <div class="trigger-filter-title">{{ trans('content.tolerances_and_compliances') }}</div>
                                                        <div id="tolerances-filters" class="checkbox-toggle-list open">
                                                            @foreach($tolerances as $key => $item)
                                                                @include('blocks._checkbox_block',[
                                                                    'inputId' => 'tolerances_'.$key,
                                                                    'inputName' => 'tolerances_'.$key,
                                                                    'inputVal' => $item['id'],
                                                                    'inputLabel' => $item['name'].'<span>('.$item['counter'].')</span>',
                                                                    'checked' => session()->has('filters') && isset(session()->get('filters')['tolerances']) && in_array($item['id'], session()->get('filters')['tolerances'])
                                                                ])
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endif
                                                {{--<button type="submit">Ok!</button>--}}
                                            {{--</form>--}}
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
                        <div id="oil-list">
                            @include('blocks._oil_list_block')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection