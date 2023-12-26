<?php
    //Constante radio
    //define("RADIO", 10.0);
    const RADIO = 10.0;

    $area = 20.34;
    $areaCalculada = 0;

    //Calcular Area
    $areaCalculada = 3.14 * RADIO ** 2;
?>

Area = <?= $area ?> <br>
Area Calculada = <?= $areaCalculada ?>