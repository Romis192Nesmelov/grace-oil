@include('blocks._input_block',[
                'inputName' => 'name',
                'inputId' => 'first_name',
                'inputLabel' => trans('content.name').'*',
                'useAjax' => false,
            ])

@include('blocks._input_block',[
    'inputName' => 'company_name',
    'inputId' => 'company_name',
    'inputLabel' => trans('content.your_company_name'),
    'useAjax' => false,
])

@include('blocks._input_block',[
    'inputName' => 'phone',
    'dataType' => 'phone',
    'inputId' => 'phone',
    'inputLabel' => trans('content.phone').'*',
    'useAjax' => false,
])

@include('blocks._input_block',[
    'inputName' => 'email',
    'inputId' => 'email',
    'inputLabel' => trans('content.email').'*',
    'useAjax' => false,
])

@include('blocks._textarea_block',[
    'taName' => 'my_message',
    'taId' => 'my_message',
    'taLabel' => trans('content.your_message'),
    'useAjax' => false,
])