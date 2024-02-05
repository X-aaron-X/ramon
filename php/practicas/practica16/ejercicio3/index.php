<?php
    use Clases\Planetas;

    require_once "autoload.php";

    $planeta1 = new Planetas("Marte", 2, 0.642, 227936, 227936, 3, "GASEOSO", true);
    $planeta2 = new Planetas("Júpiter", 79, 317.8, 778340, 778340, 4, "GASEOSO", true);

    $planeta1->datosPlanetas();
    $planeta2->datosPlanetas();

    echo "<hr>";

    echo $planeta1->calcularDensidad() . "<br>";
    echo $planeta2->calcularDensidad() . "<br>";

    echo "<hr>";

    echo $planeta1->exteriorSistemaSolar() ? "El planeta es visible <br>" : "El planeta no es visible <br>";
    echo $planeta2->exteriorSistemaSolar() ? "El planeta es  Es visible <br>" : "El planeta no es visible <br>";