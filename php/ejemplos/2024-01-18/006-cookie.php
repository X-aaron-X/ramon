<?php
    var_dump($_COOKIE);

    $datos = unserialize($_COOKIE["numeros"]);

    var_dump($datos);
