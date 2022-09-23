@extends('layouts.mail')

@section('content')
    @include('emails.blocks._head_block',['hLevel' => 1, 'head' => trans('content.sent_offer')])
    @include('emails.blocks._head_block',['hLevel' => 1, 'head' => trans('content.feedback_company_name',['company_name' => $company_name])])
    @include('emails.blocks._head_block',['hLevel' => 4, 'head' => trans('content.name').': '.$name])
    @include('emails.blocks._head_block',['hLevel' => 4, 'head' => trans('content.email').': '.$email])
@endsection