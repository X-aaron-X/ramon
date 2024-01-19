<?php
    //Quiero un contador de visitar que cuando llegue a 10 se reinicie a 0
    session_start();

    //Comprube si existe la variable de sesion
    if(isset($_SESSION['visitas'])){
        $_SESSION['visitas']++;
        
        if($_SESSION['visitas'] == 10){
            session_destroy(); //Elimina la sesion en la proxima carga
        }
    }
    else{
        $_SESSION['visitas'] = 1;
    }

    echo $_SESSION['visitas'];