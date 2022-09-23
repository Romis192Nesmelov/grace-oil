<a href="{{ asset(isset($full) && $full ? $full : $preview) }}" data-fancybox="images">
    <img class="lazyload" data-src="{{ asset($preview) }}" src="{{ asset($preview) }}" {{ isset($alt) && $alt ? 'alt='.$alt : '' }}>
    @if (isset($subscribe) && $subscribe)
        <span class="sertificate-item__title">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">{{ $subscribe }}</font>
            </font>
        </span>
    @endif
</a>