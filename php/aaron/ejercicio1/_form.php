<form method="post" action="paso2.php">
    <div class="row mb-3">
        <div class="col-2">
            <label for="numero">Tamaño de la Tabla</label>
        </div>

        <div class="col-10">
            <input type="number" name="numero" id="numero" class="form-control" placeholder="Introduce un numero" required>
        </div>
    </div>

    <div class="text-left">
        <button class="btn btn-primary" name="enviar">Dibujar</button>
        <button type="reset" class="btn btn-secondary">Restablecer</button>
    </div>
</form>