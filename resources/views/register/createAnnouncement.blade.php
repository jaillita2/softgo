formulario para crear pliegos
<div class="container">
    <form action="{{url('convocatoria')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="tituloConvocatoria">Titulo</label>
            <input type="text" class="form-control" id="tituloConvocatoria" name="Titulo" placeholder="Ingrese el Titulo">
        </div>

        <div class="form-group">
            <label for="fechaConvocatoria">Seleccionar Fecha:</label>
            <input class="form-control" type="date" id="fechaConvocatoria" name="fechaConvocatoria" placeholder="Select date">
        </div>

        <div class="form-group">
            <label for="semestreConvocatoria">Semestre:</label>
            <select name="semestreConvocatoria" id="semestreConvocatoria">
                <option value="">Seleccione..</option>
                <option value="1">1º Semestre</option>
                <option value="2">2º Semestre</option>
            </select>
        </div>

        <div class="form-group ">
            <label for="descripcionConvocatoria">Descripcion:</label>
            <textarea class="form-control" id="descripcionConvocatoria" name="descripcionConvocatoria" rows="3"></textarea>
        </div>

        <div class="form-group ">
            <label for="archivoConvocatoria">Descripcion:</label>
            <input type="file" id="archivoConvocatoria" name="archivoConvocatoria">
        </div>

        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Agregar</button>
            <button class="btn btn-warnig" id="btnCancelar">Cancelar</button>
        </div>


    </form>
</div>
