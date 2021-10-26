@extends('layout.build')

@section('base_data')
<section>
    <div class="comic-img">
        <img src=" {{ $comics['thumb'] }} " alt="">
    </div>

    <div class="comics-wrapper">
        <div class="info-comic">
            <h1> {{ $comics['title']}} </h1>
            <div class="price">
                <p>U.S Price: {{ $comics['price']}} </p>
                <div>
                    <p class="margin">AVAILABLE</p>
                    <p>Check Availability</p>    
                </div>
            </div> 
            <div class="description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam incidunt quod nesciunt debitis fugiat maxime mollitia blanditiis aperiam! Animi quidem placeat corporis. Aut sunt eos cum neque sequi amet a?</p>
            </div>  
        </div>
        <div class="banner">
    
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
                    @foreach ($comics['artists'] as $artist )
                        <p> {{ $artist }}, </p>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
</section>
    
@endsection