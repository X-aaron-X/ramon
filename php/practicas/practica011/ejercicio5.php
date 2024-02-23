<?php
    //Pasamos un array con varios nombres y nos devolvera un array con los nombres 
    //iguales y el numero de cuantas aparecen. Si el nombre solo aparece una vez lo quitara del array devuelto
    function elementosRepetidos(array $array, $devolverTodos = false): array { 
        $repeated = array();

        foreach((array) $array as $value){
            $inArray = false;

            foreach($repeated as $i => $rItem){
                if ($rItem["value"] === $value) {
                    $inArray = true;
                    ++$repeated[$i]['count'];
                }
            }

            if (false === $inArray) {
                $i = count($repeated);

                $repeated[$i] = array();
                $repeated[$i]["value"] = $value;
                $repeated[$i]["count"] = 1;
            }

        }

        if (!$devolverTodos) {
            foreach ($repeated as $i => $rItem) {
                if ($rItem['count'] === 1){
                    unset($repeated[$i]); //quita del array el nombre que solo aparece 1 vez
                }
            }
        }

        sort($repeated); //Ordena el array

        return $repeated;
    }

    //le pasamos un array
    $array = ["Aaron","Aaron","Terry","Terry","eliminado","Aaron",];
    $resultadoArray = elementosRepetidos($array);

    var_dump($resultadoArray);