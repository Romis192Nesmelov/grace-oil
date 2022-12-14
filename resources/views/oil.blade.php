@extends('layouts.main',['title' => $oil->name])

@section('content')
    @php ob_start(); @endphp
    @include('blocks._input_block',[
        'inputName' => 'name',
        'inputId' => 'firstName',
        'inputLabel' => trans('content.name').'*',
        'useAjax' => true,
    ])
    @include('blocks._input_block',[
        'inputName' => 'email',
        'inputId' => 'email',
        'inputLabel' => trans('content.email').'*',
        'useAjax' => true,
    ])
    @include('blocks._input_block',[
        'inputName' => 'phone',
        'dataType' => 'phone',
        'inputId' => 'phone',
        'inputLabel' => trans('content.phone').'*',
        'useAjax' => true,
    ])
    @include('blocks._textarea_block',[
        'taName' => 'question',
        'taId' => 'question',
        'taLabel' => trans('content.your_question'),
        'useAjax' => true,
    ])

    @include('blocks._popup_block',[
        'popupContent' => ob_get_clean(),
        'popupId' => 'request_popup',
        'popupRoute' => 'submit_application',
        'popupHead' => trans('content.submit_your_application'),
        'useAjax' => true
    ])

    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $oil['name_'.app()->getLocale()] }}</h1>
                <div class="title-image_base">{{ $oil['head_'.app()->getLocale()] }}</div>
            </div>
            <div class="tovar-block">
                <div class="tovar-image">
                    @foreach(['','_20','_10','_5','_4','_1'] as $val)
                        @if ($oil['image'.$val])
                            <img width="520" src="{{ asset($oil['image'.$val]) }}" alt="{{ $oil['name_'.app()->getLocale()] }}">
                            @break
                        @endif
                    @endforeach
                </div>
                <div class="tovar-descr">
                    <div class="tovar-descr-title">{{ trans('content.compliance') }}</div>
                    <table class="tovar-table">
                        <tr>
                            @foreach($oil->tolerances as $tolerance)
                                <td>{{ $tolerance['name'] }}</td>
                            @endforeach
                        </tr>
                    </table>
                    <div class="tovar-descr-title bottle-size-title">{{ trans('content.packing') }}</div>
                    <div class="bottle-size-list wrap-image-packing">
                        @foreach($oil->tares as $tare)
                            <div class="bottle-item packing-active" data-packing="packing_{{ $tare->value }}" title="{{ trans('content.click_to_view_image') }}">
                                <div class="prev"><img src="{{ asset('images/packing_icons/icon_'.$tare->value.'.png') }}" alt="bottle"></div>
                                <div class="desc">
                                    <div class="bottle-title-title">
                                        @php $packing = str_replace('_',',',$tare->value); @endphp
                                        @if ((int)$packing <= 20)
                                            {{ $oil->units ? $packing.trans('content.kg') : $packing.trans('content.l') }}
                                        @elseif ((int)$packing == 180)
                                            {{ $packing.trans('content.kg') }}
                                        @else
                                            {{ $packing.trans('content.l') }}
                                        @endif
                                    </div>
                                </div>
                                <div id="packing_{{ $packing }}" data-src="{{ asset($tare->image) }}"></div>
                            </div>
                        @endforeach
                    </div>

                    @include('blocks._button_type2_block',[
                        'btnHref' => '#request_popup',
                        'addClass' => 'fancybox',
                        'btnBlank' => false,
                        'btnText' => trans('content.submit_your_application')
                    ])
                </div>
            </div>
            <div class="tovar-slide-descr-list">
                @include('blocks._accordion_block',[
                    'title' => trans('content.description'),
                    'text' => $oil['description_'.app()->getLocale()]
                ])

                @include('blocks._accordion_block',[
                    'title' => trans('content.application_area'),
                    'text' => $oil['application_area_'.app()->getLocale()]
                ])

                @include('blocks._accordion_block',[
                    'title' => trans('content.advantages'),
                    'text' => $oil['advantages_'.app()->getLocale()]
                ])

                @if (count($oil->documentations))
                    @php ob_start(); @endphp
                    @foreach ($oil->documentations as $document)
                        <a href="{{ url($document->href) }}" class="download-btn">{{ $document['name_'.app()->getLocale()] }}</a>
                    @endforeach

                    @include('blocks._accordion_block',[
                        'title' => trans('content.documentation'),
                        'text' => ob_get_clean()
                    ])
                @endif
            </div>
        </div>
    </div>
@endsection