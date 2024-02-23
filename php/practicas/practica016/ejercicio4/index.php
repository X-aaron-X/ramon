<?php
    use clases\Superheroes;

    require_once "autoload.php";

    $superman = new Superheroes("Clark Kent");
    $superman = $superman->setDescripcion("Casi superheroe");
    $superman = $superman->setCapa(true);

    echo $superman;