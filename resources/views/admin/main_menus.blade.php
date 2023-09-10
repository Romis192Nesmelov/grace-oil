@extends('layouts.admin')

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('admin_menu.admins') }}</h3>
        </div>
        <div class="panel-body">
            @include('admin.blocks.datatable_block',[
                'items' => $main_menus,
                'columns' => ['ru','en','active'],
                'addMode' => false,
                'editMode' => true,
                'deleteMode' => false,
            ])
        </div>
    </div>
@endsection
