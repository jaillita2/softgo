@extends('layouts.template')

@section('title', 'Emitir_Contratos')

@section('content')
<link rel="stylesheet" href="/css/contratos.css" class="rel">
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
            <li><a href="{{ url('convocatoria') }}"> Convocatoria</a></li>
          
            <li><a href="{{ url('reportes') }}"> Reporte de Propuestas</a></li>
  </div>
</div>

</body>
<div class="container">
    <form action="{{route('contratos.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Emitir Contrato</h1>
        <div class="form-group">
            <label for="TITULO_CONTRATOS">Nombre de grupo empresa:</label><br>
            <input type="text" class="form-control" id="titulo_contratos" name="TITULO_CONTRATOS" placeholder="Ingrese nombre de grupo empresa" value="{{ old('TITULO_CONTRATOS')}}">
            @error('TITULO_CONTRATOS')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group ">
            <label for="DESCRIP_CONTRATOS">Descripción:</label><br>
            <textarea class="form-control" id="descrip_contratos" name="DESCRIP_CONTRATOS" rows="8"></textarea>
        </div>

        <div class="Adjuntar ">
            <label for="DOC_CONTRATOS">Adjuntar Archivo:</label><br>
            <input type="file" class="Adjuntar" id="archivoCONTRATOS" name="DOC_CONTRATOS">
            @error('DOC_CONTRATOS')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Emitir</button>
            <button type="button" class="btn btn-primary" onclick="location.href ='/'">Cancelar</button>
        </div>
        <br>

    </form>

</div>

@endsection
