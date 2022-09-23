<div class="base-form contacts-form-map dealer-form">
    <form action="{{ url('/become_dealer') }}" method="post" class="sendLead">
        {{ csrf_field() }}
        <span class="title-base">{{ $formText }}</span>

        <div class="form-body">
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
            @include('blocks._agreement_block',['useAjax' => false])
            @include('blocks._submit_button_block', ['btnText' => trans('content.submit_your_application')])
        </div>
    </form>
</div>