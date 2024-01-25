<?php
    namespace clases\profesor;
    
    class Numeros {
        private array $numeros;

        /**
         * Get the value of numeros
         *
         * @return array
        */
        public function getNumeros(): array{
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
         * Calcula la moda del array dado de números.
         *
         * @return float
        */
        public function calcularModa(): float {
            $numRepeticiones = 0;
            $maxRepeticiones = 0;
            $arrayModa = [];
            $moda = 0;

            $numRepeticiones = array_count_values($this->numeros);
            $maxRepeticiones = max($numRepeticiones);

            $arrayModa = array_keys($numRepeticiones, $maxRepeticiones);
            $moda = round(array_sum($arrayModa) / count($arrayModa), 2);

            return $moda;
        }
    }