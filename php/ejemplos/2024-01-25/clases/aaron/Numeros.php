<?php
    namespace clases\aaron;

    class Numeros {
        private array $numeros;

        /**
         * Get the value of numeros
         *
         * @return array
        */
        public function getNumeros(): array {
            return $this->numeros;
        }

        /**
         * Set the value of numeros
         *
         * @param array $numeros
         *
         * @return self
        */
        public function setNumeros(array $numeros): self {
            $this->numeros = $numeros;

            return $this;
        }

        /*--------------------------------------------------------------------------*/

        public function __construct(array $numeros = []) {
            $this->setNumeros($numeros);
        }

        /*--------------------------------------------------------------------------*/

        /**
         * Calcula el promedio de los números en el array.
         *
         * @return float
        */
        public function calcularMedia(): float {
            $media = 0;

            $media = round(array_sum($this->numeros) / count($this->numeros), 2);

            return $media;
        }

        
        /**
         * Calcula la moda del array de números.
         *
         * @return int
        */
        public function calcularModa(): int {
            $moda = 0;

            $numRepeticiones = array_count_values($this->numeros);
            $moda = array_search(max($numRepeticiones), $numRepeticiones);

            return $moda;
        }

        public function calcularMediana(): float {
            $mediana = 0;
            
            sort($this->numeros);
            $count = count($this->numeros);
            $middle = floor($count / 2);
            if ($count % 2 === 0) {
                $mediana = ($this->numeros[$middle - 1] + $this->numeros[$middle]) / 2;
            } else {
                $mediana = $this->numeros[$middle];
            }
            return $mediana;
        }
    }