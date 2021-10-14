@extends('layouts.template')

@section('title', 'Create User')

@section('content')

    <form action="{{ url('/users') }}" method="post" enctype="multipart/form-data">
    @csrf

        <label for="Nombre_usuario"> Nombre de usuario </label>
        <input type="text" name="Nombre_usuario" id="Nombre_usuario">
        <br>

        <label for="Contraseña"> Contraseña </label>
        <input type="text" class="Contraseña" id="Contraseña">
        <br>

        <label for="Confirmar_contrasena"> Confirmar contraseña </label>
        <input type="text" class="Confirmar_contrasena" id="Confirmar_contrasena">
        <br>

        <label for="Direccion_correo"> Direccion de correo </label>
        <input type="text" class="Direccion_correo" id="Direccion_correo">
        <br>

        <label for="Apellidos"> Apellido(s) </label>
        <input type="text" class="Apellidos" id="Apellidos">
        <br>

        <label for="Nombre"> Nombre </label>
        <input type="text" class="Nombre" id="Nombre">
        <br>

        <input type="submit" value="Crear usuario">
        <br>
        <input type="submit" value="Cancelar">
        <br>

    </form>
@endsection

