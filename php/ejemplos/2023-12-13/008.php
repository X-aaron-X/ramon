<?php
    //Crear una variable array donde voy a coloar cada vez a un jugador
    //a metido un punto
    //tengo 3 jugadores limitados
    //p1, p2, p3
    //quiero una tabla donde me indiquen cuantos puntos tiene cada jugador
    //realizarlo con for

    $puntos = ['p1','p1','p2','p3','p2','p1','p1'];
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
            $p1 = 0;
            $p2 = 0;
            $p3 = 0;

            for($i = 0; $i < count($puntos); $i++) {
                if($puntos[$i] == 'p1'){
                    $p1++;
                }
                else if($puntos[$i] == 'p2'){
                    $p2++;
                }
                else{
                    $p3++;
                }
            }
        ?>
    </table>

    <table border="1" width="20%">
        <tr>
            <td>p1</td>
            <td><?= $p1 ?></td>
        </tr>
        <tr>
            <td>p2</td>
            <td><?= $p2 ?></td>
        </tr>
        <tr>
            <td>p3</td>
            <td><?= $p3 ?></td>
        </tr>
    </table>
</body>
</html>
