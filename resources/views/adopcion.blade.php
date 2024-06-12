@extends('plantillas.post')

@section('title', 'ABBA - Adopción')

@section("subtitle")
    <h2 id="navbar-subtitle">Adopcion</h2>
@endsection

@section("adopcion", "disabled")

@section("buscador")
    <form action="{{ route('post.adopcion') }}" method="GET">
@endsection