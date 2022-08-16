@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ trans('footer.how_to_become_a_dealer') }}</h1>
                <p>{{ trans('content.how_to_become_a_dealer',['phone' => $settings['phone'], 'address' => $settings['address_'.App::getLocale()]]) }}</p>
                @include('_request_form_block',['formText' => trans('content.want_to_be_our_dealer')])
            </div>
        </div>
    </div>
@endsection