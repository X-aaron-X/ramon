<?php
    if(isset($_POST["enviar"])) {
        $email = $_POST["email"] ?: "";
        $password = $_POST["password"] ?: "";
        $mes = $_POST['mes'] ?? "No has selecionado ningun mes";
        $acceso = isset($_POST['formasAcesos']) ? implode(", ", $_POST['formasAcesos']) : "No has selecionado ninguna forma de acceso";
        $ciudad = isset($_POST['ciudad']) ? implode(", ", $_POST['ciudad']) : "";
        $navegadores = isset($_POST['navegadoresUtilizados']) ? implode(", ", $_POST['navegadoresUtilizados']) : "No has selecionado ningun navegador";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>10</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <form class="container" method="post">
        <div class="row mb-3">
            <div class="col-2">
                <label for="email" class="form-label">Email</label>
            </div>
            <div class="col-10">
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-2">
                <label for="password" class="form-label">Password</label>
            </div>
            <div class="col-10">
                <input type="password" id="password" class="form-control" name="password" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-2">
                <label for="mes" class="form-label">Mes de acceso</label>
            </div>
            <div class="col-10">
                <div class="row-md-4">
                    <input class="form-check-input" type="radio" name="mes" id="Enero" value="Enero">
                    <label class="form-check-label" for="Enero" class="form-label">Enero</label><br>
                    <input class="form-check-input" type="radio" name="mes" id="Febrero" value="Febrero">
                    <label class="form-check-label" for="Febrero" class="form-label">Febrero</label><br>
                    <input class="form-check-input" type="radio" name="mes" id="Marzo" value="Marzo">
                    <label class="form-check-label" for="Marzo" class="form-label">Marzo</label>
                </div>
            </div>
        </div>

        <div class="row row-cols-2 mb-3">
            <div class="col-2">
                <label for="formasAcesos" class="form-label">Formas de acceso</label>
            </div>
            <div class="col-10">
                <input class="form-check-input" type="checkbox" name="formasAcesos[]" id="Telefono" value="Telefono">
                <label class="form-check-label" for="Telefono" class="form-label">Telefono</label><br>
                <input class="form-check-input" type="checkbox" name="formasAcesos[]" id="Ordenador" value="Ordenador">
                <label class="form-check-label" for="Ordenador" class="form-label">Ordenador</label>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-2">
                <label for="Ciudad" class="form-label">Ciudad</label>
            </div>
            <div class="col-sm-10">
                <select class="form-select" id="Ciudad" class="form-select" name="ciudad[]" required>
                    <option value="">Seleciones Ciudad</option>
                    <option value="Santander">Santander</option>
                    <option value="Sevilla">Sevilla</option>
                    <option value="Madrid">Madrid</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-2">
                <label for="navegadoresUtilizados" class="form-label">Navegadores Utilizados</label>
            </div>

            <div class="col-sm-10">
                <select class="form-select" id="navegadoresUtilizados" class="form-select" name="navegadoresUtilizados[]" multiple>
                    <option value="Google">Google</option>
                    <option value="Edge">Edge</option>
                    <option value="Safari">Safari</option>
                </select>
            </div>
        </div>
        
        <div>
            <button class="btn btn-primary" name="enviar">Enviar</button>
        </div>
    </form><br>

    <?php
        if(isset($_POST["enviar"])) {
    ?>
    <h1 class="display-1 text-center">Resultado</h1>
    <table class="container table table-striped-columns table-bordered border-primary">
        <tr>
            <th class="table-primary">Email</th>
            <td class="table-light"> <?= $email ?> </td>
        </tr>
        <tr>
            <th class="table-primary">Password</th>
            <td class="table-light"> <?= $password ?> </td>
        </tr>
        <tr>
            <th class="table-primary">Mes de acceso</th>
            <td class="table-light"> <?= $mes ?> </td>
        </tr>
        <tr>
            <th class="table-primary">Formas de acceso</th>
            <td class="table-light"> <?= $acceso ?> </td>
        </tr>
        <tr>
            <th class="table-primary">Ciudad</th>
            <td class="table-light"> <?= $ciudad ?> </td>
        </tr>
        <tr>
            <th class="table-primary">Navegadores utilizados</th>
            <td class="table-light"> <?= $navegadores ?> </td>
        </tr>
    </table>
    <?php
        }
    ?>
</body>
</html>