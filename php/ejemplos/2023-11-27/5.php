<?php
    //datos del alumno con la nota mas alta

    $datos = [
        "id"=> 23,
        "Nombre"=> "Eva",
        "Apellidos"=> "Gomez Palomo",
        "Poblacion"=> "Laredo"
    ];
?>

<table border="1">
    <tr>
        <th>Campo</th>
        <th>Valor</th>
    </tr>
    <tr>
        <td>ID</td>
        <td><?= $datos["id"] ?></td>
    </tr>
    <tr>
        <td>Nombre</td>
        <td><?= $datos["Nombre"] ?></td>
    </tr>
    <tr>
        <td>Apellidos</td>
        <td><?= $datos["Apellidos"] ?></td>
    </tr>
    <tr>
        <td>Poblacion</td>
        <td><?= $datos["Poblacion"] ?></td>
    </tr>
</table>