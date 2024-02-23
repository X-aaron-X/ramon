<?php
    $anchura = "200";
    $altura = "200";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercico 4</title>
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
            $tiradas = [];
            $sumaTiradas = [];
            $contador = 0;

            function tirada(&$d1, &$d2) {
                $d1 = mt_rand(1, 6);
                $d2 = mt_rand(1, 6);
            }
            
            //Haciendolo solo con el for
            for ($c = 0; $c < 10; $c++) {
                tirada($tiradas[$c][0], $tiradas[$c][1]);
                $sumaTiradas[] = $tiradas[$c][0] + $tiradas[$c][1];

                ?>
                <div id="cajaImagen">
                    <img class="imagen" src="dados/<?= $tiradas[$c][0] ?>.svg">
                    <img class="imagen" src="dados/<?= $tiradas[$c][1] ?>.svg">
                    
                    <div>
                        Total: <span><?= $sumaTiradas[$contador++] ?></span>
                    </div>
                </div>
            <?php
            }
            
            var_dump($tiradas);
        ?>

        <p>La tirada mayor ha sido de <?= max($sumaTiradas) ?></p>

        <br><hr><hr><br>
        
        <?php
            //Hciandolo por foreach
            foreach ($tiradas as $indice => $valor) {
                ?>
                    <div id="cajaImagen">
                        <img class="imagen" src="dados/<?= $valor[0] ?>.svg">
                        <img class="imagen" src="dados/<?= $valor[1] ?>.svg">
                        
                        <div>
                            Total: <span><?= $sumaTiradas[$indice] ?></span>
                        </div>
                    </div>
                <?php
            }

            var_dump($tiradas);
        ?>

        <p>La tirada mayor ha sido de <?= max($sumaTiradas) ?></p>
    </body>
</html>
