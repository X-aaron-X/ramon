<?php

// imprimir los numeros enteros desde 1 hasta el numero 
// introducido en la variable numero
// mediante los 3 bucles (for,while,do while)
$numero = 1;

// utilizando do while
$contador = 1;
do {
    echo $contador;
    $contador++;
} while ($contador <= $numero);

echo "<hr>";
// utilizando while
$contador = 1;
while ($contador <= $numero) {
    echo $contador;
    $contador++;
}
echo "<hr>";
//utilizando for
for ($contador = 1; $contador <= $numero; $contador++) {
    echo $contador;
}
