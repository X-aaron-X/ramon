<?php
// el post esta vacio
var_dump($_POST);

// el files contiene los metadatos de los ficheros subidos
var_dump($_FILES);

// inicializo las variables
$mensaje = "";
// compruebo si he pulsado el boton de enviar
if ($_FILES) {
    if (is_file($_FILES["fichero"]["tmp_name"])) {
        // creo un array con todos los metadatos del fichero
        $miFichero = $_FILES["fichero"];

        // ruta donde guardo los archivos subidos dentro del servidor
        $rutaDestino = "./ficheros/" . $miFichero["name"];

        // para mover el archivo de la carpeta temporal
        // donde lo coloca el servidor a la ruta destino
        $ficheroSubido = move_uploaded_file($miFichero["tmp_name"], $rutaDestino);
        if ($ficheroSubido) {
            $mensaje = "Se ha subido el fichero";
        } else {
            $mensaje = "No se ha podido subir el fichero";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="fichero">
        <br>
        <button>Enviar</button>
    </form>

    <?= $mensaje ?>
</body>

</html>