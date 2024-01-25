<?php
    $numeros = [1, 2, 3, 4, 5];

    setcookie("numeros", serialize($numeros), time() + 3600);

    var_dump($_COOKIE);

    var_dump(unserialize($_COOKIE["numeros"]));
