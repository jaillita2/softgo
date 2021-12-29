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
                        <th>Responder</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($empresas as $empresa)
                    <tr>
                        <td> {{ $empresa->NAME_EMP }} </td>
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