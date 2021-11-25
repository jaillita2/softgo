@extends('layouts.template')

@section('title', 'Convocatoria')

@section('content')
<link rel="stylesheet" href="/css/convocatoria.css" class="rel">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<div class="container">
    <form action="{{route('convocatoria.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Publicar convocatoria</h1>
        <div class="form-group">
            <label for="TITULO_CONV">Título:</label><br>
            <input type="text" class="form-control" id="titulo_conv" name="TITULO_CONV" placeholder="Ingrese el Titulo" value="{{ old('TITULO_CONV')}}">
            @error('TITULO_CONV')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="FECHA_CONV">Seleccionar Fecha:</label><br>
            <input class="form-control" type="date" id="fecha_conv" name="FECHA_CONV" placeholder="Select date" value="{{ old('FECHA_CONV')}}">
            @error('FECHA_CONV')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="SEMESTRE_CONV">Semestre:</label><br>
            <select name="SEMESTRE_CONV" id="semestre_conv">
                <option value=""disable>Seleccione..</option>
                <option value="1">1º Semestre</option>
                <option value="2">2º Semestre</option>
            </select>
            @error('SEMESTRE_CONV')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group ">
            <label for="DESCRIP_CONV">Descripción:</label><br>
            <textarea class="form-control" id="descrip_conv" name="DESCRIP_CONV" rows="8"></textarea>
        </div>

        <div class="Adjuntar ">
            <label for="DOC_CONV">Adjuntar Archivo:</label><br>
            <input type="file" class="Adjuntar" id="archivoCONV" name="DOC_CONV">
            @error('DOC_CONV')
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
        <br>

    </form>

</div>

@endsection
