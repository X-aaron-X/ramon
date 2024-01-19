<?php
    $ficheros = [
        "pdf" => [
            "mensaje" => "", // mensaje 
            "archivos" => [], // metadatos
            "rutasDestino" => [], // ruta donde almacenar el archivo
            "ficheroSubido" => [], // comprobar si se ha subido
        ],
        "imagen" => [
            "mensaje" => "",
            "archivos" => [],
            "rutasDestino" => [],
            "ficheroSubido" => [],
        ],
    ];

    // compruebo si he pulsado el boton de enviar
    if ($_FILES) {
       // creo un array con todos los metadatos del fichero
        $ficheros["pdf"]["archivos"] = $_FILES["pdf"];
        $ficheros["imagen"]["archivos"] = $_FILES["imagen"];

        //ruta donde guardo los archivos subidos dentro del servidor
        $ficheros["pdf"]["rutasDestino"] = "./pdf/{$ficheros["pdf"]["archivos"]["name"]}";
        $ficheros["imagen"]["rutasDestino"] = "./imgs/{$ficheros["imagen"]["archivos"]["name"]}";

        $ficheros["pdf"]["ficheroSubido"] = move_uploaded_file(
            $ficheros["pdf"]["archivos"]["tmp_name"],
            $ficheros["pdf"]["rutasDestino"]
        );

        $ficheros["pdf"]["ficheroSubido"] = move_uploaded_file(
            $ficheros["imagen"]["archivos"]["tmp_name"],
            $ficheros["imagen"]["rutasDestino"]
        );

        if ($ficheros["pdf"]["ficheroSubido"]) {
            $ficheros["pdf"]["mensaje"] = "Se ha subido el pdf correctamente";
        }
        else {
            $ficheros["pdf"]["mensaje"] = "No se ha podido subir el pdf";
        }
    
        $fichero["imagen"]["mensaje"] = $ficheros["imagen"]["ficheroSubido"] ? "Se ha subido la imagen correctamente" : "No se ha podido subir la imagen";
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
        <input type="file" name="pdf">
        <br>
        <input type="file" name="imagen">
        <br>
        <button>Enviar</button>
    </form>

    <div>
        <?= $ficheros["pdf"]["mensaje"] ?>
    </div>
    <div>
        <?= $ficheros["pdf"]["mensaje"] ?>
    </div>
</body>
</html>