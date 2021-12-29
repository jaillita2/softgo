<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/data-tables-1.11.3/dataTables.bootstrap4.min.css"/>
    <script src="js/jquery-3.6.0.min.js"></script>
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
                    <li><a href="{{ url('/') }}"> Pagina Principal</a></li>
                    <li><a href="{{ url('users') }}"> Registro usuario</a></li>
                    <li><a href="{{ url('convocatoria') }}"> Convocatoria</a></li>
                    <li><a href="{{ url('especificaciones') }}"> Pliego de especificaciones</a></li>
                    <li><a href="{{ url('MaterialApoyo') }}"> Material de Apoyo</a></li>
                    <li><a href="{{ url('Propuesta') }}"> Propuesta</a></li>
                    <li><a href="{{ url('Grupo') }}"> Grupo-Empresa</a></li>
                    <li><a href="{{ url('Pagos') }}"> Plan de Pagos</a></li>
                    <li><a href="{{ url('Listar') }}"> Listar Documentos</a></li>
                    <li><a href="{{ url('Listarr') }}"> Listar Especificaciones</a></li>
                    <li><a href="{{ url('Plani') }}"> Calendario</a></li>
                    <li><a href="{{ url('Cursos') }}"> Registrarse con un consultor</a></li>
                    <li><a href="{{ url('Lista') }}"> listar Grupo-Empresa</a></li>
                    <li><a href="{{ url('contratos') }}"> Emitir Contrato</a></li>
                    <li><a href="{{ url('reportes') }}"> Reporte de Propuestas</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!--nav-->

    @yield('content')

    <footer class="footer">
        <link rel="stylesheet" href="/css/style.css" class="rel">
        <div id="logo2"></div>
            <div class="contaniers">
                <p>Contactanos</p>
                <p>Email: softgo2021@gmail.com</p>
                <p>Telefono celular: +5916776293</p>
                <P>Direccion: Av. Blanco Galindo KM 3</P>
                <p>Copyright 2021 - Pagina creada por SOFTGO - Todos los derechos reservados</p>
            </div>

    </footer>
    <!--script-->
    <script src="/js/scripts.js"></script>
    <script src="js/constants.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/data-tables-1.11.3/jquery.dataTables.js"></script>
    <script type="text/javascript" src="js/data-tables-1.11.3/dataTables.bootstrap4.min.js"></script>
</body>
</html>
