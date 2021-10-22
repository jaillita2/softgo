formulario para crear convocatoria

<div class="container">
    <form action="{{route('convocatoria.store')}}" method="post" enctype="multipart/form-data">
        @csrf
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
