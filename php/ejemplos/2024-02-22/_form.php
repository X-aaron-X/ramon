<form method="post" navbar navbar-dark bg-dark>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="mensaje">Mensaje</label>
        </div>

        <div class="col-sm-10">
            <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Escribe el mensaje" required></textarea>
        </div>
    </div>

    <div class="mb-3 text-center">
        <button class="btn btn-primary"> <?= $accion ?> </button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
    </div>
</form>
