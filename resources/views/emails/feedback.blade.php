@extends('layouts.mail')

@section('content')
    @include('emails._head_block',['hLevel' => 2, 'head' => trans('content.feedback_from', ['name' => $name])])
    @include('emails._head_block',['hLevel' => 2, 'head' => trans('content.feedback_email',['email' => $email])])
    @if ($question)
        <p><b>{{ trans('content.question') }}</b></p>
        <p>{{ $question }}</p>
    @endif
@endsection