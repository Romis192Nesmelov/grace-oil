@extends('layouts.mail')

@section('content')
    @include('emails.blocks._head_block',['hLevel' => 1, 'head' => trans('content.application_sent')])
    @include('emails.blocks._head_block',['hLevel' => 5, 'head' => trans('content.message_from',['from' => $name])])
    @include('emails.blocks._head_block',['hLevel' => 5, 'head' => trans('content.feedback_email',['email' => $email])])
    @include('emails.blocks._head_block',['hLevel' => 5, 'head' => trans('content.feedback_phone',['phone' => $phone])])
    @if ($question)
        <p><b>{{ trans('content.question') }}</b></p>
        <p>{{ $question }}</p>
    @endif
@endsection