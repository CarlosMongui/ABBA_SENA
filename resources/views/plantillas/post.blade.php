@extends('plantillas.layout')

@section("publicaciones-navbar")
    <a class="nav-link navbar-items" href="{{ route('post.self') }}">Tus Publicaciones</a>
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
                            @yield("buscador")
                                <div class="input-group">
                                    
                                    <input class="form-control size-letra" type="text" placeholder="Escribe algo..." aria-label="Escribe algo..." aria-describedby="button-search" name="busqueda" value="{{ request('busqueda') }}"/>
                                    <input class="btn btn-success size-letra" id="button-search" type="submit" value="Ir"
                                    style="display: block;
                                           border-radius: 0 10px 10px 0;" />
                                    
                                    <div class="col-xl-2 dropdown btn">
                                        <select id="orden" name="orden" class="form-select size-letra" aria-label="Default select example" aria-describedby="button-search">
                                            <option>Ordenar por</option>
                                            <option value="desc" {{ request('orden') == 'desc' ? 'selected' : '' }}>Mas reciente</option>
                                            <option value="asc" {{ request('orden') == 'asc' ? 'selected' : '' }}>Mas antiguo</option>
                                        </select>
                                    </div> 
                                </div>
                            </form>
                        </div>
                        <div class="container py-4">
                            <div class="col-xl-12">
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-success size-letra col-sm-5 col-xl-5 @yield('busqueda')" href="{{ route('post.busqueda') }}">Busqueda</a>
                                    <div class="col-sm-1 col-xl-1"></div>
                                    <a class="btn btn-success size-letra col-sm-5 col-xl-5 @yield('adopcion')" href="{{ route('post.adopcion') }}">Adopción</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Posts -->
        @foreach ($postlist as $item)
            <div class="card mb-3">
                <div class="row g-0">
                <div class="col-sm-12 col-xl-4 d-flex justify-content-center align-items-center rounded" style="background-color: #f0f0f0;">
                    <img src="{{ url($item->image) }}" class="img-fluid rounded" alt="Imagen" style="max-height: 192px;">
                </div>
                <div class="col-sm-12 col-xl-8">
                    <div class="card-body">
                        <div class="small">{{ $item->updated_at }}</div>
                        <p class="card-text">{!! nl2br(e($item->content)) !!}</p>
                        <div class="row">
                            <div class="col-sm-4 col-xl-4">
                                <p class="card-text"><small>Numero de Contacto: {{ $item->user->phone }}</small></p>
                            </div>
                            <div class="offset-sm-3 col-sm-4 offset-xl-3 col-xl-5 d-flex flex-row-reverse">
                                <p class="card-text"><small>Correo Electronico: {{ $item->user->email }}</small></p>
                            </div>
                        </div>
                        @if($item->user_id !== $user->id)
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#reportModal{{ $item->id }}">⚠️</button>
                        @endif
                    </div>
                </div>
                </div>
            </div>

                <!-- Modal Reporte post -->
                <div class="modal fade" id="reportModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Reportar Publicación</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="post" class="float-right" action="{{ route('reports.store', ['post' => $item->id]) }}">
                                @csrf
                            <div class="modal-body">
                                    <input type="hidden" name="post" id="post" value="{{ $item->id }}">
                                <div class="form-group">
                                    <label for="reason">Razón</label>
                                    <textarea class="form-control" name="reason" id="reason" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                
                                <button type="submit" class="btn btn-warning">Enviar Reporte</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
        @endforeach

        
        <!-- Pagination -->
        <div class="container d-flex justify-content-center">
            <span>{{ $postlist->appends(["busqueda" => $busqueda]) }}</span>
        </div>
    </div>

    @endsection