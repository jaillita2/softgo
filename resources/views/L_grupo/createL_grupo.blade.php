<?php

?>
@extends('layouts.template')

@section('title', 'Lista')

@section('content')
<link rel="stylesheet" href="/css/L_convocatorias.css" class="rel">
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
  <button class="dropbtn">Docente</button>
  <div class="dropdown-content">
            <li><a href="{{ url('especificaciones') }}">Subir Especificaciones</a></li>
            <li><a href="{{ url('MaterialApoyo') }}">Subir Material de Apoyo</a></li>
            <li><a href="{{ url('convocatoria') }}"> Subir Convocatoria</a></li>
            <li><a href="{{ url('contratos') }}"> Emitir Contrato</a></li>
            <li><a href="{{ url('reportes') }}"> Reporte de Propuestas</a></li>
            <li><a href="{{ url('/student') }}"> Lista de estudiantes inscritos</a></li>
            
                   
                
  </div>
</div>

</body>
<div class="container">
    <form action="/" method="get" enctype="multipart/form-data">
        @csrf
        <h1>Listar Grupo-Empresa</h1>
        <body>
            <table class="table">
                <thead class="thead-dark">
                    <th scope="col">nombre</th>
                    <th scope="col">Correo electronico</th>
                    <th scope="col">Representante legal</th>
                    <th scope="col">Socios</th>

                </thead>
                <tbody>
                    @foreach ($listado as $l )
                    <tr>
                        <td>{{$l->NAME_EMP}}</td>
                        <td>{{$l->EMAIL_DOCE}}</td>
                        <td>{{$l->ENC_GR}}</td>
                        <td>{{$l->SOCIOS}}</td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </body>

        <div class="form-group ">
            <button class="btn btn-warnig" id="btnCancelar">Salir</button>
        </div>

    </form>

</div>

@endsection
