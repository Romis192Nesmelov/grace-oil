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
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A8adb0c939404bed3acee0dccae7ef8f1946a66246bc2b64c6732bf2cccf6b207&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection