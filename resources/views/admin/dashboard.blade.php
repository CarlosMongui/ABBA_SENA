@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    @if (isset($user))
        <h1>Publicaciones de <b>{{ $user->name }}</b></h1>
    @else
        <h1>Publicaciones</h1>
    @endif
@stop

@section('content')
    <!-- Posts -->
    @if ($postlist->isNotEmpty())
        @foreach ($postlist as $item)
            <div class="card mb-3">
                <div class="row g-0">
                <div class="col-md-4 col-xl-4 d-flex justify-content-center align-items-center rounded" style="max-width: 290px; background-color: #f0f0f0;">
                    <img src="{{ url($item->image) }}" class="img-fluid rounded" alt="Imagen" style="max-height: 192px;">
                </div>
                <div class="col-md-8 col-xl-8">
                    <div class="card-body">
                        <div style="text-align: center; font-weight: bold;" class="small text-muted">{{ $item->category }}</div>
                        <div class="small text-muted">{{ $item->updated_at }}</div>
                        <div class="small text-muted">Creador del post: {{ $item->user->name }}</div>
                        <p class="card-text">{!! nl2br(e($item->content)) !!}</p>
                        <div class="row">
                            <div class="col-md-4 col-xl-4">
                                <p class="card-text"><small class="text-body-secondary">Numero de Contacto: {{ $item->user->phone }}</small></p>
                            </div>
                            <div class="col-md-8 col-xl-8 d-flex flex-row-reverse">
                                <p class="card-text"><small class="text-body-secondary">Correo Electronico: {{ $item->user->email }}</small></p>
                            </div>
                        </div>
                        <a href="{{ route('post.edit', $item->id) }}" class="btn btn-success">✏️</a>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $item->id }}">🗑️</button>
                    </div>
                </div>
            </div>

                <!-- Reports -->
                @if ($item->reports->isNotEmpty())
                <div class="accordion accordion-flush" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{ $item->id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                                Reportes ⚠️
                            </button>
                        </h2>
                        <div id="flush-collapseOne{{ $item->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    @foreach ($item->reports as $report)
                                        <div class="row">
                                            <div class="col-md-11">
                                                <li>{!! nl2br(e($report->reason)) !!}</li>
                                                <p class="small text-muted">Reporte hecho por: {{ $report->user->name }}</p>
                                            </div>
                                            <div class="col-md-1">
                                                <button class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#delete{{ $report->id }}">🗑️</button>
                                            </div>
                                        </div>

                                        <!-- Eliminar reporte -->
                                        <div class="modal fade" id="delete{{ $report->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Reporte</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ¿Seguro que quieres eliminar este reporte?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                        <form method="post" class="float-right" action="{{ route('report.destroy', ['report' => $report->id]) }}">
                                                        @csrf
                                                        @method("DELETE")
                                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>


            
            <!-- Eliminar post -->
            <div class="modal fade" id="delete{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Publicación</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ¿Seguro que quieres eliminar esta publicación?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <form method="post" class="float-right" action="{{ route('post.destroy', ['post' => $item->id]) }}">
                            @csrf
                            @method("DELETE")
                                <input type="submit" class="btn btn-danger" value="Eliminar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <h5 class="d-flex justify-content-center">No hay publicaciones que mostrar.</h5>
    @endif

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop