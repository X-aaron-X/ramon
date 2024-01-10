<h1 class="display-1 text-center mb-5">Formulario</h1>
<form class="container" method="post">
    <div class="row mb-3">
        <div class="col-1">
            <label for="nombre" class="form-label">Nombre</label>
        </div>
        <div class="col-11">
            <input type="text" class="form-control" id="nombre" placeholder="Introduce el Nombre" name="nombre" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-1">
            <label for="apellidos" class="form-label">Apellidos</label>
        </div>
        <div class="col-11">
            <input type="text" class="form-control" id="apellidos" placeholder="Introduce los Apellidos" name="apellidos" required>
        </div>
    </div>

    <div>
        <button class="btn btn-primary" name="enviar">Enviar</button>
    </div>
</form><br>