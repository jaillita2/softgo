@extends('layouts.template')

@section('title', 'Material de apoyo')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
@if($flash = Session::get('exito'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>ATENCION!!!</strong> {{$flash}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
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
            
            <li><a href="{{ url('convocatoria') }}"> Subir Convocatoria</a></li>
            <li><a href="{{ url('contratos') }}"> Emitir Contrato</a></li>
            <li><a href="{{ url('reportes') }}"> Reporte de Propuestas</a></li>
            <li><a href="{{ url('/student') }}"> Lista de estudiantes inscritos</a></li>
            <li><a href="{{ url('Lista') }}"> Lista de GrupoEmpresas</a></li>
  </div>
</div>

</body>
<div class="container">
    <form action="{{route('MaterialApoyo.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <h1>Publicar material de apoyo</h1>

        <div class="form-group">
            <label for="TITULO_APO">Nombre:</label><br>
            <input type="text" class="form-control" id="titulo_apo" name="TITULO_APO" placeholder="Ingrese el Titulo" value="{{old('TITULO_APO')}}">
            @error('TITULO_APO')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group ">
        <label for="DESCRIP_APO">Descripci??n :</label><br>
            <textarea class="form-control" id="descrip_apo" name="DESCRIP_APO" rows="8"></textarea>
        </div>

        <div class="Adjuntar ">
            <label for="DOC_APO">Adjuntar Archivo:</label><br>
            <input type="file"class="Adjuntar" id="DOC_APO" name="DOC_APO">
        </div>

        <div class="form-group ">
            <button class="btn btn-success" style="background-color: rgb(3, 93, 134);" id="btnAgregar">Publicar</button>
            <button type="button" class="btn btn-primary" onclick="location.href ='/'">Cancelar</button>
        </div>

    </form>
</div>
@endsection