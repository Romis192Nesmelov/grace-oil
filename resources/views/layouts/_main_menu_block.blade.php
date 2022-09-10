<ul>
    @foreach($menu as $item)
        <li {{ count($item->subMenu) || $item->id == 3 ? 'class=parent' : '' }}>
            <a href="{{ $item->href ? url('/'.$item->slug) : '#' }}" class="{{ !$item->href && (count($item->subMenu) || $item->id == 3) ? 'noclick' : ''}} {{ isset($data['menu_active_id']) && $item->id == $data['menu_active_id'] ? 'active' : '' }} {{ count($item->subMenu) > 7 || $item->id == 3 ? 'long_menu' : '' }}">{{ $item[App::getLocale()] }}</a>
            @if (count($item->subMenu))
                <ul>
                    @foreach($item->subMenu as $subItem)
                        <li {{ isset($data['sub_menu_active_id']) && $subItem->id == $data['sub_menu_active_id'] ? 'class=active' : '' }}><a href="{{ url('/'.$subItem->slug) }}">{{ $subItem[App::getLocale()] }}</a></li>
                    @endforeach
                </ul>
            @elseif ($item->id == 3)
                <ul>
                    @foreach($catalogue as $catalogueItem)
                        <li {{ isset($data['oil_type_id']) && $catalogueItem->id == $data['oil_type_id'] ? 'class=active' : '' }}><a href="{{ url('/'.$item->slug.'/'.$catalogueItem->slug) }}">{{ $catalogueItem['name_'.App::getLocale()] }}</a></li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>