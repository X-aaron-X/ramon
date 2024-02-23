<form method="post">
    <div class="row mb-3">
        <div class="col-2">
            <label for="titulo">Titulo</label>
        </div>
        <div class="col-10">
            <input type="text" name="titulo" id="titulo" class="form-control" value="<?= htmlspecialchars($datos['titulo']) ?>" required>
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="paginas">Paginas</label>
        </div>
        <div class="col-sm-10">
            <input type="number" name="paginas" id="paginas" class="form-control" value="<?= htmlspecialchars($datos['paginas']) ?>" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="fechaPublicacion">Fecha Publicacion</label>
        </div>
        <div class="col-sm-10">
            <input type="date" name="fechaPublicacion" id="fechaPublicacion" class="form-control" value="<?= htmlspecialchars($datos['fechaPublicacion']) ?>" required>
        </div>
    </div>

    <div class="text-center">
        <button class="btn btn-primary"> <?= $accion ?> </button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
    </div>
</form>
