@extends('plantillas.post')

@section('title', 'ABAB - Busqueda')

@section("subtitle", "Busqueda")

@section("busqueda", "disabled")

@section("buscador")
<form action="{{ route('busqueda') }}" method="GET">
@endsection