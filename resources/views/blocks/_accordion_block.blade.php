<div class="tovar-slide-item">
    <div class="trigger-title">{{ $title }}</div>
    <div class="tovar-slide-text {{  isset($open) && $open ? 'open-slide-text' : '' }}">
        <div class="text_edit">
            {!! $text !!}
        </div>
    </div>
</div>