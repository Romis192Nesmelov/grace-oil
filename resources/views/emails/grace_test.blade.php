@extends('layouts.mail')

@section('content')
    @include('emails._head_block',['hLevel' => 1, 'head' => trans('content.test_application')])
    @include('emails._head_block',['hLevel' => 3, 'head' => trans('content.feedback_email',['email' => $email])])
    @include('emails._head_block',['hLevel' => 3, 'head' => trans('content.feedback_phone',['phone' => $phone])])

    <p>{!! '<b>'.trans('content.purpose_of').':</b> ' .$purpose_of !!}</p>
    <p>{!! '<b>'.trans('content.equipment').':</b> ' .$equipment !!}</p>
    <p>{!! '<b>'.trans('content.competitor_product').':</b> ' .$competitor_product !!}</p>
    <p>{!! '<b>'.trans('content.grace_product').':</b> ' .$grace_product !!}</p>
    <p>{!! '<b>'.trans('content.number_of_samples').':</b> ' .$number_of_samples !!}</p>
    <p>{!! '<b>'.trans('content.expected_effect').':</b> ' .$expected_effect !!}</p>
    <p>{!! '<b>'.trans('content.partner').':</b> ' .$partner !!}</p>
@endsection