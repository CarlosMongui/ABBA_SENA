<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABAB - Registrarse</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])    

    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
</head>
<body>
    <ul class="nav nav-tabs justify-content-center" style="font-size: 40px; font-family: Merriweather sans, sans-serif; background-color: #b8fda9;">
        <li class="nav-item">
            <a class="nav-link size-letra" id="iniciar" aria-current="page" href="{{ route('login') }}">Iniciar Sesion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active size-letra" id="registrar" aria-current="page">Registrarse</a>
        </li>
    </ul>
    <div class="container-fluid">
        <div class="row" style="background-color: white;">
            
            <div class="col-md-2"></div>

            <div class="col-md-8">
                <form method="POST" action="{{ route('register') }}" class="row g-3 my-5">
                @csrf
                    <div class="col-md-6">
                        <label for="inputName" class="form-label size-letra" style="font-size: 30px; font-family: Merriweather sans, sans-serif;">Nombre</label>
                        <input id="name" type="text" class="form-control size-letra @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label size-letra" style="font-size: 30px; font-family: Merriweather sans, sans-serif;">Correo Electronico</label>
                        <input id="email" type="email" class="form-control size-letra @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            <span style="font-size: 15px;">
                                <strong>Su correo electrónico será mostrado en las publicaciones como medio de comunicación hacia usted</strong>
                            </span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="phone" class="form-label size-letra" style="font-size: 30px; font-family: Merriweather sans, sans-serif;">Telefono</label>
                        <input id="phone" type="text" class="form-control size-letra @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                        
                            <span style="font-size: 15px;">
                                <strong>Su número telefonico se mostrara en sus publicaciones para facilitar la comunicación hacia usted</strong>
                            </span>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="birth_date" class="form-label size-letra" style="font-size: 30px; font-family: Merriweather sans, sans-serif;">Fecha de Nacimiento</label>
                        <input id="birth_date" type="date" class="form-control datapicker @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" required autocomplete="birth_date">

                            @error('birth_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="form-label size-letra" style="font-size: 30px; font-family: Merriweather sans, sans-serif;">Contraseña</label>
                        <div class="btn-group" role="group" aria-label="Basic example">
                                <input id="password" type="password" class="form-control size-letra @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="width: 380px;">
                                <button type="button" class="btn btn-outline-success" onclick="togglePasswordVisibility()" id="passShow">‿</button>
                        </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="password-confirm" class="form-label size-letra" style="font-size: 30px; font-family: Merriweather sans, sans-serif;">Confirmar Contraseña</label>
                        <input id="password-confirm" type="password" class="form-control size-letra" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    
                    <button type="submit" class="btn button btn-outline-success size-letra">Registrarse</button>
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
