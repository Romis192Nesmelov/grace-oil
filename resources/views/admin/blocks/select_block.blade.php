@php ob_start(); @endphp
<select name="{{ $name }}" class="select form-control">
    @foreach ($values as $value)
        <option value="{{ $value['id'] }}" {{ (!count($errors) ? $value['id'] == $selected : $value['id'] == old($name)) ? 'selected' : '' }}>{{ $value[$option] }}</option>
    @endforeach
</select>

@include('admin.blocks._incover_block',[
    'name' => $name,
    'required' => isset($required) && $required,
    'error' => count($errors) && $errors->has($name) ? $errors->first($name) : null,
    'icon' => isset($icon) && $icon ? $icon : '',
    'label' => isset($label) && $label ? $label : null,
    'content' => ob_get_clean()
])