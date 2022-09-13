@extends('layouts.mail')

@section('content')
    @include('emails.blocks._head_block',['hLevel' => 1, 'head' => trans('content.sent_resume')])
    @include('emails.blocks._head_block',['hLevel' => 4, 'head' => trans('content.surname').': '.$surname])
    @include('emails.blocks._head_block',['hLevel' => 4, 'head' => trans('content.name').': '.$name])
    @include('emails.blocks._head_block',['hLevel' => 4, 'head' => trans('content.patronymic').': '.$patronymic])
    @include('emails.blocks._head_block',['hLevel' => 4, 'head' => trans('content.city').': '.$city])
    @include('emails.blocks._head_block',['hLevel' => 4, 'head' => trans('content.last_work').': '.($last_work ? $last_work : trans('content.not_specified'))])
    @include('emails.blocks._head_block',['hLevel' => 4, 'head' => trans('content.last_work').': '.($position_held ? : $position_held trans('content.not_specified'))])
    @include('emails.blocks._head_block',['hLevel' => 4, 'head' => trans('content.email').': '.$email])
@endsection