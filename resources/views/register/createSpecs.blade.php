@extends('layouts.template')

@section('title', 'Especificaciones')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
<div class="container">
    <form action="{{route('especificaciones.store')}}" method="post" enctype="multipart/form-data">
        @csrf
       
        <h1>Publicar pliego de especificaciones</h1>

        <div class="form-group">
            <label for="TITULO_ESP">Título:</label><br>
            <input type="text" class="form-control" id="titulo_esp" name="TITULO_ESP" placeholder="Ingrese el Titulo" value="{{ old('TITULO_ESP')}}">
            @error('TITULO_ESP')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="FECHA_ESP">Seleccionar Fecha:</label><br>
            <input class="form-control" type="date" id="fecha_esp" name="FECHA_ESP" placeholder="Select date" value="{{ old('FECHA_ESP')}}">
            @error('FECHA_ESP')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="SEMESTRE_ESP">Semestre:</label><br>
            <select name="SEMESTRE_ESP" id="semestre_esp">
                <option value="">Seleccione..</option>
                <option value="1">1º Semestre</option>
                <option value="2">2º Semestre</option>
            </select>
            @error('SEMESTRE_ESP')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group ">
            <label for="DESCRIP_ESP">Descripción :</label><br>
            <textarea class="form-control" id="descrip_esp" name="DESCRIP_ESP" rows="8"></textarea>
        </div>

        <div class="Adjuntar ">
            <label for="DOC_ESP">Adjuntar Archivo:</label><br>
            <input type="file"class="Adjuntar" id="archivoESP" name="DOC_ESP" value="{{ old('DOC_ESP')}}">
            @error('DOC_ESP')
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
