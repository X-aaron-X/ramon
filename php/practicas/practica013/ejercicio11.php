<?php
    function arrayAlreves(array $array): array {
        $arrayAlReves = [];
        $arrayAlReves = array_reverse($array);

        return $arrayAlReves;
    }

    $array = [1, 2, 3, 4, 5];
    $arrayAlreves = arrayAlreves($array);

    var_dump($arrayAlreves);