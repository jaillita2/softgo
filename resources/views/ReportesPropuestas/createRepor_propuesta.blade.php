@extends('layouts.template')

@section('title', 'Reporte')

@section('content')
<link rel="stylesheet" href="/css/reporte_propuestas.css" class="rel">
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
             <li><a href="{{ url('convocatoria') }}"> Convocatoria</a></li>
  </div>
</div>

</body>

<div class="container data-table-wrapper">
    <form action="/" method="get" enctype="multipart/form-data">
        <h1>Reporte de Propuestas</h1>
        <body>
            <table id="reports-table" class="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Grupo Empresa</th>
                        <th>Archivo</th>
                        <th>Responder</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($empresas as $empresa)
                    <tr>
                        <td> {{ $empresa->NAME_EMP }} </td>
                        <td><a href="/storage/{{$empresa->DOC_P}}" target="_blank">archivo</a></td>
                        {{-- <td>{{$empresa->DOC_P}}</td> --}}
                        <td> <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to={{ $empresa->EMAIL_DOCE }}" target="_blank">
                            Responder </a>
                        </td>
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
    $(document).ready(function() {
        $('#reports-table').DataTable({
            "language": DATA_TABLE_SPANISH_PARAMETERS,
            "info": false
        });
    });
</script>

@endsection