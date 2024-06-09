<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABAB - Iniciar Sesión</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])    

    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
</head>
<body>
    <ul class="nav nav-tabs justify-content-center" style="font-size: 40px; font-family: Merriweather sans, sans-serif; background-color: #b8fda9;">
        <li class="nav-item">
            <a class="nav-link active size-letra" id="iniciar" aria-current="page">Iniciar Sesion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link size-letra" id="registrar" aria-current="page" href="{{ route('register') }}">Registrarse</a>
        </li>
    </ul>

    <div class="container">
        <div class="row" style="background-color: white;">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form method="POST" action="{{ route('login') }}" class="my-5 py-5">
                        @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label size-letra" style="font-size: 30px; font-family: Merriweather sans, sans-serif;">Correo Electronico</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label size-letra" style="font-size: 30px; font-family: Merriweather sans, sans-serif;">Contraseña</label>
                        <div class="btn-group" role="group" aria-label="Basic example">
                                <input id="password" type="password" class="form-control size-letra @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="width: 510px;">
                                <button type="button" class="btn btn-outline-success" onclick="togglePasswordVisibility()" id="passShow">‿</button>
                        </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-outline-success button">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>                        
                </form>
            </div>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const passwordShow = document.getElementById('passShow');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordShow.textContent = "⊙"
                
            } else {
                passwordInput.type = 'password';
                passwordShow.textContent = "‿"
            }
        }
    </script>
</body>
</html>