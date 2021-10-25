@extends('layout.build')
@include('partial.cards', ['images' => config('comics')])

@section('nome_a_caso_char')
    @yield('carte')
@endsection