<?php

// recorrer el siguiente array asociativo colocando
// en una lista los valores

$colores = [
    "rojo" => "red",
    "verde" => "green",
    "azul" => "blue"
];

?>

<ul>
    <?php
    foreach ($colores as $clave => $valor) {
        echo "<li>$clave: $valor</li>";
    }
    ?>
</ul>