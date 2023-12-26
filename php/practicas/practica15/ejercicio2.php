<?php
    function remove_exclamation_marks(string $string): string{
        $cadena = str_replace('!', '', $string);

        return $cadena;
    }

    echo remove_exclamation_marks('Ejemplo!de!clase');