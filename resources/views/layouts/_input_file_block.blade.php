<div class="inp-wp inp-file">
    <p class="file_title">{{ $inputLabel }}</p>
    <div class="jq-file">
        <input type="file" name="{{ $inputName }}" id="{{ $inputId }}" data-placeholder="{{ trans('content.file_not_selected') }}" data-browse="{{ trans('content.overview') }}">
    </div>
    @include('layouts._input_error_block')
</div>