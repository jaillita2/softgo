@extends('layouts.template')

@section('title', 'Specs')

@section('content')
<link rel="stylesheet" href="/css/convocatoria.css" class="rel">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<div class="container">
    <form action="{{route('convocatoria.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <?php
        if(isset($_POST['CONV'])){
            $TITULO_CONV = $_POST['TITULO_CONV'];
            $FECHA_CONV = $_POST['FECHA_CONV'];
            $DESCRIP_CONV = $_POST['DESCRIP_CONV'];
            $DOC_CONV = $_POST['DOC_CONV'];
            
            $campos = array();

                if($TITULO_CONV == ""){
                    array_push($campos, "el campo titulo convocatoria no puede  vacio");
                    if(strlen($TITULO_CONV) > 30){
                        echo "<p class='error'>* el titulo es muy largo </p";
                        if(is_numeric($TITULO_CONV)){
                            echo "<p class='error'>* no esta permitido numeros </p";
                        }
                    }
                }
                if($FECHA_CONV == ""){
                    array_push($campos, "el campo fecha no puede  vacio");
                }
                if($DESCRIP_CONV == ""){
                    array_push($campos, "el campo descripcion convocatoria no puede  vacio");
                    if(strlen($DESCRIP_CONV) > 90){
                        echo "<p class='error'>* Ddescripcion muy larga </p";
                        if(is_numeric($DESCRIP_CONV)){
                            echo "<p class='error'>* no esta permitido numeros </p";
                        }
                    }
                }
                if($DOC_CONV ['archivo']['type'] !='application/pdf'){
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
       
        <h1>Publicar convocatoria</h1>
        <div class="form-group">
            <label for="TITULO_ESP">Título:</label><br>
            <input type="text" class="form-control" id="titulo_esp" name="TITULO_ESP" placeholder="Ingrese el Titulo">
        </div>

        <div class="form-group">
            <label for="FECHA_ESP">Seleccionar Fecha:</label><br>
            <input class="form-control" type="date" id="fecha_esp" name="FECHA_ESP" placeholder="Select date">
        </div>

        <div class="form-group">
            <label for="SEMESTRE_ESP">Semestre:</label><br>
            <select name="SEMESTRE_ESP" id="semestre_esp">
                <option value=""disable>Seleccione..</option>
                <option value="1">1º Semestre</option>
                <option value="2">2º Semestre</option>
            </select>
        </div>

        <div class="form-group ">
            <label for="DESCRIP_ESP">Descripción:</label><br>
            <textarea class="form-control" id="descrip_esp" name="DESCRIP_ESP" rows="8"></textarea>
        </div>

        <div class="Adjuntar ">
            <label for="DOC_ESP">Adjuntar Archivo:</label><br>
            <input type="file" class="Adjuntar" id="archivoESP" name="DOC_ESP">
        </div>

        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Publicar</button>
            <button class="btn btn-warnig" id="btnCancelar">Cancelar</button>
        </div>
        <br>

    </form>
   
</div>

@endsection
