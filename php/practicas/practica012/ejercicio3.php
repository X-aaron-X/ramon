<?php
    $anchura = "200";
    $altura = "200";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercico 3</title>
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
            $dados = [];
            $contador = 0;
        
            for ($c = 0; $c < 10; $c++) {
                $dados[] = [mt_rand(1, 6), mt_rand(1, 6)];
                $sumaTiradas[$c] = $dados[$c][0] + $dados[$c][1];

                ?>
                <div id="cajaImagen">
                    <img class="imagen" src="dados/<?= $dados[$c][0] ?>.svg">
                    <img class="imagen" src="dados/<?= $dados[$c][1] ?>.svg">
                    
                    <div>
                        Total: <span><?= $sumaTiradas[$contador++] ?></span>
                    </div>
                </div>
            <?php
            }

            var_dump($dados)
        ?>

        <p>La tirada mayor ha sido de <?= max($sumaTiradas) ?></p>

        <hr><hr>

        <?php
            $tiradas = [];
            $sumaTiradas = [];
            $dados = [];
            $contador = 0;
        
            for ($c = 0; $c < 10; $c++) {
                $dados[] = [
                    "dado1" => mt_rand(1, 6), 
                    "dado2" => mt_rand(1, 6)
                ];

                $sumaTiradas[$c] = $dados[$c]["dado1"] + $dados[$c]["dado2"];

                ?>
                <div id="cajaImagen">
                    <img class="imagen" src="dados/<?= $dados[$c]["dado1"] ?>.svg">
                    <img class="imagen" src="dados/<?= $dados[$c]["dado2"] ?>.svg">
                    
                    <div>
                        Total: <span><?= $sumaTiradas[$contador++] ?></span>
                    </div>
                </div>
            <?php
            }

            var_dump($dados);
        ?>

        <p>La tirada mayor ha sido de <?= max($sumaTiradas) ?></p>
    </body>
</html>
