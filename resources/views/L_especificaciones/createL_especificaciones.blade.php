<?php

?>
@extends('layouts.template')

@section('title', 'Listarr')

@section('content')
<link rel="stylesheet" href="/css/L_especificaciones.css" class="rel">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
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
