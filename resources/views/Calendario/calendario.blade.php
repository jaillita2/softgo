@extends('layouts.template')

@section('title', 'Calendario')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
<div class="container">
<form action="{{route('Plani.store')}}" method="post" enctype="multipart/form-data">
@csrf

<h1>Registrar Calendario</h1>

        <div class="form-group">
        <label for="NOMBRE_GRUPO">Nombre de Grupo empresa: </label><br>
            <input type="text" class="form-control" id="nombre_grupo" name="NOMBRE_GRUPO" placeholder="Ingrese el nombre de grupo-empresa" value="{{old('NOMBRE_GRUPO')}}">
            @error('NOMBRE_GRUPO')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
        <label for="Aclaracion">Aclaracion :</label><br>
            <textarea class="form-control" id="aclaracion" name="ACLARACION" rows="8"></textarea>
        </div>

        <div class="Adjuntar ">
        <label for="DOC_CAL">Adjuntar Archivo:</label><br>
            <input type="file"class="Adjuntar" id="archivoCAL" name="DOC_CAL" value="{{ old('DOC_CAL')}}">
            @error('DOC_CAL')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Enviar</button>
            <button type="button" class="btn btn-primary" onclick="location.href ='/'">Cancelar</button>
        </div>


    </form>
</div>
@endsection