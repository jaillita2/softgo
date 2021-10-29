@extends('layouts.template')

@section('title', 'Specs')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
<div class="container">
    <form action="{{route('especificaciones.store')}}" method="post" enctype="multipart/form-data">
        @csrf
<<<<<<< HEAD
        <?php
        if(isset($_POST['ESP'])){
            $TITULO_ESP = $_POST['TITULO_ESP'];
            $FECHA_ESP = $_POST['FECHA_ESP'];
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
                if($FECHA_ESP == ""){
                    array_push($campos, "el campo fecha no puede  vacio");
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
=======
        <h1>PUBLICAR PLIEGO DE ESPECIFICACION</h1>
>>>>>>> 88ad61c1c59d9e59ba8188b74ab43ab2aedf9b7c
        <div class="form-group">
            <label for="TITULO_ESP">Titulo</label><br>
            <input type="text" class="form-control" id="titulo_esp" name="TITULO_ESP" placeholder="Ingrese el Titulo">
        </div>

        <div class="form-group">
            <label for="FECHA_ESP">Seleccionar Fecha:</label><br>
            <input class="form-control" type="date" id="fecha_esp" name="FECHA_ESP" placeholder="Select date">
        </div>

        <div class="form-group">
            <label for="SEMESTRE_ESP">Semestre:</label><br>
            <select name="SEMESTRE_ESP" id="semestre_esp">
                <option value="">Seleccione..</option>
                <option value="1">1º Semestre</option>
                <option value="2">2º Semestre</option>
            </select>
        </div>

        <div class="form-group ">
            <label for="DESCRIP_ESP">Descripcion:</label><br>
            <textarea class="form-control" id="descrip_esp" name="DESCRIP_ESP" rows="8"></textarea>
        </div>

        <div class="form-group ">
            <label for="DOC_ESP">Adjuntar Archivo:</label><br>
            <input type="file" id="archivoESP" name="DOC_ESP">
        </div>

        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Publicar</button>
            <button class="btn btn-warnig" id="btnCancelar">Eliminar</button>
        </div>


    </form>
</div>
@endsection
