<?php
    //Controlar si he pulsado el botón de enviar
    $resultado = "";
    
    if(isset($_POST["enviar"])) {
        $resultado = isset($_POST['frutas']) ? implode(", ", $_POST['frutas']) : "";
    }
?>