@extends('layouts.template')

@section('title', 'Create User')

@section('content')

    <label for="Nombre_usuario"> Nombre de usuario </label>
    <input type="text" name="Nombre_usuario" id="Nombre_usuario">
    <br>
    <label for="Contraseña"> Contraseña </label>
    <input type="text" class="Contraseña" id="Contraseña">
    <br>
    <label for="Confirmar_contraseña"> Confirmar contraseña </label>
    <input type="text" class="Confirmar_contraseña" id="Confirmar_contraseña">
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
    <input type="submit" value="Crear usuario" id="Crear">
    <br>
    <input type="submit" value="Cancelar" id="Cancelar">
    <br>
@endsection

