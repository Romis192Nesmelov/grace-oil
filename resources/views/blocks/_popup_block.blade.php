<div class="hidden">
    <div id="{{ $popupId }}" class="base-form popup">
        <form action="{{ route($popupRoute) }}" method="post" class="sendLead useAjax">
            {{ csrf_field() }}
            <span class="title-base-big">{{ $popupHead }}</span>
            <div class="form-body">
                {!! $popupContent !!}
                @include('blocks._agreement_block')
                @include('blocks._submit_button_block')
            </div>
        </form>
    </div>
</div>