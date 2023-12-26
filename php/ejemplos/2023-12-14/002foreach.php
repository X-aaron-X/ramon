<?php

// tenemos un array bidimensional
// es un array enumerado
// de arrays asociativos    

$datos = [
    [
        "id" => 1,
        "nombre" => "Juan",
        "apellidos" => "Peña",
    ],
    [
        "id" => 2,
        "nombre" => "Pedro",
        "apellidos" => "Peña",
    ],
    [
        "id" => 3,
        "nombre" => "Ana",
        "apellidos" => "Peña",
    ]
];

// quiero que muestre el array datos en una tabla
// dentro del tbody

// <table>
//     <thead>
//         <th>Id</th>
//         <th>Nombre</th>
//         <th>Apellidos</th>
//     </thead>
//     <tbody>
//         <tr>
//             <td>1</td>
//             <td>Juan</td>
//             <td>Peña</td>
//         </tr>
//         <tr>
//             <td>2</td>
//             <td>Pedro</td>
//             <td>Peña</td>
//         </tr>
//         <tr>
//             <td>3</td>
//             <td>Ana</td>
//             <td>Peña</td>
//         </tr>
//     </tbody>
// </table>


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <table>
        <thead>
            <?php
            foreach ($datos[0] as $nombreCampo => $valorCampo) {
                echo "<th>{$nombreCampo}</th>";
            }
            ?>
        </thead>
        <tbody>
            <?php
            // recorro los registros
            foreach ($datos as $indice => $registro) {
                echo "<tr>";
                // recorro los campos
                foreach ($registro as $campo => $valor) {
                    echo "<td>{$valor}</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>