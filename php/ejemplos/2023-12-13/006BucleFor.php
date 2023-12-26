<?php
    //Crear un para de variables
    //Minimo = 4
    //Maximo = 7

    $min = 4;
    $max = 7;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            <?php
                for($i = $min; $i <= $max; $i++){
                    echo "<li>$i</li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>