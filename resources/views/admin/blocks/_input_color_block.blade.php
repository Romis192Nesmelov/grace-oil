@php ob_start(); @endphp
<input type="text" name="{{ $name }}" class="form-control colorpicker-flat" value="{{ $value }}">

@include('admin.blocks._incover_block',[
    'name' => $name,
    'content' => ob_get_clean()
])
