<?php ob_start(); ?>
@include('layouts._input_block',[
    'inputName' => 'name',
    'inputId' => 'firstName',
    'inputLabel' => trans('content.name').'*',
    'useAjax' => true,
])
@include('layouts._input_block',[
    'inputName' => 'email',
    'inputId' => 'email',
    'inputLabel' => trans('content.email').'*',
    'useAjax' => true,
])
@include('layouts._textarea_block',[
    'taName' => 'question',
    'taId' => 'question',
    'taLabel' => trans('content.your_question'),
    'useAjax' => true,
])

@include('layouts._popup_block',[
    'popupContent' => ob_get_clean(),
    'useAjax' => true
])