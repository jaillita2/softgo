@extends('layouts.template')

@section('title', 'Grupo-Empresa')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
<div class="container">
    <form action="{{route('Grupo.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <h1>Publicar material de apoyo</h1>

        <div class="form-group">
            <label for="NAME_EMP">Nombre de empresa:</label><br>
            <input type="text" class="form-control" id="nombre_emp" name="NAME_EMP" placeholder="Ingrese el Nombre de la empresa">
        </div>

        <div class="form-group">
            <label for="EMAIL_DOCE">Correo electronico:</label><br>
            <input type="email" class="form-control" id="emailDoce" name="EMAIL_DOCE" placeholder="Ingrese el Email">
        </div>

        <div class="form-group">
            <label for="DIRECCION">Direccion:</label><br>
            <input type="text" class="form-control" id="direccion" name="DIRECCION" placeholder="Ingrese la Direccion">
        </div>

        <div class="form-group">
            <label for="TELEFONO">Telefono:</label><br>
            <input type="text" class="form-control" id="telefono" name="TELEFONO" placeholder="Ingrese el Telefono">
        </div>

        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Publicar</button>
            <button class="btn btn-warnig" id="btnCancelar">Cancelar</button>
        </div>


    </form>
</div>
@endsection