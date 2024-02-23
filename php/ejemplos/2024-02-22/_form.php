<form method="post">
    <div class="row mb-3">
        <div class="col-2">
            <label for="mensaje">Mensaje</label>
        </div>
        <div class="col-10">
            <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Escribe el mensaje" required></textarea>
        </div>
    </div>

    <div class="text-center">
        <button class="btn btn-primary"> <?= $accion ?> </button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
    </div>
</form>
