<?php
    $notas = [5,8,10,4];
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
            <th>Notas - foreach</th>
        </tr>
        <?php
            foreach ($notas as $valor) {
                echo "<tr><td> {$valor} </td></tr>";
            }
        ?>
    </table>

    <hr>

    <table border="1">
        <tr>
            <th>Notas - for</th>
        </tr>
        <?php
            for ($i=0; $i < count($notas) ; $i++) { 
                echo "<tr><td> $notas[$i] </td></tr>";
            }
        ?>
    </table>
</body>
</html>