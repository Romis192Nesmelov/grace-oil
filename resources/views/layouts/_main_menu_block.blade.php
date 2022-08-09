<ul>
    @foreach($menu as $item)
        <li {{ count($item->subMenu) ? 'class=parent' : '' }}>
            <a href="{{ !$item->href ? url('/'.$item->getRouteKeyName()) : '#' }}"  class="{{ !$item->href && count($item->subMenu) ? 'noclick' : ''}} {{ count($item->subMenu) > 7 ? 'long_menu' : '' }}">{{ $item[App::getLocale()] }}</a>
            @if (count($item->subMenu))
                <ul>
                    @foreach($item->subMenu as $subItem)
                        <li><a href="{{ url('/'.$subItem->getRouteKeyName()) }}">{{ $subItem[App::getLocale()] }}</a></li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>