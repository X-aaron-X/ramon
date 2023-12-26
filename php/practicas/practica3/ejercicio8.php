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

    //Introducir a "lorena" de 80 años y con altura de 175. Realizarlo directamente
    $datos[] = [
        "nombre"=> "Lorena",
        "edad"=> 80
    ];

    foreach ($datos as $valores) {
        foreach ($valores as $key => $valor) {
            echo "{$key}: {$valor} <br>";
        }

        echo "<br>";
    }

    echo "<hr><br>";

    //Introducir a "Luis" de 20 años y con altura de 175. Realizarlo mediante la funcion push
    array_push($datos, 
        [
            "nombre"=> "Luis",
            "edad"=> 20
        ]);
    
    foreach ($datos as $valores) {
        echo "
            Nombre: {$valores['nombre']} <br>
            Edad: {$valores['edad']} <br>";

        if (isset($valores["peso"])) {
            echo "Peso: {$valores['peso']} <br>";
        }

        echo "<br>";
    }