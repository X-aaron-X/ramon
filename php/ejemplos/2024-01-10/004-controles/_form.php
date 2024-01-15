<h1 class="display-1 text-center mb-5">Formulario</h1>
<form class="container" method="post">
    <div class="row mb-3">
        <div class="col-1">
            <label for="numero1" class="form-label">Numero 1</label>
        </div>
        <div class="col-11">
            <input type="number" class="form-control" id="numero1" placeholder="Introduce el primer numero" name="numero1" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-1">
            <label for="numero2" class="form-label">Numero 1</label>
        </div>
        <div class="col-11">
            <input type="number" class="form-control" id="numero2" placeholder="Introduce el segundo numero" name="numero2" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-1">
            <label for="numeros" class="form-label">Numeros</label>
        </div>
        <div class="col-11">
            <input type="text" class="form-control" id="numeros" placeholder="Introduce varios numeros separados por ';'" name="numeros" required>
        </div>
    </div>

    <div>
        <button class="btn btn-primary" name="enviar">Enviar</button>
    </div>
</form><br>