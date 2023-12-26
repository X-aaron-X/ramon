<?php
    $datos = [[
        "nombre"=> "Eva",
        "edad"=> 50,
    ],
    [
        "nombre"=> "Jose",
        "edad"=> 40,
        "peso"=>80
    ]];

    //Mostrar el numero de registros introducios en datos (2)
    echo count($datos) . "<br>";

    //Mostrar el numero de elementos que tiene el registro de eva (2)
    echo count($datos[0]) . "<br>";   