@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('adminlte::page')

@section('title', 'Reportes')

@section('content_header')
    <h1>Reportes de <b>{{ $user->name }}</b></h1>
@stop

@section('content')
    <!-- Posts -->
    @if ($reportlist->isNotEmpty())
        @foreach ($reportlist as $report)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-11">
                        <p class="card-text">{!! nl2br(e($report->reason)) !!}</p>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#delete{{ $report->id }}">🗑️</button>
                    </div>
                </div>


            
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $report->id }}" aria-expanded="true" aria-controls="collapseOne">
                                Publicación reportada
                            </button>
                        </h2>
                        <div id="collapseOne{{ $report->id }}" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                            <div class="accordion-body">
                                <!-- Post -->
                                <div class="card mb-3">
                                    <div class="row g-0">
                                    <div class="col-md-4 col-xl-4 d-flex justify-content-center align-items-center rounded" style="max-width: 290px; background-color: #f0f0f0;">
                                        <img src="{{ url($report->post->image) }}" class="img-fluid rounded" alt="Imagen" style="max-height: 192px;">
                                    </div>
                                    <div class="col-md-8 col-xl-8">
                                        <div class="card-body">
                                            <div style="text-align: center; font-weight: bold;" class="small text-muted">{{ $report->post->category }}</div>
                                            <div class="small text-muted">{{ $report->post->updated_at }}</div>
                                            <div class="small text-muted">Creador del post: {{ $report->post->user->name }}</div>
                                            <p class="card-text">{!! nl2br(e($report->post->content)) !!}</p>
                                            <div class="row">
                                                <div class="col-md-4 col-xl-4">
                                                    <p class="card-text"><small class="text-body-secondary">Numero de Contacto: {{ $report->post->user->phone }}</small></p>
                                                </div>
                                                <div class="col-md-8 col-xl-8 d-flex flex-row-reverse">
                                                    <p class="card-text"><small class="text-body-secondary">Correo Electronico: {{ $report->post->  user->email }}</small></p>
                                                </div>
                                            </div>
                                            <a href="{{ route('post.edit', $report->post->id) }}" class="btn btn-success">✏️</a>
                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $report->post->id }}">🗑️</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                
                                <!-- Eliminar post -->
                                <div class="modal fade" id="delete{{ $report->post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <form method="post" class="float-right" action="{{ route('report.destroy', ['report' => $report->id]) }}">
                                                @csrf
                                                @method("DELETE")
                                                    <input type="submit" class="btn btn-danger" value="Eliminar">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
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
            

            </div>
        </div>
        @endforeach
    @else
        <h5 class="d-flex justify-content-center">No hay reportes que mostrar.</h5>
    @endif

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop