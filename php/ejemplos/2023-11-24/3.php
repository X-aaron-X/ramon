<?php
    $a = 10;
    $b = 23.4;
    $c = true;
    $d = [1,2,3];

    $tipo = gettype($a);
    echo "{$tipo} <br>";

    $tipo = gettype($b);
    echo "{$tipo} <br>";

    $tipo = gettype($c);
    echo "{$tipo} <br>";

    //Imprimo el tipo sin usar la variable
    echo gettype($d) . "<br>";