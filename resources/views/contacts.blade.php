@extends('layouts.main',['title' => $head])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $head }}</h1>
            </div>

            <table class="contacts-table">
                <tr>
                    <td>{{ trans('content.head_office') }}</td>
                    <td>{{ $settings['address_'.app()->getLocale()] }}</td>
                </tr>
                <tr>
                    <td>{{ trans('content.telephone_number_on_general_issues') }}</td>
                    <td>@include('blocks._phone_block')</td>
                </tr>
                <tr>
                    <td>{{ trans('content.email') }}</td>
                    <td>@include('blocks._email_block')</td>
                </tr>
            </table>

            <div class="contacts-form-map-block">
                @include('blocks._request_form_block',['formText' => trans('content.you_have_a_question')])

                <div class="contacts-map">
                    <ymaps id="ymaps1660626507434872350" style="display: block; width: 100%; height: 100%;"><ymaps class="ymaps-2-1-79-map" style="width: 752px; height: 693px;"><ymaps class="ymaps-2-1-79-map ymaps-2-1-79-i-ua_js_yes ymaps-2-1-79-map-bg ymaps-2-1-79-islets_map-lang-ru" style="width: 752px; height: 693px;"><ymaps class="ymaps-2-1-79-inner-panes"><ymaps class="ymaps-2-1-79-events-pane ymaps-2-1-79-user-selection-none" unselectable="on" style="height: 100%; width: 100%; top: 0px; left: 0px; position: absolute; z-index: 2500; cursor: url(&quot;https://api-maps.yandex.ru/2.1.79/build/release/images/cursor/grab.cur&quot;) 16 16, url(&quot;https://api-maps.yandex.ru/2.1.79/build/release/images/cursor/grab.cur&quot;), move;"></ymaps><ymaps class="ymaps-2-1-79-ground-pane" style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 501;"><ymaps style="z-index: 150; position: absolute;"><canvas height="949" width="1008" style="position: absolute; width: 1008px; height: 949px; left: -128px; top: -128px;"></canvas></ymaps></ymaps><ymaps class="ymaps-2-1-79-copyrights-pane" style="height: 0px; inset: auto 0px 0px; position: absolute; z-index: 5002; margin-bottom: 0px;"><ymaps><ymaps class="ymaps-2-1-79-copyright ymaps-2-1-79-copyright_logo_no" style=""><ymaps class="ymaps-2-1-79-copyright__fog">…</ymaps><ymaps class="ymaps-2-1-79-copyright__wrap"><ymaps class="ymaps-2-1-79-copyright__layout"><ymaps class="ymaps-2-1-79-copyright__content-cell"><ymaps class="ymaps-2-1-79-copyright__content"><ymaps class="ymaps-2-1-79-copyright__text">© Яндекс</ymaps><ymaps class="ymaps-2-1-79-copyright__agreement">&nbsp;<a class="ymaps-2-1-79-copyright__link" target="_blank" href="https://yandex.ru/legal/maps_termsofuse/?lang=ru" rel="noopener">Условия использования</a></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-copyright__logo-cell"><a class="ymaps-2-1-79-copyright__logo" href="" target="_blank"></a></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-map-copyrights-promo"><ymaps><ymaps class="ymaps-2-1-79-gotoymaps" title="Открыть в Яндекс.Картах"><ymaps class="ymaps-2-1-79-gotoymaps__container"><ymaps class="ymaps-2-1-79-gotoymaps__pin"></ymaps><ymaps class="ymaps-2-1-79-gotoymaps__text-container"><ymaps class="ymaps-2-1-79-gotoymaps__text">Открыть в Яндекс.Картах</ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-gototaxi" title="Доехать на такси" style="display: none;"><ymaps class="ymaps-2-1-79-gototaxi__container"><ymaps class="ymaps-2-1-79-gototaxi__pin"></ymaps><ymaps class="ymaps-2-1-79-gototaxi__text-container"><ymaps class="ymaps-2-1-79-gototaxi__text"></ymaps></ymaps></ymaps></ymaps><a class="ymaps-2-1-79-gototech" target="_blank" href="https://tech.yandex.ru/maps/mapsapi/?from=api-maps ">Создать свою карту</a></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls-pane" style="width: 100%; top: 0px; left: 0px; position: absolute; z-index: 4503;"><ymaps class="ymaps-2-1-79-controls__toolbar" style="margin-top: 10px;"><ymaps class="ymaps-2-1-79-controls__toolbar_left"><ymaps class="ymaps-2-1-79-controls__control_toolbar ymaps-2-1-79-user-selection-none" unselectable="on" style="margin-right: 0px; margin-left: 10px; position: inherit;"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text" style="max-width: 90px" title="Определить ваше местоположение"><ymaps class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_geolocation"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__toolbar_right"><ymaps class="ymaps-2-1-79-controls__control_toolbar" style="margin-right: 10px; margin-left: 0px; position: inherit;"><ymaps><ymaps class="ymaps-2-1-79-traffic"><ymaps id="id_166062650754985952615" unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-float-button_traffic_left" style=""><ymaps class="ymaps-2-1-79-traffic__icon ymaps-2-1-79-traffic__icon_icon_off ymaps-2-1-79-float-button-icon"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"><ymaps>Пробки</ymaps></ymaps></ymaps></ymaps><ymaps></ymaps></ymaps><ymaps id="id_166062650754985952616"><ymaps><ymaps class="ymaps-2-1-79-traffic__panel ymaps-2-1-79-popup ymaps-2-1-79-popup_direction_down ymaps-2-1-79-popup_to_bottom ymaps-2-1-79-popup_theme_ffffff ymaps-2-1-79-user-selection-none" unselectable="on" style="width: 270px;"><ymaps class="ymaps-2-1-79-traffic__tail ymaps-2-1-79-popup__tail"></ymaps><ymaps class="ymaps-2-1-79-traffic__panel-content"><ymaps id="id_166062650754985952617"><ymaps><ymaps class="ymaps-2-1-79-traffic__switcher"><ymaps class="ymaps-2-1-79-traffic__switcher-item ymaps-2-1-79-traffic__switcher-item_data_actual ymaps-2-1-79-traffic__switcher-item_selected_yes">Сейчас</ymaps><ymaps class="ymaps-2-1-79-traffic__switcher-item ymaps-2-1-79-traffic__switcher-item_data_archive">Статистика</ymaps></ymaps></ymaps></ymaps><ymaps></ymaps><ymaps></ymaps><ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__control_toolbar" style="margin-right: 10px; margin-left: 0px; position: inherit;"><ymaps><ymaps class="ymaps-2-1-79-listbox ymaps-2-1-79-listbox_opened_no ymaps-2-1-79-listbox_align_right" style="width: 87px;"><ymaps class="ymaps-2-1-79-listbox__button ymaps-2-1-79-_visible-arrow ymaps-2-1-79-user-selection-none" unselectable="on" title=""><ymaps class="ymaps-2-1-79-listbox__button-icon ymaps-2-1-79-_icon_layers"></ymaps><ymaps class="ymaps-2-1-79-listbox__button-text">Слои</ymaps><ymaps class="ymaps-2-1-79-listbox__button-arrow"></ymaps></ymaps><ymaps class="ymaps-2-1-79-listbox__panel ymaps-2-1-79-i-custom-scroll" style="transform: translate3d(0px, 0px, 0px) scale(1, 1);"><ymaps class="ymaps-2-1-79-listbox__list" style="max-height: 999999px;"><ymaps><ymaps><ymaps id="id_166062650754985952605"><ymaps unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_yes"><ymaps class="ymaps-2-1-79-listbox__list-item-text">Схема</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_166062650754985952606"><ymaps unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_no"><ymaps class="ymaps-2-1-79-listbox__list-item-text">Спутник</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_166062650754985952607"><ymaps unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_no"><ymaps class="ymaps-2-1-79-listbox__list-item-text">Гибрид</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__control_toolbar ymaps-2-1-79-user-selection-none" style="margin-right: 10px; margin-left: 0px; position: inherit;" unselectable="on"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text" style="max-width: 28px" title=""><ymaps class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_expand"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__bottom" style="top: 693px;"><ymaps class="ymaps-2-1-79-controls__control" style="margin-right: 0px; margin-left: 0px; position: inherit; inset: auto 10px 30px auto;"><ymaps><ymaps style="display: block;"><ymaps style="display: inline-block; height: 100%; vertical-align: top;"><ymaps id="id_166062650754985952608"><ymaps><ymaps class="ymaps-2-1-79-scaleline" style="width: 74px;"><ymaps class="ymaps-2-1-79-scaleline__left"><ymaps class="ymaps-2-1-79-scaleline__left-border"></ymaps><ymaps class="ymaps-2-1-79-scaleline__left-line"></ymaps></ymaps><ymaps class="ymaps-2-1-79-scaleline__center"><ymaps class="ymaps-2-1-79-scaleline__label">200&nbsp;м</ymaps></ymaps><ymaps class="ymaps-2-1-79-scaleline__right"><ymaps class="ymaps-2-1-79-scaleline__right-border"></ymaps><ymaps class="ymaps-2-1-79-scaleline__right-line"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps style="display: inline-block; width: 10px; height: 0"></ymaps><ymaps style="display: inline-block;"><ymaps id="id_166062650754985952609" unselectable="on" class="ymaps-2-1-79-user-selection-none"><ymaps><ymaps class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text" style="max-width: 28px" title="Измерение расстояний на карте"><ymaps class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_ruler"></ymaps><ymaps class="ymaps-2-1-79-float-button-text"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-controls__control" style="margin-right: 0px; margin-left: 0px; position: inherit; inset: 108px auto auto 10px;"><ymaps><ymaps class="ymaps-2-1-79-zoom" style="height: 150px"><ymaps class="ymaps-2-1-79-zoom__plus ymaps-2-1-79-zoom__button ymaps-2-1-79-float-button ymaps-2-1-79-user-selection-none" unselectable="on"><ymaps class="ymaps-2-1-79-zoom__icon ymaps-2-1-79-float-button-icon"></ymaps></ymaps><ymaps class="ymaps-2-1-79-zoom__minus ymaps-2-1-79-zoom__button ymaps-2-1-79-float-button ymaps-2-1-79-user-selection-none" unselectable="on"><ymaps class="ymaps-2-1-79-zoom__icon ymaps-2-1-79-float-button-icon"></ymaps></ymaps><ymaps class="ymaps-2-1-79-zoom__scale"><ymaps class="ymaps-2-1-79-zoom__runner ymaps-2-1-79-zoom__button ymaps-2-1-79-float-button ymaps-2-1-79-zoom__runner__transition ymaps-2-1-79-touch-action-none ymaps-2-1-79-user-selection-none" unselectable="on" style="top: 39px;"><ymaps class="ymaps-2-1-79-zoom__icon ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_runner"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-79-places-pane" style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 2004;"><ymaps class="ymaps-2-1-79-placemark-overlay ymaps-2-1-79-user-selection-none" unselectable="on" style="z-index: 800000000; height: 0px; width: 0px; position: absolute; left: 305px; top: 347px;"><ymaps><ymaps class="ymaps-2-1-79-islets_circle-dot-icon-with-caption"><ymaps class="ymaps-2-1-79-islets_circle-dot-icon-with-caption__caption-block"><ymaps class="ymaps-2-1-79-islets_icon-caption" style="max-width: 188px;">Локомотивный проезд, 21</ymaps></ymaps><ymaps id="id_166062650754985952620"><ymaps class="ymaps-2-1-79-svg-icon ymaps_https___api_maps_yandex_ru_2_1_79_1436028078833islands_circleDotIcon___ED4543__ED4543_27x27_1660626507778" style="position: absolute; width: 27px; height: 27px; left: -14px; top: -14px;"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></div>

                <script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/watch.js"></script><script>
                    window.onload = function(){
                        setTimeout(function(){
                            $('.contacts-map').append($('<script>', {'src': 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A74094b4cfd0e993c91a566eda0b1f6fb2c913beec41b66a43a01ebc1fab24b63&width=100%&lang=ru_RU&scroll=false', 'type': 'text/javascript'}));
                        }, 3000);
                    }
                </script>
            </div>
        </div>



    </div>
@endsection