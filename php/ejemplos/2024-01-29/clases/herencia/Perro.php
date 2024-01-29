<?php
    namespace clases\herencias;

    class Perro extends Animal{
        private string $vacunado;
        private ?Persona $persona;

        /**
         * Get the value of vacunado
         *
         * @return string
        */
        public function getVacunado(): string {
            return $this->vacunado;
        }

        /**
         * Set the value of vacunado
         *
         * @param string $vacunado
         *
         * @return self
        */
        public function setVacunado(string $vacunado): self {
            $this->vacunado = $vacunado;

            return $this;
        }

        /**
         * Get the value of persona
         *
         * @return ?Persona
        */
        public function getPersona(): ?Persona {
            return $this->persona;
        }

        /**
         * Set the value of persona
         *
         * @param ?Persona $persona
         *
         * @return self
        */
        public function setPersona(?Persona $persona): self {
            $this->persona = $persona;

            return $this;
        }

        public function __construct(string $nombre = '', float $peso = 0, int $color = '', string $vacunado = '', ?Persona $persona = null) {
            parent::__construct($nombre, $peso, $color);
            $this->setVacunado($vacunado);
            $this->setPersona($persona);
        }
    }