<?php
    $a = 5;
    $b = 10;

    $operaciones = [
        "Sumar"=> $a + $b,
        "Restar"=> $a - $b,
        "Multiplicacion"=> $a * $b,
        "Division"=> $a / $b,
        "RaizCuadrada"=> sqrt($a),
        "Elevado"=> $a ** $b
    ];

    foreach ($operaciones as $indice => $valor) {
        echo "{$indice} => {$valor} <br>";
    }