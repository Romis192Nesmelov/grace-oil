@extends('layouts.admin')

@section('content')
    @if (isset($area))
        @include('admin.blocks._modal_delete_block',[
            'modalId' => 'delete-modal',
            'action' => 'delete_dealer',
            'head' => trans('admin.do_you_really_want_delete_this_dealer')
        ])
    @endif

    <div class="panel panel-flat">
        @include('admin.blocks._title_block')
        <div class="panel-body">
            <form class="form-horizontal" action="{{ route('admin.edit_area') }}" method="post">
                {{ csrf_field() }}
                @if (isset($area))
                    @include('admin.blocks.hidden_id_block',['value' => $area->id])
                @endif
                <div class="panel panel-flat">
                    <div class="panel-body">
                        @include('admin.blocks._input_block', [
                            'label' => trans('admin.name_ru'),
                            'name' => 'name_ru',
                            'type' => 'text',
                            'max' => 255,
                            'placeholder' => trans('admin.name_ru'),
                            'value' => isset($area) ? $area->name_ru : ''
                        ])
                        @include('admin.blocks._input_block', [
                            'label' => trans('admin.name_en'),
                            'name' => 'name_en',
                            'type' => 'text',
                            'max' => 255,
                            'placeholder' => trans('admin.name_en'),
                            'value' => isset($area) ? $area->name_en : ''
                        ])
                    </div>
                </div>
                @include('admin.blocks._save_button_block')
            </form>
        </div>
    </div>
    @if (isset($area))
        <div class="panel panel-flat">
            <div class="panel-body">
                @include('admin.blocks.datatable_block',[
                    'items' => $area->allDealers,
                    'columns' => ['town_'.app()->getLocale(), 'name_'.app()->getLocale(), 'active'],
                    'route' => 'dealers',
                    'parentId' => $area->id,
                    'addButtonText' => trans('admin.add_dealers'),
                    'addMode' => true,
                    'editMode' => true,
                    'deleteMode' => true,
                ])
            </div>
        </div>
    @endif
@endsection
