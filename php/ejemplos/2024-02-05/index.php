<?php
    use src\Empleado;
    use src\Cliente;
    use src\Directivo;

    require_once 'autoload.php';

    $empleado = new Empleado();
    $cliente = new Cliente();
    $directivo = new Directivo();

    echo $empleado . '<hr>';
    echo $cliente . '<hr>';
    echo $directivo;