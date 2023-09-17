@extends('layouts.admin')

@section('content')
    <div class="panel panel-flat">
        @include('admin.blocks._title_block')
        <div class="panel-body">
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('admin.edit_oil_tare') }}" method="post">
                {{ csrf_field() }}
                @if ($oil_tare)
                    @include('admin.blocks.hidden_id_block',['value' => $oil_tare->id])
                @endif
                @include('admin.blocks.hidden_id_block',['hiddenName' => 'return_flag', 'value' => $return_flag])
                <div class="panel panel-flat">
                    <div class="panel-body row">
                        <div class="col-md-3 col-sm-6 col-sm-12">
                            @include('admin.blocks._input_image_block',[
                                'head' => trans('admin.image'),
                                'name' => 'image',
                                'preview' => isset($oil_tare) ? $oil_tare->image : ''
                            ])
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks.select_block',[
                                        'name' => 'oil_id',
                                        'label' => trans('admin.oil'),
                                        'values' => $oils,
                                        'selected' => isset($oil_tare) ? $oil_tare->oil_id : (request()->has('parent_id') ? request()->input('parent_id') : 1),
                                        'option' => 'name_'.app()->getLocale()
                                    ])
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-6 col-sm-12">
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.value'),
                                        'name' => 'value',
                                        'type' => 'number',
                                        'max' => 255,
                                        'placeholder' => trans('admin.value'),
                                        'value' => isset($oil_tare) ? $oil_tare->value : 1
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
