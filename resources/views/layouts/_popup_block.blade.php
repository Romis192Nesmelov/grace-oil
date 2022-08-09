<div class="hidden">
    <div id="{{ $popupId }}" class="base-form popup">
        <form action="{{ url('/'.$popupUri) }}" method="post" class="sendLead">
            {{ csrf_field() }}
            <span class="title-base-big">{{ $popupHead }}</span>
            <div class="form-body">
                {!! $popupContent !!}
                @include('layouts._agreement_block')
                <button class="def-btn" type="submit">{{ trans('content.send') }}</button>
            </div>
        </form>
    </div>
</div>