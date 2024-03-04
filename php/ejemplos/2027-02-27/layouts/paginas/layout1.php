<?php
    use clases\Aplicacion;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title> <?= $titulo ?> </title>
</head>
<body>
    <div class="container">
        <div class="row  mb-1">
            <?= Aplicacion::menu(
                'Favoritos',
                [
                    'Inicio' => 'index.php',
                    'Formacion' => 'formacion.php',
                    'Buscador' => 'buscador.php',
                    'Videos' => 'videos.php',
                    'Insertar' => 'insertar.php',
                    'Admin' => 'admin.php',
                ]
            ) ?>
        </div>

        <div class="row">
            <?= $cabecera ?>
        </div>

        <div class="row my-4">
            <?= $contenido ?>
        </div>

        <div class="row">
            <div class="text-center p-3 bg-dark bg-gradient text-white">
                <?= $pie ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>