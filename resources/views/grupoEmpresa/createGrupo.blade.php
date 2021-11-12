@extends('layouts.template')

@section('title', 'Grupo-Empresa')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
<div class="container">
<form action="{{route('Grupo.store')}}" method="post" enctype="multipart/form-data">
    <h1>Publicar material de apoyo</h1>
        @csrf
        <div class="form-group">
            <label for="NAME_EMP">Nombre de empresa:</label><br>
            <input type="text" class="form-control" id="nombre_emp" name="NAME_EMP" placeholder="Ingrese el Nombre de la empresa" value="{{old('NAME_EMP')}}">
            @error('NAME_EMP')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="EMAIL_DOCE">Correo electronico:</label><br>
            <input type="email" class="form-control" id="emailDoce" name="EMAIL_DOCE" placeholder="Ingrese el Email" value="{{old('EMAIL_DOCE')}}">
            @error('EMAIL_DOCE')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="DIRECCION">Direccion:</label><br>
            <input type="text" class="form-control" id="direccion" name="DIRECCION" placeholder="Ingrese la Direccion" value="{{old('DIRECCION')}}">
            @error('DIRECCION')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="TELEFONO">Telefono:</label><br>
            <input type="text" class="form-control" id="telefono" name="TELEFONO" placeholder="+59171618999" value="{{old('TELEFONO')}}">
            @error('TELEFONO')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>   

    <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Publicar</button>
            <button type="button" class="btn btn-primary" onclick="location.href ='/'">Cancelar</button>
        </div>


    </form>
</div>
@endsection