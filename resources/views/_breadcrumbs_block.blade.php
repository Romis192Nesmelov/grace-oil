<div class="crumbs-list">
    <ul class="crumbs-ul">
        <li><a href="/">{{ trans('content.home') }}</a></li>
        @if (isset($data['breadcrumbs']) && count($data['breadcrumbs']))
            @for($bc=0;$bc<count($data['breadcrumbs']);$bc++)
                @if ($bc == count($data['breadcrumbs'])-1)
                    <li class="active">{{ $data['breadcrumbs'][$bc]['name'] }}</li>
                @else
                    <li><a {{ $data['breadcrumbs'][$bc]['href'] ? 'href='.$data['breadcrumbs'][$bc]['href'] : '' }}>{{ $data['breadcrumbs'][$bc]['name'] }}</a></li>
                @endif
            @endfor
        @endif
    </ul>
</div>