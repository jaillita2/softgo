@extends('layouts.template')

@section('title', 'Plan de pagos')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
<div class="container">
<form action="{{route('Pagos.store')}}" method="post" enctype="multipart/form-data">
@csrf

<h1>Registrar Plan de pagos</h1>

        <div class="form-group">
        <label for="TITULO_PLAN">Titulo: </label><br>
            <input type="text" class="form-control" id="titulo_plan" name="TITULO_PLAN" placeholder="Ingrese el titulo">
            @error('TITULO_PLAN')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
        <label for="DESCRIP_PLAN">Descripción :</label><br>
            <textarea class="form-control" id="descrip_plan" name="DESCRIP_PLAN" rows="8"></textarea>
        </div>

        <div class="Adjuntar ">
        <label for="DOC_PLAN">Adjuntar Archivo:</label><br>
            <input type="file"class="Adjuntar" id="archivoPLAN" name="DOC_PLAN">
            @error('DOC_PLAN')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Publicar</button>
            <button class="btn btn-warnig" id="btnCancelar">Cancelar</button>
        </div>


    </form>
</div>
@endsection