<?php
    namespace clases\texto;

    class Cadenas{
        private string $valor;

        /**
         * Get the value of valor
         *
         * @return string
        */
        public function getValor(): string {
                return $this->valor;
        }

        /**
         * Set the value of valor
         *
         * @param string $valor
         *
         * @return self
        */
        public function setValor(string $valor): self {
                $this->valor = $valor;

                return $this;
        }

        public function __construct(string $valor = ""){
            $this->setValor($valor);
        }
    }