<?php

?>
@extends('layouts.template')

@section('title', 'Listarr')

@section('content')
<link rel="stylesheet" href="/css/L_especificaciones.css" class="rel">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<div class="container">
    <form action="{{route('especificaciones.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Listar especificaciones</h1>
        <body>
            <table>
                <thead>
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
                        <td>{{$l->DOC_ESP}}</td>

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
