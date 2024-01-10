<?php
    $suma = 0;
    $numeros = [];

    /**
     * Genera un nuevo array fusionando dos números dados y una cadena de números.
     *
     * @param string $numero1 El primer número a incluir en el array fusionado.
     * @param string $numero2 El segundo número a incluir en el array fusionado.
     * @param string $numeros Una cadena de números separados por punto y coma.
     * @return array El array fusionado que contiene los dos números y los números de la cadena.
     */
    function sumarNumeros(string $numero1, string $numero2, string $numeros): array {
        $resultado = [];
        $numerosArray = explode(";", $numeros);

        $resultado = array_merge([$numero1, $numero2], $numerosArray);

        return $resultado;
    }

    if(isset($_POST["enviar"])) {
        $numero1 = $_POST["numero1"] ?: 0;
        $numero2 = $_POST["numero2"] ?: 0;
        $numeros = $_POST["numeros"] ?: 0;

        $numeros = sumarNumeros($numero1, $numero2, $numeros);
        $suma = array_sum($numeros);
    }
?>