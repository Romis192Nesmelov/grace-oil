@extends('layouts.main',['title' => $head])

@section('content')
    @include('blocks._feedback_def_popup_block',[
        'popupId' => 'partner_popup',
        'popupRoute' => 'partner',
        'popupHead' => trans('content.submit_request'),
    ])

    <div class="main internal">
        <div class="container">
            @include('blocks._breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $head }}</h1>
                <p>{{ trans('content.programs_aimed_at_supporting') }}</p>

                @for ($i=0;$i<4;$i++)
                    @include('blocks._partnership_legend_block',['addClass' => ($i ? 'hidden-4col visible-'.$i.'col' : '')])
                    @include('blocks._partnership_column_block', [
                        'head' => $add_content[$i]['name_'.app()->getLocale()],
                        'row1' => $add_content[$i]['about_program_'.app()->getLocale()],
                        'row2' => $add_content[$i]['for_whom_'.app()->getLocale()],
                        'row3' => $add_content[$i]['advantages_'.app()->getLocale()],
                        'row4' => view('blocks._button_type1_block',[
                                        'btnHref' => '#partner_popup',
                                        'btnText' => trans('content.request'),
                                        'addClass' => 'fancybox'
                                    ])->render()
                    ])
                @endfor
            </div>
        </div>
    </div>
@endsection