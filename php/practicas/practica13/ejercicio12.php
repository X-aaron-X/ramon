<?php
    function textoAlReves(string $texto): string {
        $textoAlReves = "";
        $textoAlReves = strrev($texto);

        return $textoAlReves;
    }

    $texto = "Hola mundo";
    echo textoAlReves($texto);