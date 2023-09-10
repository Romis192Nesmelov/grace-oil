@php ob_start(); @endphp
<textarea class="form-control {{ isset($simple) && $simple ? 'simple' : '' }}" name="{{ $name }}" {{ isset($disabled) && $disabled ? 'disabled=disabled' : '' }}>{{ count($errors) ? old($name) : (isset($value) ? $value : '') }}</textarea>

@include('admin.blocks._incover_block',[
    'name' => $name,
    'required' => isset($required) && $required,
    'error' => count($errors) && $errors->has($name) ? $errors->first($name) : null,
    'icon' => isset($icon) && $icon ? $icon : '',
    'label' => isset($label) && $label ? $label : null,
    'content' => ob_get_clean()
])

@if (!isset($simple) || !$simple)
    <script>
        var editor = CKEDITOR.replace('{{ $name }}', {
            height: '{{ isset($height) ? $height.'px' : '200px' }}'
        });
    </script>
@endif
