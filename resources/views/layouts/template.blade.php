<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="/js/bootstrap/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                    <li><a href="{{ url('convocatoria') }}"> Convocatoria</a></li>
                    <li><a href="{{ url('especificaciones') }}"> Especificaciones</a></li>
                    <li><a href="{{ url('MaterialApoyo') }}"> Material de Apoyo</a></li>
                    <li><a href="{{ url('Propuesta') }}"> Propuesta</a></li>
                    <li><a href="{{ url('Grupo') }}"> Grupo-Empresa</a></li>
                    <li><a href="{{ url('Pagos') }}"> Plan de Pagos</a></li>
                    <li><a href="{{ url('Listar') }}"> listar Documentos</a></li>
                    <li><a href="{{ url('Listarr') }}"> listar Especificaciones</a></li>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/scripts.js"></script>

</body>
</html>
