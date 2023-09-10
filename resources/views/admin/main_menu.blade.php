@extends('layouts.admin')

@section('content')
    <div class="panel panel-flat">
        @include('admin.blocks._title_block')
        <div class="panel-body">
            <form class="form-horizontal" action="{{ route('admin.edit_menu') }}" method="post">
                {{ csrf_field() }}
                @include('admin.blocks.hidden_id_block',['value' => $main_menu->id])
                <div class="panel panel-flat">
                    <div class="panel-body">
                        @include('admin.blocks._input_block', [
                            'label' => trans('admin.ru'),
                            'name' => 'ru',
                            'type' => 'text',
                            'max' => 255,
                            'placeholder' => trans('admin.ru'),
                            'value' => $main_menu->ru
                        ])
                        @include('admin.blocks._input_block', [
                            'label' => trans('admin.en'),
                            'name' => 'en',
                            'type' => 'text',
                            'max' => 255,
                            'placeholder' => trans('admin.en'),
                            'value' => $main_menu->en
                        ])
                        <div class="row">
                            @include('admin.blocks._checkbox_block', [
                                'name' => 'active',
                                'checked' => $main_menu->active,
                                'label' => trans('admin.active')
                            ])
                        </div>
                    </div>
                </div>
                @include('admin.blocks._save_button_block')
            </form>
        </div>
        <div class="panel panel-flat">
            <div class="panel-body">
                <div class="panel-heading">
                    <h4 class="panel-title">{{ trans('admin.sub_menu') }}</h4>
                </div>
                <div class="panel panel-flat">
                    <div class="panel-body">
                        @include('admin.blocks.datatable_block',[
                            'items' => $main_menu->subMenuAll,
                            'columns' => ['ru','en','active'],
                            'route' => 'sub_menu',
                            'parentId' => $main_menu->id,
                            'addMode' => false,
                            'editMode' => true,
                            'deleteMode' => false,
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
