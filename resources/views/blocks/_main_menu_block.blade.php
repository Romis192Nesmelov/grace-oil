<ul>
    @foreach($menu as $item)
        <li {{ count($item->subMenu) || $item->id == 3 ? 'class=parent' : '' }}>
            <a href="{{ $item->href ? url('/'.$item->slug) : '#' }}" class="{{ !$item->href && (count($item->subMenu) || $item->id == 3) ? 'noclick' : ''}} {{ isset($menu_active_id) && $item->id == $menu_active_id ? 'active' : '' }} {{ count($item->subMenu) > 7 || $item->id == 3 ? 'long_menu' : '' }}">{{ $item[App::getLocale()] }}</a>
            @if (count($item->subMenu))
                <ul>
                    @foreach($item->subMenu as $subItem)
                        <li {{ isset($sub_menu_active_id) && $subItem->id == $sub_menu_active_id ? 'class=active' : '' }}><a href="{{ url('/'.$subItem->slug) }}">{{ $subItem[App::getLocale()] }}</a></li>
                    @endforeach
                </ul>
            @elseif ($item->id == 3)
                <ul>
                    @foreach($catalogue as $catalogueItem)
                        <li {{ isset($oil_type_id) && $catalogueItem->id == $oil_type_id ? 'class=active' : '' }}><a href="{{ url('/'.$item->slug.'/'.$catalogueItem->slug) }}">{{ $catalogueItem['name_'.App::getLocale()] }}</a></li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>