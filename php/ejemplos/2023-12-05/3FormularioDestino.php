<?php
    $num1 = $_GET["numero1"];
    $num2 = $_GET["numero2"];
    $salida = "";

    if ($num1 > $num2) {
        $salida = "El número {$num1} es mayor que {$num2}";
    }
    else if ($num2 > $num1) {
        $salida = "El numero {$num2} es mayor que {$num1}";
    }
    else {
        $salida = "El numero {$num1} es igual que {$num2}";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Destino</title>
</head>
<body>
    <div>
        <?= $salida ?>
    </div>
</body>
</html>