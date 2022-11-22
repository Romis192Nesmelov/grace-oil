<div class="base-form contacts-form-map dealer-form">
    <form action="{{ url('/feedback') }}" method="post" class="sendLead">
        {{ csrf_field() }}
        <span class="title-base">{{ $formText }}</span>
        <div class="form-body">
            @include('blocks._feedback_fields_block')
            @include('blocks._agreement_block',['useAjax' => false])
            @include('blocks._submit_button_block', ['btnText' => trans('content.submit_your_application')])
        </div>
    </form>
</div>