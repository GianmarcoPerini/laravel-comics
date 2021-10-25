@extends('layout.build')

@section('nome_a_caso_char')

    <div class="wrapper">
        @foreach ( config('comics') as $comic )
            <div class="card">
                <img src=" {{ $comic['thumb']}} " alt="">
            </div>
        @endforeach
    </div>

@endsection