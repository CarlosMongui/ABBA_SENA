<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield("title")</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])    

    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
</head>
<body >
    <!-- Logo -->
    <header class="d-flex justify-content-center">
        <div id="navbar-elipse"></div>
        <h1 id="navbar-title">ABBA</h1>
        @yield("subtitle")
    </header>
    
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg border-bottom border-body" id="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                <!-- Botón salir -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        {{ method_field('POST') }}
                        <input class="btn btn-outline-danger button navbar-items" type="submit" value="Logout" style="font-size: 20px;">
                    </form>
                </li>
                <li class="nav-item">
                    <!-- publicaciones -->
                    @yield("publicaciones-navbar")
                </li>
            
                    <!-- Menu admin -->
                    @if (auth()->user()->admin === 1)
                        <li class="nav-item">
                            <a class="nav-link navbar-items" href="{{ route('admin.posts') }}" style="color: black;">Administrador</a>
                        </li>
                    @endif
                </ul>
                
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <!-- Botón configuración -->
                        <a class="nav-link navbar-items" href="{{ route('user.config') }}" style="color: black;">Configuracion</a>
                    </li>
                    <li class="nav-item">
                        <!-- Botón accesiblidad -->
                        <button type="button" class="btn navbar-items" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Accesibilidad
                        </button>
                    </li>
                    <li class="nav-item">
                        <!-- Botón contactos -->
                        <button type="button" class="btn navbar-items" data-bs-toggle="modal" data-bs-target="#contactos">
                            Contactos
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Modal accesiblidad -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="tamañoLetralLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Deslizador de cambio de tamaño de la letra -->
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tamañoLetraLabel">Tamaño de Letra</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="range" min="0" max="30" value="0" class="form-range" id="range-font">
                </div>
                <!-- Boton contraste -->
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
    
    @yield("content")

    @include("plantillas.footer")




    <!-- Script copiar texto en los contactos -->
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

    <!-- Script cambio del tamaño de la letra -->
    <script>
        const rangeFont = document.getElementById("range-font");
        const sizeLetra = document.getElementsByClassName("size-letra");

        const tamañosBase = Array.from(sizeLetra).map(element => parseFloat(window.getComputedStyle(element).fontSize));

        rangeFont.addEventListener("input", () => {
            const fontSize = parseFloat(rangeFont.value);
            for (var i = 0; i < sizeLetra.length; i++) {
                var element = sizeLetra[i];
                var newSize = tamañosBase[i] + fontSize;
                element.style.fontSize = newSize + "px";
                console.log(newSize);
            }
        });
    </script>

    <!-- Script cambio contraste -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toggleButton = document.getElementById('toggleContrast');

            if (localStorage.getItem('highContrastEnabled') === 'true') {
                document.body.classList.add('high-contrast');
            }

            toggleButton.addEventListener('click', function () {
                document.body.classList.toggle('high-contrast');
            
                var highContrastEnabled = document.body.classList.contains('high-contrast');
                localStorage.setItem('highContrastEnabled', highContrastEnabled);
            });
        });
    </script>
</body>
</html>