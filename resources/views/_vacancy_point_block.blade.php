@if (count($pointItems))
    <h3>{{ $pointHead }}</h3>
    <ul>
        @for ($i=0;$i<count($pointItems);$i++)
            <li>{{ $pointItems[$i]['text_'.App::getLocale()].($i == count($pointItems) - 1 ? '.' : ';') }}</li>
        @endfor
    </ul>
@endif