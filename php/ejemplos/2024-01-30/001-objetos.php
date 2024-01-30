<?php
    use clases\personas\Tecnicos;

    require_once "autoload.php";

    $tecnico = new Tecnicos("Juan");
    $tecnico->horas = 100;

    var_dump($tecnico);

    //Podemos colocar despues del setter otro miembro porque esta en fluent
    echo $tecnico->setIniciales('jj')
                ->getIniciales();

    echo "<br>";

    echo $tecnico->getSueldo();
