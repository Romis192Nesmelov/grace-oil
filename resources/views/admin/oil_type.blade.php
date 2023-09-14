@extends('layouts.admin')

@section('content')
    <div class="panel panel-flat">
        @include('admin.blocks._title_block')
        <div class="panel-body">
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('admin.edit_oil_type') }}" method="post">
                {{ csrf_field() }}
                @include('admin.blocks.hidden_id_block',['value' => $oil_type->id])
                <div class="panel panel-flat">
                    <div class="panel-body row">
                        <div class="col-md-2 col-sm-3 col-sm-12">
                            @include('admin.blocks._input_image_block',[
                                'name' => 'icon',
                                'preview' => $oil_type->icon
                            ])
                        </div>
                        <div class="col-md-10 col-sm-9 col-sm-12">
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.name_ru'),
                                        'name' => 'name_ru',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => trans('admin.name_ru'),
                                        'value' => $oil_type->name_ru
                                    ])
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.name_en'),
                                        'name' => 'name_en',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => trans('admin.name_en'),
                                        'value' => $oil_type->name_en
                                    ])
                                    @include('admin.blocks._checkbox_block', [
                                        'name' => 'active',
                                        'checked' => $oil_type->active,
                                        'label' => trans('admin.active')
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.blocks._save_button_block')
            </form>
        </div>
    </div>
@endsection
