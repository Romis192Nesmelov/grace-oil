@extends('layouts.admin')

@section('content')
    @include('admin.blocks._modal_delete_block',[
        'modalId' => 'delete-modal',
        'action' => 'delete_about_product',
        'head' => trans('admin.do_you_really_want_delete_this_item')
    ])

    <div class="panel panel-flat">
        @include('admin.blocks._title_block')
        <div class="panel-body">
            @include('admin.blocks.datatable_block',[
                'items' => $about_products,
                'columns' => ['image','head_'.app()->getLocale(),'active'],
                'addMode' => false,
                'editMode' => true,
                'deleteMode' => true,
            ])
        </div>
    </div>
@endsection
