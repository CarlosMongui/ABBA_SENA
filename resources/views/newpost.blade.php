@extends('plantillas.layout')
    
@section('title', 'ABBA - Nueva Publicacion')

@section('subtitle', 'Nuevo Post')

@section('content')
<!-- Logo -->
<header class="d-flex justify-content-center">
    <div id="navbar-elipse"></div>

    <h1 id="navbar-title">ABBA</h1>
    <h2 id="navbar-subtitle">Nuevo Post</h2>
</header>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg border-bottom border-body" style="background-color: #faead4;">
    <div class="container-fluid">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            {{ method_field('POST') }}
            <input class="btn btn-outline-danger button navbar-items" type="submit" value="Salir" style="font-size: 20px;">
        </form>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand navbar-items" href="{{ route('selfpost') }}">Tus Publicaciones</a>
            
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active navbar-items" href="config.html">Configuracion</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn navbar-items" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #faead4;">
                        Accesibilidad
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn navbar-items" data-bs-toggle="modal" data-bs-target="#contactos" style="background-color: #faead4;">
                        Contactos
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Deslizador tamaño -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tamaño de Letra</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="range" min="30" max="70" value="45" class="form-range" id="range-font">
            </div>
        </div>
    </div>
</div>
<!-- Contactos -->
<div class="modal fade" id="contactos" tabindex="-1" aria-labelledby="contactosLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="contactosLabel">Contactos</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <!-- Gmail -->
                <div class="col-xl-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Gmail_icon_%282020%29.svg" class="card-img-top" alt="..." style="width: 30px;">
                </div>
                <div class="col-xl-6">
                    <p id="correo">abab@gmail.com</p>
                </div>
                <div class="col-xl-4">
                    <button type="button" class="btn btn-success" id="correo-bt" style="width: 150px;" onclick="copiarTexto('correo', 'correo-bt')">Copiar</button>
                </div>
                <!-- Whatsapp -->
                <div class="col-xl-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" class="card-img-top" alt="..." style="width: 30px;">
                </div>
                <div class="col-xl-6">
                    <p id="whatsapp">123 4567890</p>
                </div>
                <div class="col-xl-4">
                    <button type="button" class="btn btn-success" id="whatsapp-bt" style="width: 150px;" onclick="copiarTexto('whatsapp', 'whatsapp-bt')">Copiar</button>
                </div>
                <!-- Facebook -->
                <div class="col-xl-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/2023_Facebook_icon.svg/2048px-2023_Facebook_icon.svg.png" class="card-img-top" alt="..." style="width: 30px;">
                </div>
                <div class="col-xl-6">
                    <p id="correo">@abab</p>
                </div>
                <div class="col-xl-4">
                    <a href="https://facebook.com" target="_blank" class="btn btn-success" style="width: 150px;">Ir</a>
                </div>
                <!-- Twitter -->
                <div class="col-xl-2">
                    <img src="https://img.freepik.com/vector-gratis/nuevo-diseno-icono-x-logotipo-twitter-2023_1017-45418.jpg?w=740&t=st=1710444865~exp=1710445465~hmac=8b270051942330a7fb9f19a99a99bc6a6e08098fbfd89f9f0535c21fb9c2d158" class="card-img-top" alt="..." style="width: 30px;">
                </div>
                <div class="col-xl-6">
                    <p id="correo">@abab</p>
                </div>
                <div class="col-xl-4">
                    <a href="https://twitter.com" target="_blank" class="btn btn-success" style="width: 150px;">Ir</a>
                </div>
                <!-- Instagram -->
                <div class="col-xl-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png" class="card-img-top" alt="..." style="width: 30px;">
                </div>
                <div class="col-xl-6">
                    <p id="correo">@abab</p>
                </div>
                <div class="col-xl-4">
                    <a href="https://instagram.com" target="_blank" class="btn btn-success" style="width: 150px;">Ir</a>
                </div>
                <!-- Threads -->
                <div class="col-xl-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Threads_%28app%29_logo.svg/2048px-Threads_%28app%29_logo.svg.png" class="card-img-top" alt="..." style="width: 30px;">
                </div>
                <div class="col-xl-6">
                    <p id="correo">@abab</p>
                </div>
                <div class="col-xl-4">
                    <a href="https://threads.net" target="_blank" class="btn btn-success" style="width: 150px;">Ir</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


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
                <div class="mb-3">
                    <label for="content" class="form-label size-letra">Descripcion</label>
                    <textarea class="form-control size-letra" id="content" name="content" rows="8" style="resize: none;"></textarea>
                </div>


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
        
    </div>
        
    @endsection

<!--


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias bien importantes</title>
</head>
<body>
    @isset($postlist)

        @foreach ($postlist as $item)
            <h1>{{ $item->title }}</h1>
            <p>{{ $item->content }}</p>
            <hr>
        @endforeach
    @endisset
</body>
</html>


-->