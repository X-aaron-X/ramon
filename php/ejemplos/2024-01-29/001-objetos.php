<?php
    use clases\texto\Cadenas;
    use clases\numeros\Numeros;

    include "autoload.php";

    $objeto1 = new Cadenas("Hola Clase");
    $objeto2 = new Numeros(45);

    var_dump($objeto1, $objeto2);