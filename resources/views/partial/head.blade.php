<ul>
    @foreach ($links as $link )
        <li class=" {{ Request::path() ==  $link['route'] ? 'active' : '' }} "><a href=" {{ $link['route'] }} "> {{ $link['text'] }} </a></li>
    @endforeach
</ul>

<div class="jumbo">
    <img src=" {{ asset('img/jumbotron.jpg') }} " alt="">
</div>