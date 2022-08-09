@if (count($errors) && $errors->has($name))
    <span class="error_text">{{ $errors->first($inputName) }}</span>
@endif