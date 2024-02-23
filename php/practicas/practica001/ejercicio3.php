<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Metodo 1</h2>
    <?php
        echo "<p> Hola mundo </p>";
    ?>

    <h2>Metodo 2</h2>
    <p>
        <?php
            echo "Hola mundo";
        ?>
    </p>

    <h2>Metodo 3</h2>

    <?php 
        echo "<p>";
    ?>
    
    Hola mundo
    
    <?php 
        echo "</p>"; 
    ?>

    <h2>Podemos utilizar el modo contrario del echo </h2>
    <p>
        <?= "Hola mundo" ?>
    </p>    
</body>
</html>