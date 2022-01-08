@extends('layouts.template')

@section('title', 'Cursos')

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
                    <li><a href="{{ url('Grupo') }}"> Grupo-Empresa</a></li>
                    <li><a href="{{ url('Pagos') }}"> Plan de Pagos</a></li>
                    <li><a href="{{ url('Listar') }}"> Listar Documentos</a></li>
                    <li><a href="{{ url('Listarr') }}"> Listar Especificaciones</a></li>
                    <li><a href="{{ url('Lista') }}"> listar Grupo-Empresa</a></li>
                    <li><a href="{{ url('Plani') }}"> Calendario</a></li>
                
  </div>
</div>

</body>
<div class="container">
<form action="{{route('Cursos.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <h1>Registrarse con un Docente</h1>

        <div class="form-group">
            <label for="COD_CURSO">Codigo de consultor:</label><br>
            <input type="text" class="form-control" id="cod_curso" name="COD_CURSO" placeholder="Ingrese el codigo del consultor" value="{{old('COD_CURSO')}}">
            @error('COD_CURSO')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="ID_USER">Codigo SIS:</label><br>
            <input type="text" class="form-control" id="id_user" name="ID_USER" placeholder="Ingresa tu codigo SIS" value="{{old('ID_USER')}}">
            @error('ID_USER')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="ID_USER">Ingresa tu nombre completo:</label><br>
            <input type="text" class="form-control" id="name" name="ESTUDIANTE" placeholder="Juan Pablo Ibañez Soto" value="{{old('ESTUDIANTE')}}">
            @error('ESTUDIANTE')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group ">
            <button class="btn btn-success" style="background-color: rgb(3, 93, 134);" id="btnAgregar">Registrarse</button>
            <button type="button" class="btn btn-primary" onclick="location.href ='/'">Cancelar</button>
        </div>

    </form>
</div>
@endsection