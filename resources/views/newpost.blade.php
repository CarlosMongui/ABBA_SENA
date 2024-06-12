@extends('plantillas.layout')
    
@section('title', 'ABBA - Nueva Publicacion')

@section("subtitle")
    <h2 id="navbar-subtitle">Nuevo post</h2>
@endsection

@section("publicaciones-navbar")
    <a class="nav-link navbar-items" href="{{ route('post.self') }}">Tus Publicaciones</a>
@endsection


@section('content')
    <!-- Cuerpo -->
    <div class="row">
    <form action="{{ url('/posts') }}" method="post" enctype="multipart/form-data">
    @csrf
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
                        id="preview"></div>
                        <label for="image" class="form-label size-letra">Introduzca una imagen</label>
                        <input class="form-control size-letra" type="file" id="image" name="image">
                    </div>
                </div>

                <div class="col-md-8">
                    <!-- Descripción -->
                    <div class="mb-3">
                        <label for="content" class="form-label size-letra">Descripcion</label>
                        <textarea class="form-control size-letra" id="content" name="content" rows="8" style="resize: none;"></textarea>
                    </div>

                    <!-- Categoría -->
                    <div class="mb-3">
                        <label for="category" class="form-label size-letra">Categoría</label>
                        <select id="category" name="category" class="form-select size-letra" aria-label="Default select example">
                        <option selected>Busqueda o Adopción...</option>
                        <option value="Busqueda">Busqueda</option>
                        <option value="Adopcion">Adopción</option>
                    </select>
                    </div>
                    
                </div>

                <div class="col-md-4 col-sm-2"></div>

                <button class="btn btn-success button col-md-5 col-sm-9 size-letra" type="submit" style="font-size: 20px;">Publicar</button>

            </div>
        </div>
    </form>
    </div>        
@endsection
