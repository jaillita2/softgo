@extends('layouts.template')

@section('title', 'Cursos')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
<div class="container">
<form action="{{route('Cursos.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <h1>Registrarse con un consultor</h1>

        <div class="form-group">
            <label for="COD_CURSO">Codigo de consultor:</label><br>
            <input type="text" class="form-control" id="cod_curso" name="COD_CURSO" placeholder="Ingrese el codigo del consultor" value="{{old('COD_CURSO')}}">
            @error('COD_CURSO')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="ID_USER">Codigo SIS:</label><br>
            <input type="text" class="form-control" id="id_user" name="ID_USER" placeholder="Ingresa tu codigo SIS" value="{{old('ID_USER')}}">
            @error('ID_USER')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>


        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Registrarse</button>
            <button type="button" class="btn btn-primary" onclick="location.href ='/'">Cancelar</button>
        </div>

    </form>
</div>
@endsection