@extends('layouts.template')

@section('title', 'Login')

@section('content')

<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
<div class="container">
<form class ="sesi0n" action="{{route('Login.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <h1>Inicio de sesion</h1>

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
            <label for="PASSWD_USER"> Contraseña: </label><br>
            <input class="controls" type="password" name="PASSWD_USER" id="passwd" placeholder="contraseña" value="{{ old('PASSWD_USER')}}">
            @error('PASSWD_USER')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
            </div>


        <div class="form-group ">
            
            <button class="btn btn-success" id="btnAgregar">Iniciar sesion</button>
                  </div>

    </form>
</div>
@endsection
