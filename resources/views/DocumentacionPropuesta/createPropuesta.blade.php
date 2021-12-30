@extends('layouts.template')

@section('title', 'Propuesta')

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
      
                    <li><a href="{{ url('Grupo') }}"> Grupo-Empresa</a></li>
                    <li><a href="{{ url('Pagos') }}"> Plan de Pagos</a></li>
                    <li><a href="{{ url('Listar') }}"> Listar Documentos</a></li>
                    <li><a href="{{ url('Listarr') }}"> Listar Especificaciones</a></li>
                    <li><a href="{{ url('Cursos') }}"> Registrarse con un consultor</a></li>
                    <li><a href="{{ url('Lista') }}"> listar Grupo-Empresa</a></li>
                    <li><a href="{{ url('Plani') }}"> Calendario</a></li>
                
  </div>
</div>

</body>
<div class="container">
<form action="{{route('Propuesta.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <h1>Registrar documentacion propuesta</h1>

        <div class="form-group">
            <label for="NAME_P">Nombre:</label><br>
            <input type="text" class="form-control" id="titulo_esp" name="NAME_P" placeholder="Ingrese el Titulo" value="{{old('NAME_P')}}">
            @error('NAME_P')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>


        <div class="form-group">
            <label for="SEMESTRE_P">Semestre:</label><br>
            <select name="SEMESTRE_P" id="semestre_esp">
                <option value="">Seleccione..</option>
                <option value="1">1º Semestre</option>
                <option value="2">2º Semestre</option>
            </select>
            @error('SEMESTRE_P')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group ">
            <label for="DESCRIP_P">Descripción :</label><br>
            <textarea class="form-control" id="descrip_p" name="DESCRIP_P" rows="8"></textarea value="{{old('DESCRIP_P')}}">
        </div>

        <div class="Adjuntar ">
            <label for="DOC_P">Adjuntar Archivo:</label><br>
            <input type="file"class="Adjuntar" id="archivoP" name="DOC_P" value="{{old('DOC_P')}}">
            @error('DOC_P')
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