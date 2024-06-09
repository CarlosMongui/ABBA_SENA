@extends('plantillas.layout')
    
@section('title', 'ABBA - Tus Publicaciones')

@section('content')
<!-- Logo -->
<header class="d-flex justify-content-center">
    <div id="navbar-elipse"></div>

    <h1 id="navbar-title">ABBA</h1>
    <h2 id="navbar-subtitle">Tus Posteos</h2>
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

        <a class="navbar-brand navbar-items" href="{{ route('busqueda') }}">Otras Publicaciones</a>
            
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active navbar-items" href="{{ route('config') }}">Configuracion</a>
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
<div class="container py-5 my-5 size-letra">
<div class="col-lg-12">
        <!-- Buscador -->
            <div class="card mb-4">
                <div class="card-header">Busqueda</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <form action="{{ route('selfpost') }}" method="GET">
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
            <a class="btn btn-success button d-flex justify-content-center size-letra" href="{{ route('newpost') }}" role="button">(+) Nueva Publicacion</a>
        </div>

        <div class="col-xl-12">
        @foreach ($selfposts as $item)
        <div class="card mb-3">
            <div class="row g-0">
            <div class="col-md-4 col-xl-4 d-flex justify-content-center align-items-center rounded" style="max-width: 290px; background-color: #f0f0f0;">
                <img src="{{ url($item->image) }}" class="img-fluid rounded" alt="Imagen" style="max-height: 192px;">
            </div>
            <div class="col-md-8 col-xl-8">
                <div class="card-body">
                    <div style="background: #faead4; text-align: center; font-weight: bold;" class="small text-muted">{{ $item->category }}</div>
                    <div class="small text-muted">{{ $item->updated_at }}</div>
                    <p class="card-text">{{ $item->content }}</p>
                    <div class="row">
                        <div class="col-md-4 col-xl-4">
                            <p class="card-text"><small class="text-body-secondary">Numero de Contacto: {{ $item->user->phone }}</small></p>
                        </div>
                        <div class="col-md-8 col-xl-8 d-flex flex-row-reverse">
                            <p class="card-text"><small class="text-body-secondary">Correo Electronico: {{ $item->user->email }}</small></p>
                        </div>
                    </div>
                    <a href="{{ route('editpost', $item->id) }}" class="btn btn-success">✏️</a>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $item->id }}">🗑️</button>
                </div>
            </div>
            </div>
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
                    <form method="post" class="float-right" action="{{ route('destroypost', ['post' => $item->id]) }}">
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