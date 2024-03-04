    <div class="row mb-3">
        <div class="col-2">
            <label for="<?= $datos['label'] ?>"> <?= $datos['label'] ?> </label>
        </div>

        <div class=" col-10">
            <input type='text' name='<?= $datos['label'] ?>' id="<?= $datos['label'] ?>" class="form-control" value='<?= $datos['input'] ?>' required>
        </div>
    </div>

    <div class="text-center">
        <button class="btn btn-primary"> <?= $accion ?> </button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
    </div>
