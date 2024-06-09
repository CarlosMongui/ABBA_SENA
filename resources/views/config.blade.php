@extends('plantillas.layout')
    
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <title>ABBA - Configuración</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- Logo -->
    <header class="d-flex justify-content-center">
        <div id="navbar-elipse"></div>
        <h1 id="navbar-title">ABBA</h1>
        <h1 id="navbar-subtitle">Configuración</h1>
    </header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg border-bottom border-body" style="background-color: #faead4;">
        <div class="container-fluid">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                {{ method_field('POST') }}
                <input class="btn btn-outline-danger button navbar-items" type="submit" value="Salir" style="font-size: 20px;">
            </form>

            <a class="navbar-brand navbar-items" href="{{ route('selfpost') }}">Tus Publicaciones</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active navbar-items" href="config.html">Configuracion</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn navbar-items" data-bs-toggle="modal" data-bs-target="#tamañoLetra" style="background-color: #faead4;">
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
    <!-- Deslizador Tamaño Letra -->
    <div class="modal fade" id="tamañoLetra" tabindex="-1" aria-labelledby="tamañoLetralLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tamañoLetraLabel">Tamaño de Letra</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="range" min="10" max="70" value="16" class="form-range" id="range-font">
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
    <div class="container py-5 my-5">
        <div class="row">
        <form action="{{ route('updateuser', $user) }}" method="post" enctype="multipart/form-data" id="correo">

@csrf
@method("PATCH")
@if ($errors->any())
<div class="alert alert-danger" role="alert">
<ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
                        </div>
                        @endif

                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                        {{ session('success') }}
</div>
    

                        @endif
<input type="hidden" id="user_id" name="user_id" value="{{ Auth::id(); }}">

<div class="card mb-3 offset-md-3 col-md-6">
  <div class="card-header" style="font-size: 20px; font-weight: bold; font-family: Merriweather sans, sans-serif;">
    Tu información
  </div>
  <div class="card-body">
  <p class="card-text">Nombre: {{$user->name}}</p>
    <p class="card-text">Correo: {{$user->email}}</p>
    <p class="card-text">Número de teléfono: {{$user->phone}}</p>
    <p class="card-text">Edad: {{$age}} ({{$user->birth_date}})</p>
  </div>
</div>

          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button size-letra" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-family: Merriweather sans, sans-serif; font-size: 35px;">
                  Cambiar Correo Electronico
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row g-2">
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="email" class="form-control size-letra" id="email" placeholder="name@example.com" value="" name="email">
                        <label for="floatingInputGrid" class="size-letra">Nuevo Correo</label>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="email" class="form-control size-letra" id="email-confirm" placeholder="name@example.com" value="" name="email_confirmation">
                        <label for="floatingInputGrid" class="size-letra">Confirmar Correo</label>
                      </div>
                    </div>

                  </div>
                  <div class="row my-2">
                    <div class="col-md-4"></div>
                      <input class="btn btn-success button col-md-4 size-letra" type="submit" value="Enviar">
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed size-letra" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-family: Merriweather sans, sans-serif; font-size: 35px;">
                  Cambiar Contraseña
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row g-2">
                    <div class="col-md">
                      <div class="form-floating">
                        <input type="text" class="form-control size-letra" id="password" placeholder="name@example.com" value="" name="password">
                        <label for="floatingInputGrid" class="size-letra">Nueva Contraseña</label>
                      </div>
                    </div>
                    
                    <div class="col-md">
                      <div class="form-floating">
                        <input type="text" class="form-control size-letra" id="password-confirm" placeholder="name@example.com" value="" name="password_confirmation">
                        <label for="floatingInputGrid" class="size-letra">Confirmar Contraseña</label>
                      </div>
                    </div>

                  </div>
                  <div class="row my-2">
                    <div class="col-md-4"></div>
                      <input class="btn btn-success button col-md-4 size-letra" type="submit" value="Enviar">
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed size-letra" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-family: Merriweather sans, sans-serif; font-size: 35px;">
                  Datos Personales
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row g-2">
                    <div class="col-md">
                      <div class="form-floating">
                        <input type="text" class="form-control size-letra" id="phone" placeholder="name@example.com" value="" name="phone">
                        <label for="floatingInputGrid" class="size-letra">Cambiar Número</label>
                      </div>
                    </div>
                    
                    <div class="col-md">
                      <div class="form-floating">
                        <input type="text" class="form-control size-letra" id="phone-confirm" placeholder="name@example.com" value="" name="phone_confirmation">
                        <label for="floatingInputGrid" class="size-letra">Confirmar Número</label>
                      </div>
                    </div>
                  </div>

                  <div class="row g-2 my-1">
                    <div class="col-md">
                      <div class="form-floating">
                        <input type="text" class="form-control size-letra" id="name" placeholder="name@example.com" value="" name="name">
                        <label for="floatingInputGrid" class="size-letra">Cambiar Nombre</label>
                      </div>
                    </div>
                    
                    <div class="col-md">
                      <div class="form-floating">
                        <input type="text" class="form-control size-letra" id="name-confirm" placeholder="name@example.com" value="" name="name_confirmation">
                        <label for="floatingInputGrid" class="size-letra">Confirmar Usuario</label>
                      </div>
                    </div>

                  </div>
                  <div class="row my-2">
                    <div class="col-md-4"></div>
                      <input class="btn btn-success button col-md-4 size-letra" type="submit" value="Enviar">
                  </div>
                </div>
              </div>
            </div>
          </div>
          </form>

          <div class="offset-md-3 py-5 my-5">
            <button class="btn btn-danger col-md-6" data-bs-toggle="modal" data-bs-target="#delete" style="font-size: 30px;">BORRAR CUENTA</button>
          </div>
        <!-- Eliminar post -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ELIMINAR CUENTA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿ESTAS SEGURO QUE QUIERES ELIMINAR TU CUENTA?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form method="post" class="float-right" action="{{ route('user.destroy') }}">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-danger" value="ELIMINAR CUENTA">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</body>
</html>