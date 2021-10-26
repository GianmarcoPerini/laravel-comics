@extends('layout.build')

@section('base_data')
<section>
    <div class="comic-img">
        <img src=" {{ $comic['thumb'] }} " alt="">
    </div>

    <div class="comics-wrapper">
        <div class="info-comic">
            <h1> {{ $comic['title']}} </h1>
            <div class="price">
                <p>U.S Price: {{ $comic['price']}} </p>
                <div>
                    <p class="margin">AVAILABLE</p>
                    <p>Check Availability</p>    
                </div>
            </div> 
            <div class="description">
                <p> {{ $comic['description']}} </p>
            </div>  
        </div>
        <div class="banner">
            <img src=" {{ asset('img/banner.jpg') }} " alt="">
        </div> 
    </div>

    <div class="talent-specs">
        <div class="talent">
            <h2>Talent</h2>
            <div class="talent-name">
                <div>
                    <h3>art by:</h3>
                </div>
                <div class="talent-name">
                    @foreach ($comic['artists'] as $artist )
                        <p> {{ $artist }}, </p>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
</section>
    
@endsection