<?php
    function vocalesString(string $palabra): string {
        $cajaVocales = "<div style='display: flex;flex-wrap: wrap;font-size: 2em;'>";
        $vocales = ['a','e','i','o','u'];

        for($i = 0; $i < strlen($palabra); $i++){
            if (in_array(mb_strtolower($palabra[$i]), $vocales)){
                $cajaVocales .= "<div style='width: 48px;height: 60px; border: 1px solid black; padding: 45px'>{$palabra[$i]}</div>";
            }
        }

        $cajaVocales .= "</div>";

        return $cajaVocales;
    }

    $palabra = "ejemplo de claseweiwoefwpeokfpwoejfpiepsodfpsoeipwoekfpweoksfwrwerwwerweowwerwpoepowerwer";

    echo vocalesString($palabra);