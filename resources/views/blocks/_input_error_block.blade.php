@if ((count($errors) && $errors->has($inputName)) || (isset($useAjax) && $useAjax))
    <span class="error_text input-{{ $inputName }}">{{ count($errors) ? $errors->first($inputName) : '' }}</span>
@endif