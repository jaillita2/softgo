@extends('layouts.template')

@section('title', 'Especificaciones')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
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
          
            <li><a href="{{ url('MaterialApoyo') }}"> Material de Apoyo</a></li>
            <li><a href="{{ url('convocatoria') }}"> Convocatoria</a></li>
            <li><a href="{{ url('contratos') }}"> Emitir Contrato</a></li>
            <li><a href="{{ url('reportes') }}"> Reporte de Propuestas</a></li>
  </div>
</div>

</body>
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
            <input type="file"class="Adjuntar" id="doc_esp" name="DOC_ESP" value="{{ old('DOC_ESP')}}">
            @error('DOC_ESP')
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


    </form>
</div>
@endsection
