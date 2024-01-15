<?php
    $mensajes = [];

    if(isset($_POST["enviar"])) {
        $archivos = [
            'imgs' => $_FILES['img'],
            'pdf' => $_FILES['pdf'],
        ];

        foreach ($archivos as $indice => $archivo) {
            $rutaDestino = "./{$indice}/{$archivo['name']}";

            $ficherosSubidos[$indice] = move_uploaded_file($archivo['tmp_name'], $rutaDestino);

            $mensajes[$indice] = $ficherosSubidos[$indice] ? "El fichero {$indice} se ha subido correctamente." : "El fichero {$indice} no se ha podido subir.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Controles Estructura</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="fichero1" class="form-label">Subir solo imagenes</label>
                <input type="file" name="img" id="fichero1" class="form-control form-control-lg">
            </div>

            <div class="row mb-3">
                <label for="fichero2" class="form-label">Subir solo pdfs</label>
                <input type="file" name="pdf" id="fichero2" class="form-control form-control-lg">
            </div>

            <div>
                <button class="btn btn-primary" name="enviar">Enviar</button>
            </div>
        </form><br>

        <?php
            foreach ($mensajes as $mensaje) {
                ?>
                    <div>
                        <p class="fs-3"><?= $mensaje ?></p>
                    </div>
                <?php
            }
        ?>
    </div>
</body>
</html>