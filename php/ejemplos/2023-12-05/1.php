<?php
    $numero1 = 120;
    $numero2 = 23;
    $salida = "";

    //Comprobar si el numero1 es mayor que el numero2
    if ($numero1 > $numero2) {
        $salida = "El numero1 es mayor";
    }
    else {
        $salida = "El numero1 es menor";
    }
?>

<div>
    <?= $salida ?>
</div>