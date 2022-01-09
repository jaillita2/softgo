@extends('layouts.template')

@section('title', 'Grupo-Empresa')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">

@if($flash = Session::get('exito'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>ATENCION!!!</strong> {{$flash}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
<div class="container">
<form action="{{route('Grupo.store')}}" method="post" enctype="multipart/form-data">
    <h1>Registro de Grupo-Empresa</h1>
        @csrf
        <div class="form-group">
            <label for="NAME_EMP">Nombre de Grupo-Empresa:</label><br>
            <input type="text" class="form-control" id="nombre_emp" name="NAME_EMP" placeholder="Ingrese el Nombre de la empresa" value="{{old('NAME_EMP')}}">
            @error('NAME_EMP')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="EMAIL_DOCE">Correo electronico de Grupo-Empresa:</label><br>
            <input type="email" class="form-control" id="emailDoce" name="EMAIL_DOCE" placeholder="Ingrese el Email" value="{{old('EMAIL_DOCE')}}">
            @error('EMAIL_DOCE')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="DIRECCION">Direccion de la Grupo-Empresa:</label><br>
            <input type="text" class="form-control" id="direccion" name="DIRECCION" placeholder="Ingrese la Direccion" value="{{old('DIRECCION')}}">
            @error('DIRECCION')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="TELEFONO">Telefono de la Grupo-Empresa:</label><br>
            <input type="text" class="form-control" id="telefono" name="TELEFONO" placeholder="+59171618999" value="{{old('TELEFONO')}}">
            @error('TELEFONO')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>  
        <div class="form-group">
            <label for="ENC_GR">Nombre Completo del Representante legal:</label><br>
            <input type="text" class="form-control" id="enc_gr" name="ENC_GR" placeholder="Encargado de grupo" value="{{old('ENC_GR')}}">
            @error('ENC_GR')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
            <label for="ENC_GR"></label>
        </div>
        <div class="form-group ">
            <label for="SOCIOS">Socios:</label><br>
            <textarea class="form-control" id="socios" name="SOCIOS" placeholder="Juan Pablo Ibañez Soto" rows="8"></textarea>
            @error('SOCIOS')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div> 

    <div class="form-group ">
            <button class="btn btn-success" style="background-color: rgb(3, 93, 134);" id="btnAgregar">Guardar</button>
            <button type="button" class="btn btn-primary" onclick="location.href ='/'">Cancelar</button>
        </div>


    </form>
</div>
@endsection