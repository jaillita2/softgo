<?php

?>
@extends('layouts.template')

@section('title', 'Listar')

@section('content')
<link rel="stylesheet" href="/css/L_convocatorias.css" class="rel">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<div class="container">
    <form action="{{route('L_convocatorias.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Listar Convocatorias</h1>
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
                        <td>{{$l->TITULO_CONV}}</td>
                        <td>{{$l->SEMESTRE_CONV}}</td>
                        <td>{{$l->FECHA_CONV}}</td>
                        <td>
                            <button  class="btn btn-primary" type="button">archivo</button>
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

@endsection
