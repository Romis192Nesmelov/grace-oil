<div class="inp-wp">
    <input type="text" name="{{ $inputName }}" placeholder="" title="{{ $inputLabel }}" id="{{ $inputId }}" {{ isset($dataType) && $dataType ? 'data-type='.$dataType : '' }} value="{{ isset($value) && !count($errors) ? $value : (Session::has($inputName) ? Session::get($inputName) : old($inputName)) }}">
    <label for="{{ $inputId }}">{{ $inputLabel }}</label>
    @include('blocks._input_error_block')
</div>