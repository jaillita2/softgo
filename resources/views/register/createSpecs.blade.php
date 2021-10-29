@extends('layouts.template')

@section('title', 'Specs')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
<div class="container">
    <form action="{{route('especificaciones.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>PUBLICAR PLIEGO DE ESPECIFICACION</h1>
        <div class="form-group">
            <label for="TITULO_ESP">Titulo</label><br>
            <input type="text" class="form-control" id="titulo_esp" name="TITULO_ESP" placeholder="Ingrese el Titulo">
        </div>

        <div class="form-group">
            <label for="FECHA_ESP">Seleccionar Fecha:</label><br>
            <input class="form-control" type="date" id="fecha_esp" name="FECHA_ESP" placeholder="Select date">
        </div>

        <div class="form-group">
            <label for="SEMESTRE_ESP">Semestre:</label><br>
            <select name="SEMESTRE_ESP" id="semestre_esp">
                <option value="">Seleccione..</option>
                <option value="1">1º Semestre</option>
                <option value="2">2º Semestre</option>
            </select>
        </div>

        <div class="form-group ">
            <label for="DESCRIP_ESP">Descripcion:</label><br>
            <textarea class="form-control" id="descrip_esp" name="DESCRIP_ESP" rows="8"></textarea>
        </div>

        <div class="form-group ">
            <label for="DOC_ESP">Adjuntar Archivo:</label><br>
            <input type="file" id="archivoESP" name="DOC_ESP">
        </div>

        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Publicar</button>
            <button class="btn btn-warnig" id="btnCancelar">Eliminar</button>
        </div>


    </form>
</div>
@endsection
