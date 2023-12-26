<?php
    /**
     * Crear una funcion llamada recorrer que reciba como primer parametro un array debe resolver una lista html 
     * con todos los elementos del array para recorrer el array utilizar for
     *  observaciones:
     * - Solo debe funcionar con arrays una sola dimension
     * - Solo con arrays enumerados secuenciales
     * 
     * @param array $datosArray El array que se va a recorrer.
     * @return string La lista desordenada HTML generada.
    */
    function recorrer(array $datosArray): string {
        $lista = "<ul>";

        for($i = 0; $i < count($datosArray); $i++){
            $lista .= "<li> {$datosArray[$i]} </li>";
        }

        $lista .= "</ul>";

        return $lista;
    }
    
    /**
     * Crear una funcion llamada recorrerV1 que reciba como primer parametro un array debe resolver una lista html 
     * con todos los elementos del array para recorrer el array utilizar for
     * observaciones:
     * - Solo debe funcionar con arrays de una sola dimension
     * - Solo con arrays enumerados (tanto secuenciales como no secuenciales)
     *
     * @param array $datosArray El array que se va a recorrer.
     * @return string La cadena de texto HTML con la lista  generada.
    */
    function recorrerV1(array $datosArray): string {
        $arrayValores = array_values($datosArray);
        $lista = "<ul>";      

        for ($i = 0; $i < count($arrayValores); $i++) {
            $lista .= "<li> {$arrayValores[$i]} </li>";
        }

        $lista .= "</ul>";

        return $lista;
    }

    /**
     * Crear una funcion llamada recorrer2 que reciba como primer parametro un array debe resolver una lista html 
     * con todos los elementos del array para recorrer el array utilizar foreach
     *  observaciones:
     * - Solo debe funcionar con arrays una sola dimension
     * - Debe funcionar con arrays asociativos y enumerados
     * 
     * @param array $datosArray El array que se va a recorrer.
     * @return string La cadena HTML generada de la lista desordenada.
    */
    function recorrer2(array $datosArray): string {
        $lista = "<ul>";

        foreach ($datosArray as $valor) {
            $lista .= "<li> {$valor} </li>";
        }

        $lista .= "</ul>";

        return $lista;
    }

    /**
     * Crear una funcion llamada recorrer3 que reciba como primer parametro un array debe resolver una lista html
     * con todos los elementos del array para recorrer el array utilizar while
     * observaciones:
     * - Solo debe funcionar con arrays una sola dimension
     * - Debe funcionar con arrays enumerados y asociativos
     *
     * @param array $datosArray El array de valores que se incluirán en la lista.
     * @return string La cadena HTML generada de la lista desordenada.
    */
    function recorrer3(array $datosArray): string {
        $arrayValores = array_values($datosArray);
        $cont = 0;
        $lista = "<ul>";

        while ($cont < count($arrayValores)) {
            $lista .= "<li> {$arrayValores[$cont]} </li>";
            $cont++;
        }

        $lista .= "</ul>";

        return $lista;
    }

    /**
     * Genera una cadena de texto HTML con una lista desordenada al iterar sobre los elementos de un array.
     *
     * @param array $datosArray El array sobre el cual iterar.
     *
     * @return string La cadena de texto HTML con la lista desordenada generada.
    */
    function recorrer4(array $datosArray): string {
        $lista = "<ul>";

        array_walk($datosArray, function($valor, $indice) use (&$lista) {
            $lista .= "<li> {$valor} </li>";
        });

        $lista .= "</ul>";

        return $lista;
    }

    function recorrer4v1(array $datosArray): string {
        $lista = "<ul>";

        array_walk($datosArray, function(&$valor, $indice){
            $valor = "<li> {$valor} </li>";
        });

        $lista .= implode("", $datosArray);

        $lista .= "</ul>";

        return $lista;
    }

    /**
     * Genera una lista desordenada a partir de un array.
     *
     * @param array $datosArray El array que se va a convertir en una lista.
     * @return string La lista desordenada generada como cadena de texto.
     */
    function recorrer5(array $datosArray): string {
        $lista = "<ul>";

        $lista .= implode("", array_map(function($valor) {
                    return "<li> {$valor} </li>";
                }, $datosArray));

        $lista .= "</ul>";
        
        return $lista;
    }

