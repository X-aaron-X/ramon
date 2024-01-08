<?php

function sumar($a, $b)
{
    return $a + $b;
}

$numeros = [3, 4];

echo sumar($numeros[0], $numeros[1]);
echo sumar(...$numeros); // convierte el array numeros en variables
