<?php
    $alumnos = ["Ramon","Jose","Pepe","Ana"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio7</title>
</head>
<body>
    <div>
        <?php
            foreach ($alumnos as $valor) {
                echo "{$valor} <br>";
            }
        ?>
    </div>
</body>
</html>
