<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!--favicon-->
    <!--styles-->
</head>
<body>

    <!--header-->
    <header class="header">
        <link rel="stylesheet" href="/css/style.css" class="rel">
        <div class="contanier logo-nav-contanier">
            <div id="logo"></div>
            <h1>UNIVERSIDAD MAYOR DE SAN SIMON</h1>
            <span class="menu-icon">Menu</span>
            <nav class="navigation">
                <ul>
                    <li><a href="{{ url('users') }}"> Registro usuario</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!--nav-->

    <link rel="stylesheet" href="/css/especificaciones.css" class="rel">
    <div class="container">
        <form method="post">
            <h1>Inicio de sesion</h1>

            @csrf
            <div class="form-group">
            <label for="NAME_USER"> Nombre de usuario: </label><br>
            <input class="controls" type="text" name="NAME_USER" id="username" placeholder="Juan_Perez" value="{{ old('NAME_USER')}}">
            @error('NAME_USER')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
            <br>
            </div>

            <div class="form-group">
            <label for="PASSWD_USER"> Contraseña: </label><br>
            <input class="controls" type="password" name="PASSWD_USER" id="passwd" placeholder="contraseña" value="{{ old('PASSWD_USER')}}">
            @error('PASSWD_USER')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
            </div>

            <button type="submit">Iniciar sesion</button>
            <!--<button type="button" class="btn btn-primary" onclick="location.href ='/'">Cancelar</button>-->
            
            <br>
        </form>
    </div>
    <footer class="footer">
        <link rel="stylesheet" href="/css/style.css" class="rel">
            <div class="contaniers">
                <p>Contactanos</p>
                <p>Email: softgo2021@gmail.com</p>
                <p>Telefono celular: +5916776293</p>
                <P>Direccion: Av. Blanco Galindo KM 3</P>
                <p>Copyright 2021 - Pagina creada por SOFTGO - Todos los derechos reservados</p>
            </div>

    </footer>
    <!--script-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/scripts.js"></script>

</body>
</html>