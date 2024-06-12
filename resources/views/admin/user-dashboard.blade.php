@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <!-- Posts -->
    <table class="table table-bordered table-striped">
        <tr>
            <th style="background-color: #888;">Nombre</th>
            <th style="background-color: #888;">Correo electrónico</th>
            <th style="background-color: #888;">Número Telefónico</th>
            <th style="background-color: #888;">Fecha de Nacimiento</th>
            <th style="background-color: #888;">Publicaciones</th>
            <th style="background-color: #888;">Reportes</th>
        </tr>
    @foreach ($userlist as $user)
            <tr>
                <th>{{ $user->name }}</th>
                <th>{{ $user->email }}</th>
                <th>{{ $user->phone }}</th>
                <th>{{ $user->birth_date }}</th>
                <th><a href="{{ route('admin.posts.user', ['user' => $user->id]) }}" class="btn-link">Ver posts de {{ $user->name }}</a></th>
                <th><a href="{{ route('admin.reports.user', ['user' => $user->id]) }}" class="btn-link">Ver reportes de {{ $user->name }}</a></th>
            </tr>
    @endforeach
    </table>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop