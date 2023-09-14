@extends('layouts.admin')

@section('content')
    @include('admin.blocks._modal_delete_block',[
        'modalId' => 'delete-modal',
        'action' => 'delete_oil',
        'head' => trans('admin.do_you_really_want_delete_this_oil')
    ])

    <div class="panel panel-flat">
        @include('admin.blocks._title_block')
        <div class="panel-body">
            @include('admin.blocks.datatable_block',[
                'items' => $oils,
                'columns' => ['image','name_'.app()->getLocale(),'active'],
                'addMode' => true,
                'editMode' => true,
                'deleteMode' => true,
            ])
        </div>
    </div>
@endsection
