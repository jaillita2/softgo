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

        <div class="contanier">
            <a href="#" class="logo">LOGO</a>
            <nav class="navigation">
                <ul>
                    <a href="{{ url('users') }}"> Registro usuario</a>
                </ul>
            </nav>
        </div>
    </header>
    <!--nav-->

    @yield('content')

    <!--footer-->
    <!--script-->

</body>
</html>
