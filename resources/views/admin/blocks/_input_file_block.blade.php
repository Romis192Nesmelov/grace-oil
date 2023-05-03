@php ob_start(); @endphp
<input {{ isset($inputId) ? 'id='.$inputId : '' }} type="file" name="{{ $name }}" class="file-styled">

@include('admin.blocks._incover_block',[
    'name' => $name,
    'required' => isset($required) && $required,
    'error' => count($errors) && $errors->has($name) ? $errors->first($name) : null,
    'label' => isset($label) && $label ? $label : null,
    'content' => ob_get_clean()
])