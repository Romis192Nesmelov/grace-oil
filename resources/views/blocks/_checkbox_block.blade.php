<div class="check-item {{ isset($addClass) && $addClass ? $addClass : '' }}">
    <label for="{{ $inputId }}">
        <div class="left-pos">
            <input type="checkbox" name="{{ $inputName }}" id="{{ $inputId }}" value="{{ $inputVal }}">
        </div>
        <div class="right-pos">
            <p class="name">{!! $inputLabel !!}</p>
        </div>
        @include('blocks._input_error_block')
    </label>
</div>