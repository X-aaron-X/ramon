<?php
    //datos del alumno con la nota mas alta

    $datos = [23,"Eva","Gomez Palomo","Laredo"];
?>

<table border="1">
    <tr>
        <th>Campo</th>
        <th>Valor</th>
    </tr>
    <tr>
        <td>ID</td>
        <td><?= $datos[0] ?></td>
    </tr>
    <tr>
        <td>Nombre</td>
        <td><?= $datos[1] ?></td>
    </tr>
    <tr>
        <td>Apellidos</td>
        <td><?= $datos[2] ?></td>
    </tr>
    <tr>
        <td>Poblacion</td>
        <td><?= $datos[3] ?></td>
    </tr>
</table>