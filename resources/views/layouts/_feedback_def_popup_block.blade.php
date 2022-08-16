<?php ob_start(); ?>
@include('layouts._input_block',[
    'inputName' => 'organization_name',
    'inputId' => 'organization_name',
    'inputLabel' => trans('content.name_of_organization').'*',
    'useAjax' => true,
])
@include('layouts._input_block',[
    'inputName' => 'email',
    'inputId' => 'email',
    'inputLabel' => trans('content.email').'*',
    'useAjax' => true,
])
@include('layouts._input_block',[
    'inputName' => 'phone',
    'dataType' => 'phone',
    'inputId' => 'phone',
    'inputLabel' => trans('content.phone').'*',
    'useAjax' => true,
])
@include('layouts._textarea_block',[
    'taName' => 'field_of_activity',
    'taId' => 'field_of_activity',
    'taLabel' => trans('content.field_of_activity'),
    'useAjax' => true,
])

@include('layouts._popup_block',[
    'popupContent' => ob_get_clean(),
    'useAjax' => true
])