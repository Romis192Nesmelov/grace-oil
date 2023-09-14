@extends('layouts.admin')

@section('content')
    <div class="panel panel-flat">
        @include('admin.blocks._title_block')
        <div class="panel-body">
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('admin.edit_about_product') }}" method="post">
                {{ csrf_field() }}
                @include('admin.blocks.hidden_id_block',['value' => $about_product->id])
                <div class="panel panel-flat">
                    <div class="panel-body row">
                        <div class="col-md-4 col-sm-6 col-sm-12">
                            @include('admin.blocks._input_image_block',[
                                'head' => trans('admin.image'),
                                'name' => 'image',
                                'preview' => $about_product->image
                            ])

                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks._checkbox_block', [
                                        'name' => 'active',
                                        'checked' => isset($oil) ? $oil->active : 1,
                                        'label' => trans('admin.active')
                                    ])
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-sm-12">
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.head_ru'),
                                        'name' => 'head_ru',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => trans('admin.head_ru'),
                                        'value' => $about_product->head_ru
                                    ])
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.head_en'),
                                        'name' => 'head_en',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => trans('admin.head_en'),
                                        'value' => $about_product->head_en
                                    ])
                                    @include('admin.blocks._textarea_block',[
                                        'name' => 'text_ru',
                                        'label' => trans('admin.text_ru'),
                                        'value' => $about_product->text_ru
                                    ])
                                    @include('admin.blocks._textarea_block',[
                                        'name' => 'text_en',
                                        'label' => trans('admin.text_en'),
                                        'value' => $about_product->text_en
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
