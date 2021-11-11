@extends('layouts.template')

@section('title', 'Propuesta')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
<div class="container">
<form action="{{route('Propuesta.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <h1>Registrar documentacion propuesta</h1>

        <div class="form-group">
            <label for="NAME_P">Nombre:</label><br>
            <input type="text" class="form-control" id="titulo_esp" name="NAME_P" placeholder="Ingrese el Titulo">
        </div>


        <div class="form-group">
            <label for="SEMESTRE_P">Semestre:</label><br>
            <select name="SEMESTRE_P" id="semestre_esp">
                <option value="">Seleccione..</option>
                <option value="1">1º Semestre</option>
                <option value="2">2º Semestre</option>
            </select>
        </div>

        <div class="form-group ">
            <label for="DESCRIP_P">Descripción :</label><br>
            <textarea class="form-control" id="descrip_p" name="DESCRIP_P" rows="8"></textarea>
        </div>

        <div class="Adjuntar ">
            <label for="DOC_P">Adjuntar Archivo:</label><br>
            <input type="file"class="Adjuntar" id="archivoP" name="DOC_P">
        </div>

        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Publicar</button>
            <button class="btn btn-warnig" id="btnCancelar">Cancelar</button>
        </div>


    </form>
</div>
@endsection