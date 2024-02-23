<h1 class="display-4 text-center">Formulario Directivo</h1>

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
            <label for="sueldo">Horas</label>
        </div>

        <div class="col-sm-10">
            <input type="number" name="horas" id="horas" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="categoria">Categoria</label>
        </div>

        <div class="col-sm-10">
            <input type="text" name="categoria" id="categoria" class="form-control">
        </div>
    </div>

    <div class="text-center">
        <button type="submit" name="directivo" class="btn btn-primary">Almacenar Directivo</button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
    </div>
</form>