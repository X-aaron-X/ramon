<form method="post">
    <div class="row mb-3">
        <div class="col-2">
            <label class="col-sm-2 col-form-label" for="url">Url</label>
        </div>
        
        <div class="col-sm-10">
            <input type='text' name='url' id="url" class="form-control" value='<?= $datos['url'] ?>' required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-2">
            <label class="col-sm-2 col-form-label" for="titulo">Titulo</label>
        </div>
        
        <div class="col-sm-10">
            <input type='text' name='titulo' id="url" class="form-control" value="<?= $datos['titulo'] ?>" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-2">
            <label class="col-sm-2 col-form-label" for="descripcion">Descripcion</label>
        </div>
        
        <div class="col-sm-10">
            <input type='text' name='descripcion' id="url" class="form-control" value="<?= $datos['descripcion'] ?>" required>
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            <label for="categorias" class="col-sm-2 col-form-label">Categorias</label>
        </div>
        
        <div class="col-sm-10">
            <input type="text" class="form-control" name="categorias" value="<?= $datos['categorias'] ?>">
        </div>
    </div><br>

    <div class="text-center">
        <button class="btn btn-primary">Insertar</button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
    </div>
</form>