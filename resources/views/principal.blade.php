@extends('plantillas.layout')

@section('title', "ABBA")

@section("publicaciones-navbar")
    <a class="nav-link navbar-items" href="{{ route('post.self') }}">Tus Publicaciones</a>
@endsection
    
@section('content')


    <!-- Cuerpo -->
    <div class="row">
        
        <div class="col-xl-6" id="busqueda">
            <div class="container py-5 my-5">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12"></div>
                        <a href="{{ route('post.busqueda') }}" class="btn btn-outline-success d-flex justify-content-center align-items-center text-center button size-letra col-xl-6 col-lg-6 col-md-6 col-sm-12" style="font-size: 45px; height: 300px; color: #faead4;">
                            Búsqueda
                        </a>
                </div>
            </div>
        </div>
    
        <div class="col-xl-6" id="adopcion">
            <div class="container py-5 my-5">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12"></div>
                        <a href="{{ route('post.adopcion') }}" class="btn btn-outline-success d-flex justify-content-center align-items-center text-center button size-letra col-xl-6 col-lg-6 col-md-6 col-sm-12" style="font-size: 45px; height: 300px; color: #faead4;">
                            Adopción
                        </a>
                </div>
            </div>
        </div>
            
    </div>

@endsection