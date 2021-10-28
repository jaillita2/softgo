@extends('layouts.template')

@section('title', 'Specs')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
<div class="container">
    <form action="{{route('especificaciones.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="TITULO_ESP">Titulo</label>
            <input type="text" class="form-control" id="titulo_esp" name="TITULO_ESP" placeholder="Ingrese el Titulo">
        </div>

        <div class="form-group">
            <label for="FECHA_ESP">Seleccionar Fecha:</label>
            <input class="form-control" type="date" id="fecha_esp" name="FECHA_ESP" placeholder="Select date">
        </div>

        <div class="form-group">
            <label for="SEMESTRE_ESP">Semestre:</label>
            <select name="SEMESTRE_ESP" id="semestre_esp">
                <option value="">Seleccione..</option>
                <option value="1">1º Semestre</option>
                <option value="2">2º Semestre</option>
            </select>
        </div>

        <div class="form-group ">
            <label for="DESCRIP_ESP">Descripcion:</label>
            <textarea class="form-control" id="descrip_esp" name="DESCRIP_ESP" rows="3"></textarea>
        </div>

        <div class="form-group ">
            <label for="DOC_ESP">Descripcion:</label>
            <input type="file" id="archivoESP" name="DOC_ESP">
        </div>

        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Agregar</button>
            <button class="btn btn-warnig" id="btnCancelar">Cancelar</button>
        </div>


    </form>
</div>
@endsection
