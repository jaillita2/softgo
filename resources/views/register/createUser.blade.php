@extends('layouts.template')

@section('title', 'Registro')

@section('content')
<?php 
    if(issect($_POST['submit'])){
        $name_user = $_POST['name_user'];
        $id_user = $_POST['id_user'];
        $passwd_user = $_POST['passwd_user'];
        $email = $_POST['email'];
        $last_name = $_POST['email'];
        $name = $_POST['name'];
    }
?>    
<link rel="stylesheet" href="/css/usuario.css" class="rel">

        <form class="form-register" method="post" action="{{ url('users') }}">

            <h1>Nueva cuenta</h1>
            <h4>Crear un nuevo usuario y contraseña para acceder al sistema</h4>
            @csrf

            <label for="NAME_USER"> Nombre de usuario: </label>
            <input class="controls" type="text" name="NAME_USER" id="username" placeholder="Juan_Perez" value="{{ old('ID_USER')}}"><br>

            <label for="ID_USER"> Codigo Sis: </label>
            <input class="controls" type="text" name="ID_USER" id="username" placeholder="2020598923" value="{{ old('ID_USER')}}"><br>

            <label for="PASSWD_USER"> Contraseña: </label>
            <input class="controls" type="password" name="PASSWD_USER" id="passwd" placeholder="Constraseña..." value="{{ old('PASSWD_USER')}}">
            <br>


            <label for="EMAIL"> Direccion de correo: </label>
            <input class="controls" type="email" name="EMAIL" id="email" placeholder="juanperez@example.com" value="{{ old('EMAIL')}}">
            <br>

            <label for="LAST_NAME"> Apellido(s): </label>
            <input class="controls" type="text" name="LAST_NAME" id="last_name" placeholder="Perez Maldonado" value="{{old('LAST_NAME')}}">
            <br>

            <label for="NAME"> Nombre: </label>
            <input class="controls" type="text" name="NAME" id="name" placeholder="Juan Pablo" value="{{ old('NAME')}}">
            <br>

            <button type="submit">Crear usuario</button>
            <br>
            <button type="submit">Cancelar</button>
            <br>
            
            <?php
            include("validaci_user.php")
            ?>

        </form>
@endsection

