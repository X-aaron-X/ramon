<?php
    $num = 8;
    $suma = 0;

    for ($i = 0; $i < $num; $i++) {
        if ($i % 2 == 1) {
            $suma = $suma + $i;
        }
    }

    echo "La suma es:  {$suma}";