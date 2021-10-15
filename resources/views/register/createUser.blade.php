@extends('layouts.template')

@section('title', 'Create User')

@section('content')
<link rel="stylesheet" href="/css/usuario.css" class="rel">

        <form class="form-register" method="post" action="{{ url('users') }}">

            <h1>Nueva cuenta</h1>
            <h4>Crear un nuevo usuario y contraseña para acceder al sistema</h4>
            @csrf

            <label for="username"> Nombre de usuario: </label>
            <input class="controls" type="text" name="username" id="username" placeholder="Juan_Perez" value="{{ old('username')}}"><br>
            {!! $errors->first('username', '<small>:message</small><br>') !!}

            <label for="passwd"> Contraseña: </label>
            <input class="controls" type="password" class="passwd" id="passwd" placeholder="Constraseña..." value="{{ old('passwd')}}">
            <br>
            {!! $errors->first('passwd', '<small>:message</small><br>') !!}

            <label for="Confirmar_contrasena"> Confirmar contraseña: </label>
            <input class="controls" type="password" class="Confirmar_contrasena" id="Confirmar_contrasena" placeholder="Repite tu contraseña" value="{{ old('Confirmar_contrasena')}}">
            <br>
            {!! $errors->first('Confirmar_contrasena', '<small>:message</small><br>') !!}

            <label for="email"> Direccion de correo: </label>
            <input class="controls" type="email" class="email" id="email" placeholder="juanperez@example.com" value="{{ old('email')}}">
            <br>
            {!! $errors->first('email', '<small>:message</small><br>') !!}

            <label for="last_name"> Apellido(s): </label>
            <input class="controls" type="text" class="last_name" id="last_name" placeholder="Perez Maldonado" value="{{old('last_name')}}">
            <br>
            {!! $errors->first('last_name', '<small>:message</small><br>') !!}

            <label for="name"> Nombre: </label>
            <input class="controls" type="text" class="name" id="name" placeholder="Juan Pablo" value="{{ old('name')}}">
            <br>
            {!! $errors->first('name', '<small>:message</small><br>') !!}

            <button type="submit">Crear usuario</button>
            <br>
            <button type="submit">Cancelar</button>
            <br>

        </form>
@endsection

