@extends('layouts.mail')

@section('content')
    @include('emails.blocks._head_block',['hLevel' => 1, 'head' => $mailTitle])
    @include('emails.blocks._head_block',['hLevel' => 3, 'head' => trans('content.name_of_organization').': '.$organization_name])
    @include('emails.blocks._head_block',['hLevel' => 3, 'head' => 'e-mail: '.$email])
    @include('emails.blocks._head_block',['hLevel' => 3, 'head' => trans('content.phone').': '.$phone])
    @if ($field_of_activity)
        <p><b>{{ trans('content.field_of_activity') }}</b></p>
        <p>{{ $field_of_activity }}</p>
    @endif
@endsection