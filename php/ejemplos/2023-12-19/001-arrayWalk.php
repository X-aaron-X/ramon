<?php
    $numeros = [1, 2, 3, 4, 5, 6];

    array_walk($numeros, function ($num) {
        echo $num * $num;
        echo " ";
    });

    echo "<br><br>";

    foreach ($numeros as $num) {
        echo $num * $num;
        echo " ";
    }