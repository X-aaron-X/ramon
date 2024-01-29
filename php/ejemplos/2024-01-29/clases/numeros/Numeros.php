<?php
    namespace clases\numeros;

    class Numeros {
        private int $valor;
        
        /**
         * Get the value of valor
         *
         * @return int
        */
        public function getValor(): int {
                return $this->valor;
        }

        /**
         * Set the value of valor
         *
         * @param int $valor
         *
         * @return self
        */
        public function setValor(int $valor): self {
                $this->valor = $valor;

                return $this;
        }

        public function __construct(int $valor = 0){
            $this->setValor($valor);
        }
    }