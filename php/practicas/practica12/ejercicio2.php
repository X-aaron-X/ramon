<?php
    $anchura = "200";
    $altura = "200";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercico 1</title>
    <style>
        .imagen{
            width: <?= $anchura ?>px;
            height: <?= $altura ?>px;
        }

        #cajaImagen{
            width: <?= $anchura * 3 ?>px;
            height: 252px;
        }

        span{
            border: 1px solid black;
            font-size: 2em;
            padding: 10px;
        }

        p{
            border: 1px solid black;
            padding: 7px;
        }
    </style>
</head>
<body>
    <?php
        $sumaDados = [];
    
        for ($i = 1; $i <= 10; $i++) {
            $dado1 = mt_rand(1, 6);
            $dado2 = mt_rand(1, 6);
            $sumaDados[] = $dado1 + $dado2;
            
            ?>
                <div id="cajaImagen">
                    <img class="imagen" src="dados/<?= $dado1 ?>.svg">
                    <img class="imagen" src="dados/<?= $dado2 ?>.svg">
                    
                    <div>
                        Total: <span><?= $dado1 + $dado2 ?></span>
                    </div>
                </div>
            <?php
        }
    ?>

    <p>La tirada mayor ha sido de <?= max($sumaDados) ?></p>
    <?= var_dump($sumaDados) ?>
</body>
</html>
