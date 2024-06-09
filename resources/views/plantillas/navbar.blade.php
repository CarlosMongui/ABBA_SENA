<!-- Logo -->
<header class="d-flex justify-content-center">
    <div id="navbar-elipse"></div>

    <h1 id="navbar-title">ABAB</h1>
    <h2 id="navbar-subtitle">@yield("subtitle")</h2>
</header>
<!-- Responsive navbar
<header class="d-flex justify-content-center">
        <div id="navbar-elipse">
        </div>
        <h1 id="navbar-title">ABAB</h1>
        <h2 id="navbar-subtitle">@yield("subtitle")</h2>
    </header>
    
    <nav class="navbar navbar-expand-lg border-bottom border-body" style="background-color: #faead4;">
        <div class="container-fluid button">
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
                <button type="button" class="btn navbar-items" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #faead4;">
                  Accesibilidad
                </button>
              </li>
              <li class="nav-item">
                <a class="nav-link active navbar-items" href="contacto.html">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

       Modal
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tamaño de Letra</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <input type="range" min="10" max="70" value="16" class="form-range" id="range-font">
            </div>
          </div>
        </div>
      </div>
-->

<!--
<nav nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                <li class="nav-item"><a class="nav-link" href=">{{route('newpost')}}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>
-->