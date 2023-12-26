<?php
    $positivos = [2,5,10,6];
    $impares = [1,5,11,21];

    if ($positivos[array_key_first($positivos)] > $impares[array_key_last($impares)]) {
        echo "El mayor es: " . $positivos[array_key_first($positivos)];
    }
    else {
        echo "El mayor es: " . $impares[array_key_last($impares)];
    }