<?php
    use src\Padre;

    require_once "../librerias/autoload.php";

    $padre = new Padre("Pepe", "Perez", 18, 180);

    var_dump($padre);