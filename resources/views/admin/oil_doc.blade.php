@extends('layouts.admin')

@section('content')
    <div class="panel panel-flat">
        @include('admin.blocks._title_block')
        <div class="panel-body">
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('admin.edit_oil_doc') }}" method="post">
                {{ csrf_field() }}
                @include('admin.blocks.hidden_id_block',['value' => $oil_doc->id])
                @include('admin.blocks.hidden_id_block',['hiddenName' => 'return_flag', 'value' => $return_flag])

                <div class="panel panel-flat">
                    <div class="panel-body row">
                        <div class="col-lg-1">
                            <a class="" href="{{ asset(str_replace('public/','',$oil_doc->href)) }}" target="_blank">
                                <i class="icon-file-pdf" style="font-size: 38px;"></i>
                            </a>
                        </div>
                        <div class="col-lg-11">
                            @include('admin.blocks._input_file_block', ['label' => '', 'name' =>  'doc'])
                        </div>
                    </div>
                </div>

                <div class="panel panel-flat">
                    <div class="panel-body">
                        @include('admin.blocks._input_block', [
                            'label' => trans('admin.href'),
                            'name' => 'href',
                            'type' => 'text',
                            'max' => 255,
                            'placeholder' => trans('admin.ru'),
                            'value' => $oil_doc->href
                        ])
                        @include('admin.blocks._input_block', [
                            'label' => trans('admin.name_ru'),
                            'name' => 'name_ru',
                            'type' => 'text',
                            'max' => 255,
                            'placeholder' => trans('admin.name_ru'),
                            'value' => $oil_doc->name_ru
                        ])
                        @include('admin.blocks._input_block', [
                            'label' => trans('admin.name_en'),
                            'name' => 'name_en',
                            'type' => 'text',
                            'max' => 255,
                            'placeholder' => trans('admin.name_en'),
                            'value' => $oil_doc->name_en
                        ])
                    </div>
                </div>
                @include('admin.blocks._save_button_block')
            </form>
        </div>
    </div>
@endsection
