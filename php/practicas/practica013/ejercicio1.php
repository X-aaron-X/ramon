<?php
    function imprimirNum(int $num = 10) {
        for ($i = 1; $i <= $num; $i++) {
            echo "{$i} <br>";
        }
    }

    imprimirNum();