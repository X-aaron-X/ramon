<form class="container" method="post">
    <div class="row mb-3">
        <div class="col-sm-2">
            <label for="frutas" class="form-label">Elija sus frutas preferidas</label>
        </div>
        <div class="col-sm-10">
            <select class="form-select" id="frutas" class="form-select" name="frutas[]" required>
                <option>Manzana</option>
                <option>Naranja</option>
                <option>Pera</option>
                <option>Pomelo</option>
            </select>
        </div>
    </div>

    <div>
        <button class="btn btn-primary" name="enviar">Enviar</button>
    </div>
</form><br>