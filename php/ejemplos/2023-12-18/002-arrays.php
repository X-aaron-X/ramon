<?php
    //funcion llamada mostrarArray que recorre un array pasando como primer parametro y retornando una tabla html
    //donde en la primera columna esta el indice y en la segunda el valor
    //- El indice debe estar como th y el valor como td
    //- Utilizar para recorrer el array for
    //- Solo admite arrays unidimensinales de tipo enumerado y secuenciales
    function mostrarArray(array $datos): string{
        $html = "<table>";

        foreach ($datos as $indice => $valor){
            $html .= "
                    <tr>
                        <th>$indice</th>
                        <td>$valor</td>
                    </tr>";
        }

        $html .= "</table>";

        return $html;
    }

    /**
     * Genera una tabla HTML a partir de un array de datos.
     *
     * @param array $datos El array de datos que se mostrará en la tabla.
     * @return string La tabla HTML generada.
     */
    function mostrarArrayv2(array $datos): string{
        $html = "<table>";

        array_walk($datos, function(&$valor, $indice) use (&$html) {
            $html .= "
                    <tr>
                        <th>{$indice}</th>
                        <td>{$valor}</td>
                    </tr>";
        });

        $html .= "</table>";

        return $html;
    }

    /**
     * Genera una tabla HTML a partir de un arreglo de datos.
     *
     * @param array $datos El arreglo de datos que se mostrará en la tabla.
     * @return string La tabla HTML generada.
     */
    function mostrarArrayv3(array $datos): string{
        $html = "<table>";

        $html .= implode("", array_map(function($valor, $indice) {
            return "<tr>
                        <th>{$indice}</th>
                        <td>{$valor}</td>
                    </tr>";

        }, $datos, array_keys($datos)));
        
        $html .= "</table>";

        return $html;
    }

