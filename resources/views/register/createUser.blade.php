@extends('layouts.template')

@section('title', 'Create User')

@section('content')

<h1>Nueva cuenta</h1>
<h4>Crear un nuevo usuario y contraseña para acceder al sistema</h4>

    <form method="post" action="{{ url('users') }}">

    {{ csrf_field() }}
        <div class="form-group">
            <label for="name_user"> Nombre de usuario </label>
            <input type="text" name="name_user" id="name_user" placeholder="Juan_Perez">
            <br>
            {!! $errors->first('name_user', '<small>:message</small><br>') !!}

        </div>

        <label for="passwd"> Contraseña </label>
        <input type="password" class="passwd" id="passwd" placeholder="6 caracteres como minimo">
        <br>
        {!! $errors->first('passwd', '<small>:message</small><br>') !!}

        <label for="Confirmar_contrasena"> Confirmar contraseña </label>
        <input type="text" class="Confirmar_contrasena" id="Confirmar_contrasena" placeholder="Repite tu contraseña">
        <br>
        {!! $errors->first('Confirmar_contrasena', '<small>:message</small><br>') !!}

        <label for="email"> Direccion de correo </label>
        <input type="text" class="email" id="email" placeholder="juanperez@example.com">
        <br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <label for="last_name"> Apellido(s) </label>
        <input type="text" class="last_name" id="last_name" placeholder="Perez Maldonado">
        <br>
        {!! $errors->first('last_name', '<small>:message</small><br>') !!}

        <label for="name"> Nombre </label>
        <input type="text" class="name" id="name" placeholder="Juan Pablo">
        <br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <button type="submit">Crear usuario</button>
        <br>
        <button type="submit">Cancelar</button>
        <br>

    </form>
@endsection

