<?php
    session_start();

    if (isset($_SESSION["visitas"])) {
        echo $_SESSION["visitas"];
    }