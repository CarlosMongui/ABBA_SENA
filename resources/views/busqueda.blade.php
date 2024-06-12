@extends('plantillas.post')

@section('title', 'ABAB - Busqueda')

@section("subtitle")
    <h2 id="navbar-subtitle">Busqueda</h2>
@endsection

@section("busqueda", "disabled")

@section("buscador")
    <form action="{{ route('post.busqueda') }}" method="GET">
@endsection