<?php
    $dato1 = $_GET["numero1"];
    $dato2 = $_GET["numero2"];
    $salida = "";

    if ($dato1 > $dato2) {
        $salida = "El numero {$dato1} es mayor que {$dato2}";
    }
    else {
        $salida = "El numero {$dato2} es mayor que {$dato1}";
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
    <div><?= $salida ?></div>
</body>
</html>