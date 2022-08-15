@extends('layouts.main')

@section('content')
    @include('layouts._feedback_def_popup_block',[
        'popupId' => 'partner_popup',
        'popupUri' => 'partner_programs',
        'popupHead' => trans('content.to_make_a_partner'),
    ])

    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
                <p>{{ trans('content.programs_aimed_at_supporting') }}</p>

                <table class="default">
                    <tr>
                        <th>&nbsp;</th>
                        @foreach($data['add_content'] as $program)
                            <th>{{ $program['name_'.App::getLocale()] }}</th>
                        @endforeach
                    </tr>
                    <tr>
                        <td><b>{{ trans('content.about_program') }}</b></td>
                        @foreach($data['add_content'] as $programNName)
                            <td data-label="{{ $program['name_'.App::getLocale()] }}">{{ $program['about_program_'.App::getLocale()] }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td><b>{{ trans('content.for_whom') }}</b></td>
                        @foreach($data['add_content'] as $programNName)
                            <td data-label="{{ $program['name_'.App::getLocale()] }}">{{ $program['for_whom_'.App::getLocale()] }}</td>
                        @endforeach
                    </tr>
                    <tr class="vertical_top">
                        <td><b>{{ trans('content.advantages') }}</b></td>
                        @foreach($data['add_content'] as $programNName)
                            <td data-label="{{ $program['name_'.App::getLocale()] }}">{!! $program['advantages_'.App::getLocale()] !!}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td><b>{!! trans('content.become_a_member') !!}</b></td>

                        @foreach($data['add_content'] as $programNName)
                            <td data-label="{{ $program['name_'.App::getLocale()] }}">
                                @include('layouts._button_type1_block',[
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