@extends('layout.build')

@section('base_data')

    <div class="wrapper">

            @foreach ( config('comics') as $comic )
            <a href=" {{ route('card',  $loop->index ) }} ">
                <div class="card">
                    <img src=" {{ $comic['thumb']}} " alt="">
                </div>
            </a>
            @endforeach

    </div>

@endsection