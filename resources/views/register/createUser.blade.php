@extends('layouts.template')

@section('title', 'Registro de estudiantes')

@section('content')
   
<link rel="stylesheet" href="/css/usuario.css" class="rel">

        <form class="form-register" method="post" action="{{ url('users') }}">

        <div id="register">
            <h1>Registrarse como estudiante</h1>
            <h4>Crear un nuevo usuario y contraseña para acceder al sistema</h4>
            @csrf

            
            <div class="form-group">
            <label for="ID_USER"> Código Sis: </label><br>
            <input class="controls" type="text" name="ID_USER" id="username" placeholder="2020598923" value="{{ old('ID_USER')}}">
            @error('ID_USER')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
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

            <div class="form-group">
            <label for="EMAIL"> Dirección de correo: </label><br>
            <input class="controls" type="email" name="EMAIL" id="email" placeholder="juanperez@example.com" value="{{ old('EMAIL')}}">
            @error('EMAIL')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
            </div>

            <div class="form-group">
            <label for="NAME"> Nombre completo: </label><br>
            <input class="controls" type="text" name="NAME" id="name" placeholder="Juan Pablo Ibañez Soto" value="{{ old('NAME')}}">
            @error('NAME')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
            </div>
            
          <button type="submit" style="background-color: rgb(3, 93, 134);">Crear usuario</button>
            <button type="button" class="btn btn-primary" onclick="location.href ='/'">Cancelar</button>
            
            <br>
            </div>
        </form>
@endsection

