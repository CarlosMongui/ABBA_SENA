@extends('plantillas.layout')
    
@section('title', 'ABBA - Nueva Publicacion')

@section("subtitle")
    <h2 id="navbar-subtitle">Configuracion</h2>
@endsection

@section("publicaciones-navbar")
    <a class="nav-link navbar-items" href="{{ route('post.self') }}" style="color: black;">Tus Publicaciones</a>
@endsection


@section('content')
    <!-- Cuerpo -->
    <div class="container py-5 my-5">
        <div class="row">
            <form action="{{ route('user.update', $user) }}" method="post" enctype="multipart/form-data" id="correo">
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

                <!-- Carta información -->
                <div class="card mb-3 offset-md-3 col-md-6">
                    <div class="card-header" style="font-size: 20px; font-weight: bold; font-family: Merriweather sans, sans-serif;">
                        Tu información
                    </div>
                    <div class="card-body">
                        <p class="card-text">Nombre: {{$user->name}}</p>
                        <p class="card-text">Correo: {{$user->email}}</p>
                        <p class="card-text">Número de teléfono: {{$user->phone}}</p>
                        <p class="card-text">Edad: {{$age}} años. ({{$user->birth_date}})</p>
                    </div>
                </div>

                <!-- Acordeon cambiar info -->
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <!-- Correo -->
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
                    <!-- Contraseña -->
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
                    <!-- Nombre y Telefono -->
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

          <!-- Borrar cuenta -->
          <div class="offset-md-3 offset-sm-3 py-5 my-5">
              <button class="btn btn-danger col-md-6" data-bs-toggle="modal" data-bs-target="#delete" style="font-size: 30px;">BORRAR CUENTA</button>
          </div>

          <!-- Modal Borrar cuenta -->
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
                            <form method="post" class="float-right" action="{{ route('user.destroy', ['user' => $user->id]) }}">
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
@endsection