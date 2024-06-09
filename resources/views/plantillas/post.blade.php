<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>

    @vite(['resources/css/app.css', 'resources/js/app.js']) 

    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- Logo -->
    <header class="d-flex justify-content-center">
        <div id="navbar-elipse"></div>

        <h1 id="navbar-title">ABBA</h1>
        <h2 id="navbar-subtitle">@yield("subtitle")</h2>
    </header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg border-bottom border-body" id="navbar">
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
                        <a class="nav-link navbar-items" href="{{ route('config') }}">Configuracion</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn navbar-items" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Accesibilidad
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn navbar-items" data-bs-toggle="modal" data-bs-target="#contactos">
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
                <div class="modal-body" style="border-bottom: #dee2e6 2px solid;">
                    <input type="range" min="0" max="20" value="0" class="form-range" id="range-font">
                </div>
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Alto Contraste</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <button id="toggleContrast" class="btn btn-info">Alternar Contraste</button>
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
                                    <a class="btn btn-success size-letra col-xl-5 @yield('busqueda')" href="{{ route('busqueda') }}">Busqueda</a>
                                    <div class="col-xl-1"></div>
                                    <a class="btn btn-success size-letra col-xl-5 @yield('adopcion')" href="{{ route('adopcion') }}">Adopción</a>
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
            <div class="col-md-4 col-xl-4 d-flex justify-content-center align-items-center rounded" style="max-width: 290px; background-color: #f0f0f0;">
                <img src="{{ url($item->image) }}" class="img-fluid rounded" alt="Imagen" style="max-height: 192px;">
            </div>
            <div class="col-md-8 col-xl-8">
                <div class="card-body">
                    <div class="small">{{ $item->updated_at }}</div>
                    <p class="card-text">{{ $item->content }}</p>
                    <div class="row">
                        <div class="col-md-4 col-xl-4">
                            <p class="card-text"><small>Numero de Contacto: {{ $item->user->phone }}</small></p>
                        </div>
                        <div class="col-md-8 col-xl-8 d-flex flex-row-reverse">
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

        <!-- Reportar post -->
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
    @include('plantillas.footer')

    <script>
        function copiarTexto(id_texto, id_boton){
            let texto = document.getElementById(id_texto);
            let boton = document.getElementById(id_boton);

            navigator.clipboard.writeText(texto.textContent);
            boton.textContent = "Copiado";
            setTimeout(() =>{
                boton.textContent = "Copiar";
            }, 2000)
        };
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toggleButton = document.getElementById('toggleContrast');

        // Check if high contrast mode was previously enabled
        if (localStorage.getItem('highContrastEnabled') === 'true') {
            document.body.classList.add('high-contrast');
        }

        toggleButton.addEventListener('click', function () {
            document.body.classList.toggle('high-contrast');
            
            // Save the high contrast mode state in local storage
            var highContrastEnabled = document.body.classList.contains('high-contrast');
            localStorage.setItem('highContrastEnabled', highContrastEnabled);
        });
    });
</script>

<script>
    const rangeFont = document.getElementById("range-font");
const sizeLetra = document.getElementsByClassName("size-letra");

// Almacena el tamaño base de la letra para cada elemento
const tamañosBase = Array.from(sizeLetra).map(element => parseFloat(window.getComputedStyle(element).fontSize));

rangeFont.addEventListener("input", () => {
  const fontSize = parseFloat(rangeFont.value);
  for (var i = 0; i < sizeLetra.length; i++) {
    var element = sizeLetra[i];
    var newSize = tamañosBase[i] + fontSize; // Suma solo una vez por elemento
    element.style.fontSize = newSize + "px";
    console.log(newSize);
  }
});
</script>

</body>
</html>