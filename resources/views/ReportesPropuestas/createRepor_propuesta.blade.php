@extends('layouts.template')

@section('title', 'Reporte')

@section('content')
<link rel="stylesheet" href="/css/reporte_propuestas.css" class="rel">

<div class="container data-table-wrapper">
    <form action="/" method="get" enctype="multipart/form-data">
        <h1>Reporte de Propuestas</h1>
        <body>
            <table id="reports-table" class="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Grupo Empresa</th>
                        <th>Documento</th>
                        <th>Responder</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($empresas as $empresa)
                    <tr>
                        <td> {{ $empresa->NAME_EMP }} </td>
                        <td> {{ $empresa->ENC_GR }} </td>
                        <td> <a href="#"> Responder </a> </td>
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