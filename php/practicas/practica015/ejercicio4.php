<?php
    function no_space (string $s): string{
        $cadena = str_replace(' ', '', $s);
        
        return $cadena;
    }

    echo no_space(' E ejmplo');