@extends('layouts.admin')

@section('content')
    <div class="panel panel-flat">
        @include('admin.blocks._title_block')
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
