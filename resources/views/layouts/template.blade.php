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
            <h1>UNIVERSISDAD MAYOR DE SAN SIMON</h1>
            <nav class="navigation">
                <ul>
                    <li><a href="{{ url('users') }}"> Registro usuario</a></li>
                    <li><a href="{{ url('convocatoria') }}"> Convocatoria</a></li>
                    <li><a href="{{ url('especificaciones') }}"> Especificaciones</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!--nav-->

    @yield('content')

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
</body>
</html>
