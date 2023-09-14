@extends('layouts.admin')

@section('content')
    <div class="panel panel-flat">
        @include('admin.blocks._title_block')
        <div class="panel-body">
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('admin.edit_oil') }}" method="post">
                {{ csrf_field() }}
                @if (isset($oil))
                    @include('admin.blocks.hidden_id_block',['value' => $oil->id])
                @endif
                <div class="panel panel-flat">
                    <div class="panel-body row">
                        <div class="col-md-4 col-sm-6 col-sm-12">
                            @include('admin.blocks._input_image_block',[
                                'head' => trans('admin.image'),
                                'name' => 'image',
                                'preview' => isset($oil) ? $oil->image : ''
                            ])
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks.select_block',[
                                        'name' => 'oil_type_id',
                                        'label' => trans('admin.oil_type'),
                                        'values' => $oil_types,
                                        'selected' => isset($oil) ? $oil->oil_type_id : (request()->has('parent_id') ? request()->input('parent_id') : 1),
                                        'option' => 'name_'.app()->getLocale()
                                    ])
                                </div>
                                <div class="panel-body">
                                    @include('admin.blocks.select_block',[
                                        'name' => 'viscosity_grade_id',
                                        'label' => trans('admin.viscosity'),
                                        'values' => $viscosity,
                                        'selected' => isset($oil) ? $oil->viscosity_grade_id : 1,
                                        'option' => 'name'
                                    ])
                                </div>
                                <div class="panel-body">
                                    @include('admin.blocks.select_block',[
                                        'name' => 'subsection_id',
                                        'label' => trans('admin.subsection'),
                                        'values' => $subsections,
                                        'selected' => isset($oil) ? $oil->subsection_id : 1,
                                        'option' => 'name_'.app()->getLocale()
                                    ])
                                </div>
                            </div>
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks.radio_button_block',[
                                        'values' => [
                                            ['val' => 0, 'descript' => trans('content.l')],
                                            ['val' => 1, 'descript' => trans('content.kg')]
                                        ],
                                        'name' => 'units',
                                        'activeValue' => isset($oil) ? $oil->units : 0
                                    ])
                                </div>
                            </div>
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks._checkbox_block', [
                                        'name' => 'active',
                                        'checked' => isset($oil) ? $oil->active : 1,
                                        'label' => trans('admin.active')
                                    ])
                                </div>
                            </div>
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks.select_multiple_block',[
                                        'name' => 'tolerance_id',
                                        'label' => trans('content.tolerances_and_compliances'),
                                        'values' => $tolerances,
                                        'selectedIds' => $tolerances_in,
                                        'option' => 'name'
                                    ])
                                </div>
                            </div>
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks.select_multiple_block',[
                                        'name' => 'engine_type_id',
                                        'label' => trans('content.engine_type'),
                                        'values' => $engine_types,
                                        'selectedIds' => $engine_types_in,
                                        'option' => 'name_'.app()->getLocale()
                                    ])
                                </div>
                            </div>
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks.select_multiple_block',[
                                        'name' => 'industry_solution_id',
                                        'label' => trans('content.industry_solution'),
                                        'values' => $solutions,
                                        'selectedIds' => $solutions_in,
                                        'option' => 'name_'.app()->getLocale()
                                    ])
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-sm-12">
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.name_ru'),
                                        'name' => 'name_ru',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => trans('admin.name_ru'),
                                        'value' => isset($oil) ? $oil->name_ru : ''
                                    ])
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.name_en'),
                                        'name' => 'name_en',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => trans('admin.name_en'),
                                        'value' => isset($oil) ? $oil->name_en : ''
                                    ])
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.head_ru'),
                                        'name' => 'head_ru',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => trans('admin.head_ru'),
                                        'value' => isset($oil) ? $oil->head_ru : ''
                                    ])
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.head_en'),
                                        'name' => 'head_en',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => trans('admin.head_en'),
                                        'value' => isset($oil) ? $oil->head_en : ''
                                    ])
                                    @include('admin.blocks._textarea_block',[
                                        'name' => 'description_ru',
                                        'label' => trans('admin.description_ru'),
                                        'value' => isset($oil) ? $oil->description_ru : ''
                                    ])
                                    @include('admin.blocks._textarea_block',[
                                        'name' => 'description_en',
                                        'label' => trans('admin.description_en'),
                                        'value' => isset($oil) ? $oil->description_en : ''
                                    ])
                                    @include('admin.blocks._textarea_block',[
                                        'name' => 'application_area_ru',
                                        'label' => trans('admin.application_area_ru'),
                                        'value' => isset($oil) ? $oil->application_area_ru : ''
                                    ])
                                    @include('admin.blocks._textarea_block',[
                                        'name' => 'application_area_en',
                                        'label' => trans('admin.application_area_en'),
                                        'value' => isset($oil) ? $oil->application_area_en : ''
                                    ])

                                    @include('admin.blocks._textarea_block',[
                                        'name' => 'advantages_ru',
                                        'label' => trans('admin.advantages_ru'),
                                        'value' => isset($oil) ? $oil->advantages_ru : ''
                                    ])
                                    @include('admin.blocks._textarea_block',[
                                        'name' => 'advantages_en',
                                        'label' => trans('admin.advantages_en'),
                                        'value' => isset($oil) ? $oil->advantages_en : ''
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
