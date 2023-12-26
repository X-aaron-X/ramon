<?php

// CREAR UNA VARIABLE LLAMADA NUMERO CON UN VALOR ENTERO
// REALIZAR LA TABLA DE MULTIPLICAR DE ESE NUMERO (0 HASTA EL 10)

//creamos la variable
$numero = 4;

// realizar la tabla con un while
$contador = 0;
while ($contador <= 10) {
    // opcion 1
    // echo $numero . " x " . $contador . " = " . ($numero * $contador) . "<br>";

    // opcion 2
    $producto = $numero * $contador;
    echo "{$numero} x {$contador} =   {$producto}<br>";

    $contador++;
}


// realizar la tabla con un for
for ($contador = 0; $contador <= 10; $contador++) {
    // opcion 1
    // echo $numero . " x " . $contador . " = " . ($numero * $contador) . "<br>";

    // opcion 2
    $producto = $numero * $contador;
    echo "{$numero} x {$contador} =   {$producto}<br>";
}
