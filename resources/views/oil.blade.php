@extends('layouts.main')

@section('content')
    <?php ob_start(); ?>
    @include('layouts._input_block',[
        'inputName' => 'name',
        'inputId' => 'firstName',
        'inputLabel' => trans('content.name').'*',
        'useAjax' => true,
    ])
    @include('layouts._input_block',[
        'inputName' => 'email',
        'inputId' => 'email',
        'inputLabel' => trans('content.email').'*',
        'useAjax' => true,
    ])
    @include('layouts._input_block',[
        'inputName' => 'phone',
        'dataType' => 'phone',
        'inputId' => 'phone',
        'inputLabel' => trans('content.phone').'*',
        'useAjax' => true,
    ])
    @include('layouts._textarea_block',[
        'taName' => 'question',
        'taId' => 'question',
        'taLabel' => trans('content.your_question'),
        'useAjax' => true,
    ])

    @include('layouts._popup_block',[
        'popupContent' => ob_get_clean(),
        'popupId' => 'request_popup',
        'popupUri' => 'submit_application',
        'popupHead' => trans('content.submit_your_application'),
        'useAjax' => true
    ])

    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['oil']->name }}</h1>
                <div class="title-base">{{ $data['oil']['head_'.App::getLocale()] }}</div>
            </div>
            <div class="tovar-block">
                <div class="tovar-image">
                    <img src="{{ asset($data['oil']->image_4 ? $data['oil']->image_4 : $data['oil']->image_base) }}" alt="{{ $data['oil']->name }}">
                </div>
                <div class="tovar-descr">
                    <div class="tovar-descr-title">{{ trans('content.compliance') }}:</div>
                    <table class="tovar-table">
                        <tr>
                            @foreach($data['oil']->toTolerances as $toTolerances)
                                <td>{{ $toTolerances->tolerance->name }}</td>
                            @endforeach
                        </tr>
                    </table>
                    <div class="tovar-descr-title bottle-size-title">{{ trans('content.packing') }}</div>
                    <div class="bottle-size-list wrap-image-packing">
                        @foreach(['1','4','20','180','1000'] as $k => $packing)
                            @if ($data['oil']['image_'.$packing])
                                <div class="bottle-item packing-active" data-packing="packing_{{ $packing }}" title="{{ trans('content.click_to_view_image') }}">
                                    <div class="prev"><img src="{{ asset('images/packing_icons/icon_'.$packing.'.png') }}" alt="bottle"></div>
                                    <div class="desc">
                                        <div class="bottle-title-title">
                                            @if ($k <= 2)
                                                {{ $packing.trans('content.l') }}
                                            @elseif ($k == 3)
                                                {{ $packing.trans('content.kg') }}
                                            @else
                                                {{ trans('content.cube').$packing.trans('content.l') }}
                                            @endif
                                        </div>
                                    </div>
                                    <div id="packing_{{ $packing }}" data-src="{{ asset($data['oil']['image_'.$packing]) }}"></div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    @include('layouts._button_type2_block',[
                        'btnHref' => '#request_popup',
                        'addClass' => 'fancybox',
                        'btnBlank' => false,
                        'btnText' => trans('content.submit_your_application')
                    ])
                </div>
            </div>
            <div class="tovar-slide-descr-list">
                @include('_accordion_block',[
                    'title' => trans('content.description'),
                    'text' => $data['oil']['description_'.App::getLocale()]
                ])

                @include('_accordion_block',[
                    'title' => trans('content.application_area'),
                    'text' => $data['oil']['application_area_'.App::getLocale()]
                ])

                @include('_accordion_block',[
                    'title' => trans('content.advantages'),
                    'text' => $data['oil']['advantages_'.App::getLocale()]
                ])

                <?php ob_start(); ?>
                @foreach ($data['oil']->documentations as $document)
                    <a href="{{ url($document->href) }}" class="download-btn">{{ $document['name_'.App::getLocale()] }}</a>
                @endforeach

                @include('_accordion_block',[
                    'title' => trans('content.documentation'),
                    'text' => ob_get_clean()
                ])
            </div>
        </div>
    </div>
@endsection