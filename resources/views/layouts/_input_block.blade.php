<div class="inp-wp">
    <input type="text" name="{{ $inputName }}" placeholder="" title="{{ $inputLabel }}" id="{{ $inputId }}">
    <label for="{{ $inputId }}">{{ $inputLabel }}</label>
    @include('layouts._input_error_block')
</div>