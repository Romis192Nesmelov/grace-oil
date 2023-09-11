@extends('layouts.admin')

@section('content')
    <div class="panel panel-flat">
        @include('admin.blocks._title_block')
        <div class="panel-body">
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('admin.edit_news') }}" method="post">
                {{ csrf_field() }}
                @if (isset($new))
                    @include('admin.blocks.hidden_id_block',['value' => $new->id])
                @endif
                <div class="panel panel-flat">
                    <div class="panel-body row">
                        <div class="col-md-4 col-sm-6 col-sm-12">
                            @include('admin.blocks._input_image_block',[
                                'head' => trans('admin.image'),
                                'name' => 'image',
                                'preview' => isset($new) ? $new->image : ''
                            ])
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks.date_block', [
                                        'label' => trans('admin.news_date'),
                                        'name' => 'time',
                                        'value' => isset($new) ? $new->time : time()
                                    ])
                                </div>
                            </div>
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks._checkbox_block', [
                                        'name' => 'active',
                                        'checked' => isset($new) ? $new->active : 1,
                                        'label' => trans('admin.active')
                                    ])
                                </div>
                            </div>
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks.select_multiple_block',[
                                        'name' => 'similar_ids',
                                        'label' => trans('admin.similar_news'),
                                        'values' => $news,
                                        'selectedIds' => $news_in,
                                        'option' => 'head_'.app()->getLocale()
                                    ])
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-sm-12">
                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.head_ru'),
                                        'name' => 'head_ru',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => trans('admin.head_ru'),
                                        'value' => isset($new) ? $new->head_ru : ''
                                    ])
                                    @include('admin.blocks._input_block', [
                                        'label' => trans('admin.head_en'),
                                        'name' => 'head_en',
                                        'type' => 'text',
                                        'max' => 255,
                                        'placeholder' => trans('admin.head_en'),
                                        'value' => isset($new) ? $new->head_en : ''
                                    ])
                                    @include('admin.blocks._textarea_block',[
                                        'name' => 'text_short_ru',
                                        'label' => trans('admin.text_short_ru'),
                                        'simple' => true,
                                        'value' => isset($new) ? $new->text_short_ru : ''
                                    ])
                                    @include('admin.blocks._textarea_block',[
                                        'name' => 'text_short_en',
                                        'label' => trans('admin.text_short_en'),
                                        'simple' => true,
                                        'value' => isset($new) ? $new->text_short_en : ''
                                    ])
                                    @include('admin.blocks._textarea_block',[
                                        'name' => 'text_full_ru',
                                        'label' => trans('admin.text_full_ru'),
                                        'value' => isset($new) ? $new->text_full_ru : ''
                                    ])
                                    @include('admin.blocks._textarea_block',[
                                        'name' => 'text_full_en',
                                        'label' => trans('admin.text_full_en'),
                                        'value' => isset($new) ? $new->text_full_en : ''
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
