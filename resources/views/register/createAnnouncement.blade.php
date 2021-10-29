

@extends('layouts.template')

@section('title', 'Convocatoria')

@section('content')
<link rel="stylesheet" href="/css/convocatoria.css" class="rel">
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
        <div class="form-group">
            <label for="TITULO_CONV">Titulo</label>
            <input type="text" class="form-control" id="tituloConvocatoria" name="TITULO_CONV" placeholder="Ingrese el Titulo">
        </div>

        <div class="form-group">
            <label for="FECHA_CONV">Seleccionar Fecha:</label>
            <input class="form-control" type="date" id="fechaConvocatoria" name="FECHA_CONV" placeholder="Select date">
        </div>

        <div class="form-group">
            <label for="SEMESTRE_CONV">Semestre:</label>
            <select name="SEMESTRE_CONV" id="semestreConvocatoria">
                <option value="">Seleccione..</option>
                <option value="1">1º Semestre</option>
                <option value="2">2º Semestre</option>
            </select>
        </div>

        <div class="form-group ">
            <label for="DESCRIP_CONV">Descripcion:</label>
            <textarea class="form-control" id="descripcionConvocatoria" name="DESCRIP_CONV" rows="3"></textarea>
        </div>

        <div class="form-group ">
            <label for="DOC_CONV">Descripcion:</label>
            <input type="file" id="archivoConvocatoria" name="DOC_CONV">
        </div>

        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Agregar</button>
            <button class="btn btn-warnig" id="btnCancelar">Cancelar</button>
        </div>


    </form>
</div>
@endsection
