@extends('layouts.main',['title' => $head])

@section('content')
    @include('blocks._feedback_def_popup_block',[
        'popupId' => 'partner_popup',
        'popupUri' => 'partner_programs',
        'popupHead' => trans('content.submit_request'),
    ])

    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $head }}</h1>
                <p>{{ trans('content.programs_aimed_at_supporting') }}</p>

                <table class="default">
                    <tr>
                        <th>&nbsp;</th>
                        @foreach($add_content as $program)
                            <th>{{ $program['name_'.app()->getLocale()] }}</th>
                        @endforeach
                    </tr>
                    <tr>
                        <td><b>{{ trans('content.about_program') }}</b></td>
                        @foreach($add_content as $programNName)
                            <td data-label="{{ $program['name_'.app()->getLocale()] }}">{{ $program['about_program_'.app()->getLocale()] }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td><b>{{ trans('content.for_whom') }}</b></td>
                        @foreach($add_content as $programNName)
                            <td data-label="{{ $program['name_'.app()->getLocale()] }}">{{ $program['for_whom_'.app()->getLocale()] }}</td>
                        @endforeach
                    </tr>
                    <tr class="vertical_top">
                        <td><b>{{ trans('content.advantages') }}</b></td>
                        @foreach($add_content as $programNName)
                            <td data-label="{{ $program['name_'.app()->getLocale()] }}">{!! $program['advantages_'.app()->getLocale()] !!}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td><b>{!! trans('content.become_a_member') !!}</b></td>

                        @foreach($add_content as $programNName)
                            <td data-label="{{ $program['name_'.app()->getLocale()] }}">
                                @include('blocks._button_type1_block',[
                                    'btnHref' => '#partner_popup',
                                    'btnText' => trans('content.request'),
                                    'addClass' => 'fancybox'
                                ])
                            </td>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection