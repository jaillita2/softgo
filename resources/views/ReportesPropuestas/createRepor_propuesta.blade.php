@extends('layouts.template')

@section('title', 'Reporte')

@section('content')
<link rel="stylesheet" href="/css/reporte_propuestas.css" class="rel">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<div class="container">
    <form action="/" method="get" enctype="multipart/form-data">
        <h1>Reporte de Propuestas</h1>
        <body>
            <table class="table">
                    <th>Grupo Empresa</th>
                    <th>Documento</th>
                    <th>Responder</th>
            </table>
        </body>

        <div class="form-group ">
            <button class="btn btn-warnig" id="btnCancelar">Salir</button>
        </div>

    </form>

</div>