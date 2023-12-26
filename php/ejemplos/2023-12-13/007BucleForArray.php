<?php
    //Creo un array con una serie de numeros y quiero immprimilo en una tabla
    //donde cada fila es un numero
    $numeros = [1,1,2,1,3,4,5,2];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php
            for($i = 0; $i < count($numeros); $i++){
                echo "
                    <tr>
                        <td> {$numeros[$i]} </td>
                    </tr>";
            }
        ?>
    </table>
</body>
</html>