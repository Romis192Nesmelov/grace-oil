@extends('layouts.main')

@section('content')
    <div class="main internal">
        <div class="container">
            @include('_breadcrumbs_block')
            <div class="text_edit page_title">
                <h1>{{ $data['head'] }}</h1>
                <p>{{ trans('content.here_you_can_find_marketing_materials') }}</p>

                <div class="panel-download">
                    <div class="panel-heading">{{ trans('content.catalogs_and_brochures') }}</div>
                    <div class="panel-collapse collapse in">
                        <ul class="list-group">
                            @foreach($data['add_content'] as $brochure)
                                <li class="list-group-item">
                                    <div class="description-files">{{ $brochure['description_'.App::getLocale()] }}</div>
                                    <div class="buttons">
                                        <a href="{{ asset($brochure->link) }}" target="_blank"><i class="material-icons">menu_book</i></a>
                                        <a href="{{ asset($brochure->link) }}" download="" title="5.53 МБ"><i class="material-icons">cloud_download</i></a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection