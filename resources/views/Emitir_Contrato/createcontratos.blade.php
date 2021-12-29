@extends('layouts.template')

@section('title', 'Emitir_Contratos')

@section('content')
<link rel="stylesheet" href="/css/contratos.css" class="rel">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<div class="container">
    <form action="{{route('contratos.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Emitir Contrato</h1>
        <div class="form-group">
            <label for="TITULO_CONTRATOS">Nombre de grupo empresa:</label><br>
            <input type="text" class="form-control" id="titulo_contratos" name="TITULO_CONTRATOS" placeholder="Ingrese nombre de grupo empresa" value="{{ old('TITULO_CONTRATOS')}}">
            @error('TITULO_CONTRATOS')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group ">
            <label for="DESCRIP_CONTRATOS">Descripción:</label><br>
            <textarea class="form-control" id="descrip_contratos" name="DESCRIP_CONTRATOS" rows="8"></textarea>
        </div>

        <div class="Adjuntar ">
            <label for="DOC_CONTRATOS">Adjuntar Archivo:</label><br>
            <input type="file" class="Adjuntar" id="archivoCONTRATOS" name="DOC_CONTRATOS">
            @error('DOC_CONTRATOS')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Emitir</button>
            <button type="button" class="btn btn-primary" onclick="location.href ='/'">Cancelar</button>
        </div>
        <br>

    </form>

</div>

@endsection
