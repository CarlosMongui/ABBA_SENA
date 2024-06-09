@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <!-- Posts -->
    @foreach ($postlist as $item)
        <div class="card mb-3">
            <div class="row g-0">
            <div class="col-md-4 col-xl-4 d-flex justify-content-center rounded" style="max-width: 290px; background-color: #f0f0f0;">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <p>Imagen: {{ $item->image }}</p>
                    </div>
                    <img src="{{ url($item->image) }}" class="img-fluid rounded" alt="Imagen" style="max-height: 192px;">
                </div>
            </div>
            <div class="col-md-8 col-xl-8">
                <div class="card-body">
                    <div class="small text-muted">Publicado el: {{ $item->created_at }}</div>
                    <div class="small text-muted">Actualizado por ultima vez el: {{ $item->updated_at }}</div>
                    <div class="small text-muted">Sección: {{ $item->category }}</div>
                    <p class="card-text">{{ $item->content }}</p>
                    <div class="row">
                        <div class="col-md-4 col-xl-4">
                            <p class="card-text"><small class="text-body-secondary">Creado por: {{ $item->user->name }}</small></p>
                        </div>
                        <div class="col-md-8 col-xl-8 d-flex flex-row-reverse">
                            <p class="card-text"><small class="text-body-secondary">Correo del creador: {{ $item->user->email }}</small></p>
                        </div>
                    </div>
                    
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#reportModal{{ $item->id }}">⚠️</button>
                    
                </div>
            </div>
            </div>
        </div>

        <!-- Eliminar post -->
<div class="modal fade" id="reportModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Publicación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" class="float-right" action="{{ route('reports.store', ['post' => $item->id]) }}">
                    @csrf
                <div class="modal-body">
                        <input type="hidden" name="post" id="post" value="{{ $item->id }}">
                    <div class="form-group">
                        <label for="reason">Razón</label>
                        <textarea class="form-control" name="reason" id="reason" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    
                    <button type="submit" class="btn btn-warning">Enviar Reporte</button>
                </div>
                </form>
            </div>
        </div>
    </div>
        @endforeach
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop