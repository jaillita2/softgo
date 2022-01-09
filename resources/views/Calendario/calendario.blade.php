@extends('layouts.template')

@section('title', 'Calendario')

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
      
                    <li><a href="{{ url('Propuesta') }}"> Propuesta</a></li>
                    <li><a href="{{ url('Pagos') }}"> Plan de Pagos</a></li>
                   
                   
                
  </div>
</div>

</body>
<div class="container">
<form action="{{route('Plani.store')}}" method="post" enctype="multipart/form-data">
@csrf

<h1>Registrar Calendario</h1>

        <div class="form-group">
        <label for="NOMBRE_GRUPO">Nombre de Grupo empresa: </label><br>
            <input type="text" class="form-control" id="nombre_grupo" name="NOMBRE_GRUPO" placeholder="Ingrese el nombre de grupo-empresa" value="{{old('NOMBRE_GRUPO')}}">
            @error('NOMBRE_GRUPO')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
        <label for="Aclaracion">Aclaracion :</label><br>
            <textarea class="form-control" id="aclaracion" name="ACLARACION" rows="8"></textarea>
        </div>

        <div class="Adjuntar ">
        <label for="DOC_CAL">Adjuntar Archivo:</label><br>
            <input type="file"class="Adjuntar" id="archivoCAL" name="DOC_CAL" value="{{ old('DOC_CAL')}}">
            @error('DOC_CAL')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group ">
            <button class="btn btn-success" style="background-color: rgb(3, 93, 134);" id="btnAgregar">Enviar</button>
            <button type="button" class="btn btn-primary" onclick="location.href ='/'">Cancelar</button>
        </div>


    </form>
</div>
@endsection