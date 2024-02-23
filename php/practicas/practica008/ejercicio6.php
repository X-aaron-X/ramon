<?php
    $notas = [5,8,10,4];
    $mediaNotas = array_sum($notas) / count($notas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <table border="1">
        <tr>
            <th colspan="2">Notas</th>
        </tr>
        <?php
            foreach ($notas as $valor) {
                echo "<tr><td colspan=\"2\"> {$valor} </td></tr>";
            }
        ?>
        <tr>
            <td> MEDIA</td>
            <td><?= "{$mediaNotas}" ?></td>
        </tr>
    </table>
</body>
</html>