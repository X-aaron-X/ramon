<?php
    namespace clases\animales;

    class Perro {
        private string $nombre;
        private float $peso;
        private string $vacunado;
        private ?Persona $persona;

        /**
         * Get the value of nombre
         *
         * @return string
        */
        public function getNombre(): string {
            return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @param string $nombre
         *
         * @return self
        */
        public function setNombre(string $nombre): self {
            $this->nombre = $nombre;

            return $this;
        }

        /**
         * Get the value of peso
         *
         * @return int
        */
        public function getPeso(): float {
            return $this->peso;
        }

        /**
         * Set the value of peso
         *
         * @param int $peso
         *
         * @return self
        */
        public function setPeso(float $peso): self {
            $this->peso = $peso;

            return $this;
        }

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

        public function __construct(string $nombre = '', float $peso = 0, string $vacunado = '', ?Persona $persona = null) {
            $this->setNombre($nombre);
            $this->setPeso($peso);
            $this->setVacunado($vacunado);
            $this->setPersona($persona);
        }
    }