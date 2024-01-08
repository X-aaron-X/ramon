<?php
// funcion que sume todos los numeros que me pases

function sumar()
{
    $numeros = func_get_args();
    return array_sum($numeros);
}

echo sumar(1, 2, 3, 4, 5); // 15

echo sumar(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); // 55
echo sumar(2); // 2
echo sumar(); // 0
