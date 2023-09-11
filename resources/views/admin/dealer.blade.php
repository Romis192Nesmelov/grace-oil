@extends('layouts.admin')

@section('content')
    <div class="panel panel-flat">
        @include('admin.blocks._title_block')
        <div class="panel-body">
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('admin.edit_dealer') }}" method="post">
                {{ csrf_field() }}
                @if (isset($dealer))
                    @include('admin.blocks.hidden_id_block',['value' => $dealer->id])
                @endif
                <div class="panel panel-flat">
                    <div class="panel-body row">
                        <div class="col-md-3 col-sm-6 col-sm-12">
{{--                            @include('admin.blocks._input_image_block',[--}}
{{--                                'head' => trans('admin.image'),--}}
{{--                                'name' => 'image',--}}
{{--                                'preview' => isset($dealer) ? $dealer->image : ''--}}
{{--                            ])--}}
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks.select_block',[
                                        'name' => 'dealers_area_id',
                                        'label' => trans('admin.dealer_area'),
                                        'values' => $areas,
                                        'selected' => isset($dealer) ? $dealer->dealers_area_id : 1,
                                        'option' => 'name_'.app()->getLocale()
                                    ])
                                </div>
                            </div>
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks._checkbox_block', [
                                        'name' => 'active',
                                        'checked' => isset($dealer) ? $dealer->active : 1,
                                        'label' => trans('admin.active')
                                    ])
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-6 col-sm-12">
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.town_ru'),
                                        'name' => 'town_ru',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => trans('admin.town_ru'),
                                        'value' => isset($dealer) ? $dealer->town_ru : ''
                                    ])
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.town_en'),
                                        'name' => 'town_en',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => trans('admin.town_en'),
                                        'value' => isset($dealer) ? $dealer->town_en : ''
                                    ])
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.name_ru'),
                                        'name' => 'name_ru',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => trans('admin.name_ru'),
                                        'value' => isset($dealer) ? $dealer->name_ru : ''
                                    ])
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.name_en'),
                                        'name' => 'name_en',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => trans('admin.name_en'),
                                        'value' => isset($dealer) ? $dealer->name_en : ''
                                    ])
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.phone'),
                                        'name' => 'phone',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => trans('admin.phone'),
                                        'value' => isset($dealer) ? $dealer->phone : ''
                                    ])
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.phone'),
                                        'name' => 'email',
                                        'type' => 'email',
                                        'max' => 255,
                                        'placeholder' => trans('admin.email'),
                                        'value' => isset($dealer) ? $dealer->email : ''
                                    ])
                                    @include('admin.blocks._input_block', [
                                        'label' => 'URL',
                                        'name' => 'url',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => 'URL',
                                        'value' => isset($dealer) ? $dealer->url : ''
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
