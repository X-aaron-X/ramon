<?php
    use clases\Dimensiones;

    require_once 'autoload.php';

    $dimensiones = new Dimensiones(10, 20, 30);

    echo $dimensiones->getAlto();
    echo $dimensiones->getVolumen();