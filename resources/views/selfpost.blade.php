@extends('plantillas.layout')
    
@section('title', 'ABBA - Tus Publicaciones')

@section("subtitle")
    <h2 id="navbar-subtitle">Tus Posts</h2>
@endsection

@section("publicaciones-navbar")
    <a class="nav-link navbar-items" href="{{ route('post.busqueda') }}" style="color: black;">Otras Publicaciones</a>
@endsection

@section('content')
<!-- Cuerpo -->
    <div class="container py-5 my-5 size-letra">
    <div class="col-lg-12">
            <!-- Buscador -->
                <div class="card mb-4">
                    <div class="card-header">Busqueda</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <form action="{{ route('post.self') }}" method="GET">
                                    <div class="input-group">
                                        
                                        <input class="form-control" type="text" placeholder="Escribe algo..." aria-label="Escribe algo..." aria-describedby="button-search" name="busqueda"/>
                                        <input class="btn btn-success" id="button-search" type="submit" value="Ir"
                                        style="display: block;
                                            border-radius: 0 10px 10px 0;" />
                                        
                                        <div class="col-xl-2 dropdown btn">
                                            <select id="orden" name="orden" class="form-select size-letra" aria-label="Default select example" aria-describedby="button-search">
                                                <option selected>Ordenar por</option>
                                                <option value="desc">Mas reciente</option>
                                                <option value="asc">Mas antiguo</option>
                                            </select>
                                        </div> 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-xl-12" style="height: 80px;">
                <a class="btn btn-success button d-flex justify-content-center size-letra" href="{{ route('post.new') }}" role="button">(+) Nueva Publicacion</a>
            </div>

            <div class="col-xl-12">
            @foreach ($selfposts as $item)
                <div class="card mb-3">
                    <div class="row g-0">
                    <div class="col-sm-12 col-xl-4 d-flex justify-content-center align-items-center rounded" style="background-color: #f0f0f0;">
                        <img src="{{ url($item->image) }}" class="img-fluid rounded" alt="Imagen" style="max-height: 192px;">
                    </div>
                    <div class="col-sm-12 col-xl-8">
                        <div class="card-body">
                            <div style="text-align: center; font-weight: bold;" class="small">{{ $item->category }}</div>
                            <div class="small">{{ $item->updated_at }}</div>
                            <p class="card-text">{{ $item->content }}</p>
                            <div class="row">
                                <div class="col-sm-4 col-xl-4">
                                    <p class="card-text"><small>Numero de Contacto: {{ $item->user->phone }}</small></p>
                                </div>
                                <div class="offset-sm-3 col-sm-4 offset-xl-3 col-xl-5 d-flex flex-row-reverse">
                                    <p class="card-text"><small>Correo Electronico: {{ $item->user->email }}</small></p>
                                </div>
                            </div>
                            <a href="{{ route('post.edit', $item->id) }}" class="btn btn-success">✏️</a>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $item->id }}">🗑️</button>
                        </div>
                    </div>
                    </div>
                </div>

                    <!-- Modal eliminar post -->
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
            </div>


            <!-- Pagination -->
            <div class="container d-flex justify-content-center">
                <span>{{ $selfposts->appends(["busqueda" => $busqueda]) }}</span>
            </div>
        </div>
    </div>
@endsection