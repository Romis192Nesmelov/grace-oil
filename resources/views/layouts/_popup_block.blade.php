<div class="hidden">
    <div id="{{ $popupId }}" class="base-form popup">
        <form action="{{ url('/'.$popupUri) }}" method="post" class="sendLead useAjax">
            {{ csrf_field() }}
            <span class="title-base-big">{{ $popupHead }}</span>
            <div class="form-body">
                {!! $popupContent !!}
                @include('layouts._agreement_block')
                @include('layouts._submit_button_block')
            </div>
        </form>
    </div>
</div>