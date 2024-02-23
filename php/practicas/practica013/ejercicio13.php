<?php
    function divColores(array $arrayColores) {
        foreach ($arrayColores as $color) {
            echo "<div style='background-color: $color; height: 100px;'></div>";
        }
    }

    $arrayColores = ["red", "green", "blue"];
    divColores($arrayColores);