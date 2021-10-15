@extends('layouts.template')

@section('title', 'Specs')

@section('content')
    <h1>PUBLICAR PLIEGO DE ESPECIFICACIONES</h1>
    <div class="container">


<div>
<label for="Nombre_usuario"> Titulo: </label>
<div>

</div>

        <input type="text" name="Nombre_usuario" id="Nombre_usuario" class="form-control"> 
</div>

<div>
<label for="Seleccionar_fecha"> Seleccionar Fecha: </label>
<div>

        <div class="md-form md-outline input-with-post-icon datepicker">
         <input placeholder="Select date" type="date" id="example" class="form-control">
          
    </div>

    <div>
<label for="Seleccionar_fecha"> Semestre: </label>
<div>
    <div>
    <select class="form-select" aria-label="Default select example">
  <option selected>Seleccione</option>
  <option value="1">1-2021</option>
  <option value="2">2-2021</option>
  <option value="3">1-2022</option>
</select>
    </div>
 
    <div>
<label for="Descripcion"> Descripcion: </label>
<div>

<div class="mb-3">
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<div>
<label for="Adjuntar_documento"> Adjuntar documento: </label>
<div>

<div>
<input type="file" id="files" name="files[]" multiple />
<output id="list"></output>

        </div>

        <div class="d-grid gap-2 d-md-block">
  <button class="btn btn-primary" type="button">Visualizar</button>
  <button class="btn btn-primary" type="button">Publicar</button>
  
</div>
</div>
        @endsection