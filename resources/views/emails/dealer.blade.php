@extends('layouts.mail')

@section('content')
    @include('emails.blocks._head_block',['hLevel' => 1, 'head' => trans('content.application_to_become_a_dealer')])
    @include('emails.blocks._head_block',['hLevel' => 4, 'head' => trans('content.message_from',['from' => $name])])
    @include('emails.blocks._head_block',['hLevel' => 4, 'head' => trans('content.feedback_email',['email' => $email])])
    @include('emails.blocks._head_block',['hLevel' => 4, 'head' => trans('content.feedback_phone',['phone' => $phone])])
    @include('emails.blocks._head_block',['hLevel' => 4, 'head' => trans('content.feedback_company_name', ['company_name' => $company_name])])
    @if ($my_message)
        <p><b>{{ trans('content.message') }}</b></p>
        <p>{{ $my_message }}</p>
    @endif
@endsection