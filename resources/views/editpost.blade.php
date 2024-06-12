@extends('plantillas.layout')
    
@section('title', 'ABBA - Nueva Publicacion')

@section("subtitle")
    <h2 id="navbar-subtitle">Editar post</h2>
@endsection

@section("publicaciones-navbar")
    <a class="nav-link navbar-items" href="{{ route('post.self') }}">Tus Publicaciones</a>
@endsection


@section('content')
    <!-- Cuerpo -->
    <div class="row">
        <form action="{{ route('post.update', $post) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::id(); }}">



            <div class="container py-5 my-5" style="outline: 3px solid black; -moz-border-radius: 50px/50px; -webkit-border-radius: 50px 50px; border-radius: 50px/50px;">
                <div class="row">
                    <!-- Imagen -->
                    <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                        <div class="size-letra">
                            <div style="
                            height: 222px;
                            width: 350px;
                            position: relative;
                            border-radius: 3%;
                            text-align: center;
                            outline: 3px dashed gray;
                            margin: 0 auto;"
                            id="preview"><img src="{{ url($post->image) }}" style="width: 350px; height: 222px;" id="imagen-post"></div>
                            <label for="image" class="form-label size-letra">Introduzca una imagen</label>
                            <input class="form-control size-letra" type="file" id="image" name="image">
                        </div>
                    </div>

                    <div class="col-md-8">
                    <!-- Descripción -->
                        <div class="mb-3">
                            <label for="content" class="form-label size-letra">Descripcion</label>
                            <textarea class="form-control size-letra" id="content" name="content" rows="8" style="resize: none;">{{ $post->content }}</textarea>
                        </div>

                    <!-- Categoría -->
                        <div class="mb-3">
                            <label for="category" class="form-label size-letra">Categoría</label>
                            <select id="category" name="category" class="form-select size-letra" aria-label="Default select example">
                                <option selected>Busqueda o Adopción...</option>
                                <option value="Busqueda" @if($post->category == "Busqueda") selected @endif>Busqueda</option>
                                <option value="Adopcion" @if($post->category == "Adopcion") selected @endif>Adopción</option>
                        </select>
                        </div>
                        
                    </div>

                    <div class="col-md-4 col-sm-2"></div>
                    <button type="button" class="btn btn-success col-md-5 col-sm-9 size-letra" style="font-size: 20px;" data-bs-toggle="modal" data-bs-target="#save">
                        Editar
                    </button>

                </div>
            </div>
                <!-- Guardar Cambios -->
                <div class="modal fade" id="save" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar Publicación</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ¿Seguro que quieres editar esta publicación?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button class="btn btn-success" type="submit">Continuar</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>        
</div>
@endsection
