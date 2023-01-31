<div class="tovar-list">
    @foreach($oil as $item)
        <div class="tovar-item item">
            @if (count($item->marketplaces))
                <div class="mp-icons-container">
                    @foreach(['ozon','wb'] as $mp)
                        @if ($item->marketplaces[0][$mp])
                            <img class="mp-icon" src="{{ asset('images/logo_'.$mp.'.png') }}" />
                        @endif
                    @endforeach
                </div>
            @endif
            <div class="prev">
                <a href="{{ url('/'.$breadcrumbs[0]['href'].'/'.$item->oilType->slug.'/'.$item->slug) }}">
                    <img class="lazyload" data-src="{{ asset($item->image) }}" src="{{ asset($item->image) }}" alt="{{ $item->name }}">
                </a>
            </div>
            <div class="descr">
                <a href="{{ url('/'.$breadcrumbs[0]['href'].'/'.$item->oilType->slug.'/'.$item->slug) }}" class="tovar-title">{{ $item['name_'.app()->getLocale()] }}</a>
            </div>
        </div>
    @endforeach
</div>
<div class="mse2_pagination text-center">{{ $oil->render() }}</div>