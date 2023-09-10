@extends('layouts.admin')

@section('content')
    <div class="panel panel-flat">
        @include('admin.blocks._title_block')
        <div class="panel-body">
            <form class="form-horizontal" action="{{ route('admin.edit_sub_menu') }}" method="post">
                {{ csrf_field() }}
                @include('admin.blocks.hidden_id_block',['value' => $sub_menu->id])
                @include('admin.blocks.hidden_id_block',['hiddenName' => 'menu_id', 'value' => $sub_menu->menu_id])
                <div class="panel panel-flat">
                    <div class="panel-body">
                        @include('admin.blocks._input_block', [
                            'label' => trans('admin.ru'),
                            'name' => 'ru',
                            'type' => 'text',
                            'max' => 255,
                            'placeholder' => trans('admin.ru'),
                            'value' => $sub_menu->ru
                        ])
                        @include('admin.blocks._input_block', [
                            'label' => trans('admin.en'),
                            'name' => 'en',
                            'type' => 'text',
                            'max' => 255,
                            'placeholder' => trans('admin.en'),
                            'value' => $sub_menu->en
                        ])
                        <div class="row">
                            @include('admin.blocks._checkbox_block', [
                                'name' => 'active',
                                'checked' => $sub_menu->active,
                                'label' => trans('admin.active')
                            ])
                        </div>
                    </div>
                </div>
                @include('admin.blocks._save_button_block')
            </form>
        </div>
    </div>
@endsection
