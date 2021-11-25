<?php

?>
@extends('layouts.template')

@section('title', 'Listar')

@section('content')
<link rel="stylesheet" href="/css/L_convocatorias.css" class="rel">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<div class="container">
    <form action="/" method="get" enctype="multipart/form-data">
        @csrf
        <h1>Listar Convocatorias</h1>
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
                        <td>{{$l->TITULO_CONV}}</td>
                        <td>{{$l->SEMESTRE_CONV}}</td>
                        <td>{{$l->FECHA_CONV}}</td>
                        <td><a href="/storage/{{$l->DOC_CONV}}" target="_blank">archivo</a></td>


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
