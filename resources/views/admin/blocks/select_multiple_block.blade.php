@php ob_start(); @endphp
<select multiple="multiple" name="{{ $name }}[]" class="select form-control">
    @foreach ($values as $value)
        <option value="{{ $value->id }}" {{ in_array($value->id, $selectedIds) ? 'selected=selected' : '' }}>{{ $value[$option] }}</option>
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