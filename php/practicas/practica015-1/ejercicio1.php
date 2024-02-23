<?php
    /**
    * Simulador de juego que consta de rondas de 4 puntos cada una. Es para 2 jugadores.
    *
    * @param array $secuencia El arreglo de secuencia de jugadores de entrada.
    * @return array El arreglo de rondas con puntos y ganadores.
    */
    function phpGames(array $secuencia): array {
        $rondas = [];
        $contRonda = 1;
        $puntosP1 = 0;
        $puntosP2 = 0;

        foreach ($secuencia as $jugador) {
            $jugador == "P1" ? $puntosP1++ : $puntosP2++;

            if ($puntosP1 == 4 || $puntosP2 == 4) {
                $ganador = $puntosP1 > $puntosP2 ? "P1" : "P2";

                $rondas["Ronda - {$contRonda}"] = [
                    "P1" => $puntosP1,
                    "P2" => $puntosP2,
                    "Ganador" => $ganador
                ];

                $puntosP1 = 0;
                $puntosP2 = 0;
                $contRonda++;
            }
            else {
                $rondas["Ronda - {$contRonda}"] = [
                    "P1" => $puntosP1,
                    "P2" => $puntosP2,
                    "Ganador" => null
                ];
            }
        }

        return $rondas;
    }

    $secuencia = ["P1", "P1", "P2", "P2", "P1", "P2", "P1", "P1",];