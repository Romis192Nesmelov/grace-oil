@extends('layouts.admin')

@section('content')
    @include('admin.blocks._modal_delete_block',[
        'modalId' => 'delete-modal',
        'action' => 'delete_oil_type',
        'head' => trans('admin.do_you_really_want_delete_this_oil_type')
    ])

    <div class="panel panel-flat">
        @include('admin.blocks._title_block')
        <div class="panel-body">
            @include('admin.blocks.datatable_block',[
                'items' => $oil_types,
                'columns' => ['icon','name_'.app()->getLocale(),'active'],
                'addMode' => false,
                'editMode' => true,
                'deleteMode' => true,
            ])
        </div>
    </div>
@endsection
