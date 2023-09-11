@extends('layouts.admin')

@section('content')
    @include('admin.blocks._modal_delete_block',[
        'modalId' => 'delete-modal',
        'action' => 'delete_user',
        'head' => trans('admin.do_you_really_want_delete_this_user')
    ])

    <div class="panel panel-flat">
        @include('admin.blocks._title_block')
        <div class="panel-body">
            @include('admin.blocks.datatable_block',[
                'items' => $users,
                'columns' => ['email','created_at','updated_at'],
                'addMode' => true,
                'editMode' => true,
                'deleteMode' => true,
            ])
        </div>
    </div>
@endsection
