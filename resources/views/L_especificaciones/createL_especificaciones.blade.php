<?php

?>
@extends('layouts.template')

@section('title', 'Listarr')

@section('content')
<link rel="stylesheet" href="/css/L_especificaciones.css" class="rel">
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
  <li><a href="{{ url('Propuesta') }}"> Propuesta</a></li>
                    <li><a href="{{ url('Grupo') }}"> Grupo-Empresa</a></li>
                    <li><a href="{{ url('Pagos') }}"> Plan de Pagos</a></li>
                    <li><a href="{{ url('Listar') }}"> Listar Documentos</a></li>
                    <li><a href="{{ url('Plani') }}"> Calendario</a></li>
                     <li><a href="{{ url('Cursos') }}"> Registrarse con un consultor</a></li>
  </div>
</div>

</body>
<div class="container">
    <form action="/" method="get" enctype="multipart/form-data">
        @csrf
        <h1>Listar especificaciones</h1>
        <body>
            <table class="table">
                <thead class="thead-dark">
                    <th scope="col">Titulo</th>
                    <th scope="col">Semestre</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Documento</th>
                </thead>
                <tbody>
                    @foreach ($listado as $l )
                    <tr>
                        <td>{{$l->TITULO_ESP}}</td>
                        <td>{{$l->SEMESTRE_ESP}}</td>
                        <td>{{$l->FECHA_ESP}}</td>
                        <td><a href="/storage/{{$l->DOC_ESP}}" target="_blank">archivo</a></td>
                        {{-- <td>{{$l->DOC_ESP}}</td> --}}
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
<script>
    function saveFile(blob, filename) {
        console.log(blob, filename);
        if (window.navigator.msSaveOrOpenBlob) {
            window.navigator.msSaveOrOpenBlob(blob, filename);
        } else {
            const a = document.getElementByid('filelink');
            // document.body.appendChild(a);
            const url = window.URL.createObjectURL(blob);
            a.href = url;
            a.download = filename;
            // a.click();
            setTimeout(() => {
            window.URL.revokeObjectURL(url);
            // document.body.removeChild(a);
            }, 0)
        }
        }
</script>
@endsection
