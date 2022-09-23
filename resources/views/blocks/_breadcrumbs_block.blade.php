<div class="crumbs-list">
    <ul class="crumbs-ul">
        <li><a href="/">{{ trans('content.home') }}</a></li>
        @if (isset($breadcrumbs) && count($breadcrumbs))
            @for($bc=0;$bc<count($breadcrumbs);$bc++)
                @if ($bc == count($breadcrumbs)-1)
                    <li class="active">{{ $breadcrumbs[$bc]['name'] }}</li>
                @else
                    <li><a {{ $breadcrumbs[$bc]['href'] ? 'href=/'.$breadcrumbs[$bc]['href'] : '' }}>{{ $breadcrumbs[$bc]['name'] }}</a></li>
                @endif
            @endfor
        @endif
    </ul>
</div>