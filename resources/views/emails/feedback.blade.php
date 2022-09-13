@extends('layouts.mail')

@section('content')
    @include('emails.blocks._head_block',['hLevel' => 1, 'head' => $mailTitle])
    @include('emails.blocks._head_block',['hLevel' => 3, 'head' => trans('content.feedback_from', ['name' => $name])])
    @include('emails.blocks._head_block',['hLevel' => 3, 'head' => trans('content.feedback_email',['email' => $email])])
    @if ($question)
        <p><b>{{ trans('content.question') }}</b></p>
        <p>{{ $question }}</p>
    @endif
@endsection