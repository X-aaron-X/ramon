<h1 class="display-4 text-center">Formulario Cliente</h1>

<form method="post">
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="nombre">Nombre</label>
        </div>

        <div class="col-sm-10">
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="edad">Edad</label>
        </div>

        <div class="col-sm-10">
            <input type="number" name="edad" id="edad" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="empresa">Nombre Empresa</label>
        </div>

        <div class="col-sm-10">
            <input type="text" name="nombreEmpresa" id="nombreEmpresa" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="telefono">Telefono</label>
        </div>

        <div class="col-sm-10">
            <input type="text" name="telefono" id="telefono" class="form-control">
        </div>
    </div>

    <div class="text-center">
        <button type="submit" name="cliente" class="btn btn-primary">Almacenar Cliente</button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
    </div>
</form>