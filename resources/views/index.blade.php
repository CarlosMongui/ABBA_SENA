@extends('plantillas.footer')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABBA</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])    

    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
</head>
<body id="gradient">
    <!-- Logo -->
    <header class="d-flex justify-content-center">
        <div id="navbar-elipse"></div>
        <h1 id="navbar-title">ABBA</h1>
    </header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg border-bottom border-body" style="background-color: #faead4;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
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

    <!-- Deslizador tamaño Letra -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tamaño de Letra</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="range" min="10" max="50" value="29" class="form-range" id="range-font">
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
                        <p id="correo">abba@gmail.com</p>
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
                        <p id="correo">@abba</p>
                    </div>
                    <div class="col-xl-4">
                        <a href="https://facebook.com" target="_blank" class="btn btn-success" style="width: 150px;">Ir</a>
                    </div>
                    <!-- Twitter -->
                    <div class="col-xl-2">
                        <img src="https://img.freepik.com/vector-gratis/nuevo-diseno-icono-x-logotipo-twitter-2023_1017-45418.jpg?w=740&t=st=1710444865~exp=1710445465~hmac=8b270051942330a7fb9f19a99a99bc6a6e08098fbfd89f9f0535c21fb9c2d158" class="card-img-top" alt="..." style="width: 30px;">
                    </div>
                    <div class="col-xl-6">
                        <p id="correo">@abba</p>
                    </div>
                    <div class="col-xl-4">
                        <a href="https://twitter.com" target="_blank" class="btn btn-success" style="width: 150px;">Ir</a>
                    </div>
                    <!-- Instagram -->
                    <div class="col-xl-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png" class="card-img-top" alt="..." style="width: 30px;">
                    </div>
                    <div class="col-xl-6">
                        <p id="correo">@abba</p>
                    </div>
                    <div class="col-xl-4">
                        <a href="https://instagram.com" target="_blank" class="btn btn-success" style="width: 150px;">Ir</a>
                    </div>
                    <!-- Threads -->
                    <div class="col-xl-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Threads_%28app%29_logo.svg/2048px-Threads_%28app%29_logo.svg.png" class="card-img-top" alt="..." style="width: 30px;">
                    </div>
                    <div class="col-xl-6">
                        <p id="correo">@abba</p>
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
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5 size-letra" style="font-size: 18px; text-align: center; font-family: Merriweather, sans-serif; color: #fff">
                        ABBA (<b><em>A</em></b>dopción y/o <b><em>B</em></b>úsqueda en <b><em>B</em></b>ogotá de <b><em>A</em></b>nimales) es un proyecto estudiantil del SENA que busca ayudar en los procesos de búsqueda y 
                        adopción en Bogotá, la capital de Colombia. A través de esta pagina web se podrá notificar sobre la desaparición de una 
                        mascota, donde otros usuarios del municipio pueden verla. También es posible adoptar o poner en adopción mascotas. Con esto se busca 
                        facilitar estos procesos que tienen que ver con los animales domésticos, para que se reencuentren con sus dueños, o consigan dueños 
                        nuevos dispuestos a cuidar de ellos.
                    </p>

                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                        <a class="btn button size-letra btn btn-outline-success" href="{{ route('login') }}" role="button" style="background: #2da16b;">Iniciar Sesion</a>
                        <a class="btn button size-letra btn btn-outline-success" href="{{ route('register') }}" role="button" style="background: #2da16b;">Registrarse</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

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

</body>
</html>