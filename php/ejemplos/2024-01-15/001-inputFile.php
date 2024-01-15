<?php
    $mensaje = "";

    if(isset($_POST["enviar"])) {
         //Creo un array con todos los metadatos del fichero
        $miFichero = $_FILES['fichero'];

        //Ruta donde guardo los archivos subidos dentro de mi servidor
        $rutaDestino = "./ficheros/{$miFichero['name']}";

        //para mover el archivo de la carpeta temporal donde lo coloca el servidor a la ruta destino
        $ficheroSubido = move_uploaded_file($miFichero['tmp_name'], $rutaDestino);

        $mensaje = $ficheroSubido ? "El fichero se ha subido correctamente." : "El fichero no se ha podido subir.";
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
                <input type="file" name="fichero" class="form-control form-control-lg">
            </div>

            <div>
                <button class="btn btn-primary" name="enviar">Enviar</button>
            </div>
        </form>

        <div>
            <p class="fs-3"><?= $mensaje ?></p>
        </div>
    </div>
</body>
</html>