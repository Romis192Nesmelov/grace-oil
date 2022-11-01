<div class="wrap-textarea">
    <textarea type="text" name="{{ $taName }}" placeholder="" title="{{ $taLabel }}" class="textarea-default" id="{{ $taId }}"></textarea>
    <label for="{{ $taId }}">{{ $taLabel }}</label>
    @include('blocks._input_error_block', ['inputName' => $taName])
</div>