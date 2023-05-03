@if (isset($label) && $label)
    <label for="{{ $name }}">{{ $label }} <sup>{{ isset($required) && (int)$required ? '*' : '' }}</sup></label>
@endif
<div class="form-group has-feedback has-feedback-left {{ $error ? "has-error" : '' }}">
    {!! $content !!}
    @if ( (isset($icon) && $icon) && (!isset($label) || !$label) )
        <div class="form-control-feedback">
            <i class="{{ isset($error) && $error ? 'text-danger-800 '.$icon : $icon }} text-muted"></i>
        </div>
    @endif
    @include('admin.blocks._input_error_block',['error' => isset($error) && $error ? $error : null])
</div>
