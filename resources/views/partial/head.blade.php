<ul>
    @foreach ($links as $link )
        <li><a href=" {{ $link['route'] }} "> {{ $link['text'] }} </a></li>
    @endforeach
</ul>