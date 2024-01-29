<?php
    use clases\animales\Vaca;
    use clases\animales\Perro;
    use clases\animales\Animal;

    require_once "autoload.php";

    $vaca = new Vaca('Lechera');

    var_dump($vaca);

    echo "<hr>";

    $perro = new Perro();
    $perro2 = new Perro('Firulais');

    var_dump($perro, $perro2);

    echo "<hr>";

    $animal = new Animal();

    var_dump($animal);


