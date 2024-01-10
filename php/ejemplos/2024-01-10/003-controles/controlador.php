<?php
    //Controlar si he pulsado el botón de enviar
    $nombre = "";
    $apellidos = "";
    
    if(isset($_POST["enviar"])) {
        $nombre = $_POST["nombre"] ?: "";
        $apellidos = $_POST["apellidos"] ?: "";
    }
?>