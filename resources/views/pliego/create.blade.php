formulario para crear pliegos
<div class="container">
    <form action="{{url('pliego')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="tituloPliego">Titulo</label>
            <input type="text" class="form-control" id="tituloPliego" name="Titulo" placeholder="Ingrese el Titulo">
        </div>

        <div class="form-group">
            <label for="fechaPliego">Seleccionar Fecha:</label>
            <input class="form-control" type="date" id="fechaPliego" name="fechaPliego" placeholder="Select date">
        </div>

        <div class="form-group">
            <label for="semestrePliego">Semestre:</label>
            <select name="semestrePliego" id="semestrePliego">
                <option value="">Seleccione..</option>
                <option value="1">1º Semestre</option>
                <option value="2">2º Semestre</option>                
            </select>            
        </div>

        <div class="form-group ">
            <label for="descripcionPliego">Descripcion:</label>
            <textarea class="form-control" id="descripcionPliego" name="descripcionPliego" rows="3"></textarea>
        </div>

        <div class="form-group ">
            <label for="archivoPliego">Descripcion:</label>
            <input type="file" id="archivoPliego" name="archivoPliego">
        </div>

        <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Agregar</button>
            <button class="btn btn-warnig" id="btnCancelar">Cancelar</button>
        </div>


    </form>
</div>