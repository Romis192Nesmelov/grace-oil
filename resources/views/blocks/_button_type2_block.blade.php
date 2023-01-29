<div class="btn_more_wrap {{ isset($addClassWrap) && $addClassWrap ? $addClassWrap : '' }}">
    <a href="{{ $btnHref }}" class="def-btn empty {{ isset($addClassButton) && $addClassButton ? $addClassButton : '' }}" {{ isset($btnBlank) && $btnBlank ? 'target=_blank' : '' }}>
        {{ $btnText }}
        @if (isset($mpIcon) && $mpIcon)
            <img src="{{ $mpIcon }}" />
        @endif
    </a>
</div>