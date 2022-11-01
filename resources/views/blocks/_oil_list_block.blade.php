<div class="tovar-list">
    @foreach($oil as $item)
        <div class="tovar-item item">
            <div class="prev">
                <a href="{{ url('/'.$breadcrumbs[0]['href'].'/'.$item->oilType->slug.'/'.$item->slug) }}">
                    <img class="lazyload" data-src="{{ asset($item->image_base) }}" src="{{ asset($item->image_base) }}" alt="{{ $item->name }}">
                </a>
            </div>
            <div class="descr">
<<<<<<< HEAD
                <a href="{{ url('/'.$breadcrumbs[0]['href'].'/'.$item->oilType->slug.'/'.$item->slug) }}" class="tovar-title">{{ $item['name_'.app()->getLocale()] }}</a>
=======
                <a href="{{ url('/'.$breadcrumbs[0]['href'].'/'.$item->oilType->slug.'/'.$item->slug) }}" class="tovar-title">{{ $item->name }}</a>
>>>>>>> 4057d90d0fe8bf03d22bacd85f54913cb8d2c63e
            </div>
        </div>
    @endforeach
</div>
<div class="mse2_pagination text-center">{{ $oil->render() }}</div>