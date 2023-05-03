@php ob_start(); @endphp
<input
        {{ isset($disabled) && $disabled ? 'disabled=disabled' : '' }}
        {{ isset($icon) && $icon && (!isset($label) || !$label) ? 'style=padding-left:35px' : '' }}
        {{ isset($min) && $min ? 'min='.$min : '' }}
        {{ isset($max) && $max ? 'max='.$max : '' }}
        {{ isset($placeholder) && $placeholder ? 'placeholder='.$placeholder : '' }}
        class="form-control"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ isset($value) && !count($errors) ? $value : (session()->has($name) ? session()->get($name) : old($name)) }}"
>

@include('admin.blocks._incover_block',[
    'name' => $name,
    'required' => isset($required) && $required,
    'error' => count($errors) && $errors->has($name) ? $errors->first($name) : null,
    'icon' => isset($icon) && $icon ? $icon : '',
    'label' => isset($label) && $label ? $label : null,
    'content' => ob_get_clean()
])