@extends('layouts.template')

@section('title', 'Material de apoyo')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
<div class="container">
    <form action="{{route('MaterialApoyo.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <?php
        if(isset($_POST['ESP'])){
            $TITULO_ESP = $_POST['TITULO_ESP'];
            $DESCRIP_ESP = $_POST['DESCRIP_ESP'];
            $DOC_ESP = $_POST['DOC_ESP'];
            
            $campos = array();

                if($TITULO_ESP == ""){
                    array_push($campos, "el campo titulo convocatoria no puede  vacio");
                    if(strlen($TITULO_ESP) > 30){
                        echo "<p class='error'>* el titulo es muy largo </p";
                        if(is_numeric($TITULO_ESP)){
                            echo "<p class='error'>* no esta permitido numeros </p";
                        }
                    }
                }
                if($DESCRIP_ESP == ""){
                    array_push($campos, "el campo descripcion convocatoria no puede  vacio");
                    if(strlen($DESCRIP_ESP) > 90){
                        echo "<p class='error'>* Ddescripcion muy larga </p";
                        if(is_numeric($DESCRIP_ESP)){
                            echo "<p class='error'>* no esta permitido numeros </p";
                        }
                    }
                }
                if($DOC_ESP ['archivo']['type'] !='application/pdf'){
                    echo 'es un archivo pdf';
                }else{
                     echo "El archivo SI es pdf";
                }

                if(count($campos) > 0){
                    echo "<div class='error'>";
                            for($i = 0; $i < count($campos); $i++){
                                echo "<li>".$campos[$i]."</div>";
                            }
                        }else{
                            echo "<div class='correcto'>
                                    datos correctos";
                            }
                            echo "</div>";
        }
        ?>

        <h1>Publicar pliego de especificaciones</h1>

        <div class="form-group">
            <label for="TITULO_ESP">Nombre:</label><br>
            <input type="text" class="form-control" id="titulo_esp" name="TITULO_ESP" placeholder="Ingrese el Titulo">
        </div>

        <div class="form-group ">
            <label for="DESCRIP_ESP">Descripción :</label><br>
            <textarea class="form-control" id="descrip_esp" name="DESCRIP_ESP" rows="8"></textarea>
        </div>

        <div class="Adjuntar ">
            <label for="DOC_ESP">Adjuntar Archivo:</label><br>
            <input type="file"class="Adjuntar" id="archivoESP" name="DOC_ESP">
        </div>

        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Publicar</button>
            <button class="btn btn-warnig" id="btnCancelar">Cancelar</button>
        </div>


    </form>
</div>
@endsection