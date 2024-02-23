<?php
    use clases\Personaconstructor;

    require_once 'controlErrores.php';
    require_once 'funciones.php';
    require_once "autoload.php";

    // Obeto de tipo mysqli
    $conexion = new mysqli('localhost','root','','personas1','3307');

    if ($conexion->connect_error) {
        die("La conexion ha fallado: " . $conexion->connect_error);
    }

    // Obeto de tipo mysqli_result
    $resultados = $conexion->query("SELECT * FROM personas");

    // Array asociativo con el primer registro
    $registro = $resultados->fetch_assoc();

    // Leer nombre
    echo $registro['nombre'] . "<br />";
    var_dump($registro);

    // Objeto de tipo stdClass con el segundo registro
    $registro = $resultados->fetch_object();

    // Leer nombre
    echo $registro->nombre . "<br />";
    var_dump($registro);

    // Puedo crear un objeto de tipo Persona
    $registro = $resultados->fetch_object('clases\Persona');

    // Leer nombre
    echo $registro->nombre . "<br />";
    var_dump($registro);

    // Obtenemos el metodo __toString() de perosona
    echo $registro;

    // Quiero utlizar fetch_object para crear unn objeto de tipo Personaconstructor, no puedo porque tiene un constructor y los datos me lo creraria vacios
    // Para solucionar el problema he colocado un constructor especial

    // Opcion 1
    $registro = $resultados->fetch_object('clases\Personaconstructor');

    var_dump($registro);

    echo "<hr>";

    // Utilizamos fetch_assoc y new para crear un objeto de tipo Personaconstructor

    // Opcion 2
    $registro = new clases\Personaconstructor($resultados->fetch_assoc());

    var_dump($registro);
