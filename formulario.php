<form method="POST" action="insertar_clases.php">
    <div class="form-group">
        <label for="unidad" class="col-sm-2 control-label">Unidad</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="unidad" name="unidad" placeholder="Ingresa la unidad de la clase" required>
        </div>
        <label for="fecha" class="col-sm-2 control-label">Fecha</label>

        <div class="col-sm-4">
            <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha" required>
        </div>
        <div class="col-sm-4">
            <input type="submit" value="Guardar" class="form-control btn btn-primary">
        </div>
    </div>
</form>