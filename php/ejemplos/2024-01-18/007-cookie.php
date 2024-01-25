<?php
    // Iterar sobre todas las cookies existentes
    foreach ($_COOKIE as $nombreCookie => $valorCookie) {
        // Establecer una nueva cookie con el mismo nombre y tiempo de caducidad en el pasado para eliminarla
        setcookie($nombreCookie, "", time() - 3600, "/");
    }