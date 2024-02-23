<form method='post'>
    <div class="row mb-3">
        <div class="col-2">
            <label for="nombre">Nombre</label>
        </div>

        <div class=" col-10">
            <input type='text' name='nombre' id="nombre" class="form-control" value='<?= $datos['nombre'] ?>' required>
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="apellidos">Apellidos</label>
        </div>

        <div class="col-sm-10">
            <input type='text' name='apellidos' id="apellidos" class="form-control" value="<?= $datos['apellidos'] ?>" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="edad">Edad</label>
        </div>

        <div class="col-sm-10">
            <input type='number' name='edad' id="edad" class="form-control" value="<?= $datos['edad'] ?>" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="poblacion">Población</label>
        </div>

        <div class="col-sm-10">
            <input type='text' name='poblacion' id="poblacion" class="form-control" value="<?= $datos['poblacion'] ?>" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="codigoPostal">Código Postal</label>
        </div>

        <div class="col-sm-10">
            <input type='text' name='codigoPostal' id="codigoPostal" class="form-control" value="<?= $datos['codigoPostal'] ?>" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="fechaNacimiento">Fecha de Nacimiento</label>
        </div>

        <div class="col-sm-10">
            <input type='date' name='fechaNacimiento' id="fechaNacimiento" class="form-control" value="<?= $datos['fechaNacimiento'] ?>" required>
        </div>
    </div>

    <div class="text-center">
        <button class="btn btn-primary"> <?= $accion ?> </button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
    </div>
</form>