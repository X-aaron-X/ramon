<?php
    // Intentar leer la cookie después de establecerla
    if (isset($_COOKIE["Alpe"])) {
        $valorLeido = $_COOKIE["Alpe"];
        echo "Valor de la cookie leído: " . $valorLeido;
    }
    else {
        echo "La cookie no está presente.";
    }
