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

    //mostrar el nombre del primer dato
    echo $datos[0]['nombre'] . "<br>";    

    //mostrar el nombre del segundo dato
    echo $datos[1]['nombre'] . "<br>";

    //mostrar el peso 
    echo $datos[1]['peso'];  