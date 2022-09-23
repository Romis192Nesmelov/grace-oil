@extends('layouts.main',['title' => trans('footer.how_to_become_a_dealer')])

@section('content')
    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ trans('footer.how_to_become_a_dealer') }}</h1>
                <p>{{ trans('content.how_to_become_a_dealer',['phone' => $settings['phone'], 'address' => $settings['address_'.app()->getLocale()]]) }}</p>
                @include('blocks._request_form_block',['formText' => trans('content.want_to_be_our_dealer')])
            </div>
        </div>
    </div>
@endsection