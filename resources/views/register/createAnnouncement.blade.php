@extends('layouts.template')

@section('title', 'Convocatoria')

@section('content')
<link rel="stylesheet" href="/css/convocatoria.css" class="rel">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style ="min-height:10000px">
.dropbtn {
  background-color: rgb(145, 202, 224);
  color: #000000;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: rgb(145, 202, 224);
  min-width: 300px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
      font-family: 'Fjalla One';

}

.dropdown-content a {
  color: #000000;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: rgb(50, 155, 187);}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: rgb(145, 202, 224);}
</style>
</head>
<body>

<div class="dropdown">
  <button class="dropbtn">≡</button>
  <div class="dropdown-content">
            <li><a href="{{ url('especificaciones') }}"> Especificaciones</a></li>
            <li><a href="{{ url('MaterialApoyo') }}"> Material de Apoyo</a></li>
            <li><a href="{{ url('contratos') }}"> Emitir Contrato</a></li>
             <li><a href="{{ url('reportes') }}"> Reporte de Propuestas</a></li>
  </div>
</div>

</body>
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
            <input class="form-control" type="date" id="fecha_conv" name="FECHA_CONV" placeholder="Select date" min="2015-01-01" max="2022-01-31" value="{{ old('FECHA_CONV')}}">
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
