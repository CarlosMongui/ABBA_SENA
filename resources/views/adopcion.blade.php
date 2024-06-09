@extends('plantillas.post')

@section('title', 'ABBA - Adopción')

@section("subtitle", "Adopcion")

@section("adopcion", "disabled")

@section("buscador")
<form action="{{ route('adopcion') }}" method="GET">
@endsection