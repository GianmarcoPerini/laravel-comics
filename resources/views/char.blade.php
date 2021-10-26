@extends('layout.build')

@section('base_data')

    <div class="wrapper">

            @foreach ( config('comics') as $comic )
                <div class="card">
                    <a href=" {{ route('card') }} "><img src=" {{ $comic['thumb']}} " alt=""></a>
                </div>
            @endforeach
            
    </div>

@endsection