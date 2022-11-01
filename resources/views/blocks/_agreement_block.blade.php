<div class="confid">
    <div class="left-pos">
        <input name="i_agree" type="checkbox" checked focused>
    </div>
    <div class="right-pos">
        <p>{{ trans('content.i_agree') }} <a href="{{ url('/terms-of-use') }}">{{ trans('content.user_agreement') }}</a>.</p>
    </div>
    @include('blocks._input_error_block',[
        'inputName' => 'i_agree'
    ])
</div>