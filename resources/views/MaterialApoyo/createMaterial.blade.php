@extends('layouts.template')

@section('title', 'Material de apoyo')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
<div class="container">
    <form action="{{route('MaterialApoyo.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <h1>Publicar material de apoyo</h1>

        <div class="form-group">
            <label for="TITULO_APO">Nombre:</label><br>
            <input type="text" class="form-control" id="titulo_apo" name="TITULO_APO" placeholder="Ingrese el Titulo" value="{{old('TITULO_APO')}}">
            @error('TITULO_APO')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group ">
        <label for="DESCRIP_APO">Descripción :</label><br>
            <textarea class="form-control" id="descrip_apo" name="DESCRIP_APO" rows="8"></textarea>
        </div>

        <div class="Adjuntar ">
            <label for="DOC_APO">Adjuntar Archivo:</label><br>
            <input type="file"class="Adjuntar" id="DOC_APO" name="DOC_APO">
        </div>

        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Publicar</button>
            <button type="button" class="btn btn-primary" onclick="location.href ='/'">Cancelar</button>
        </div>


    </form>
</div>
@endsection