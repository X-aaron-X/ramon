<?php
    namespace src;

    class Cliente extends Persona {
        private ?string $nombreEmpresa;
        private ?string $telefono;

        public function __construct() {
            parent::__construct();

            $this->nombreEmpresa = null;
            $this->telefono = null;
        }

        /**
         * Get the value of nombreEmpresa
         *
         * @return ?string
        */
        public function getNombreEmpresa(): ?string {
            return $this->nombreEmpresa;
        }

        /**
         * Set the value of nombreEmpresa
         *
         * @param ?string $nombreEmpresa
         *
         * @return self
        */
        public function setNombreEmpresa(?string $nombreEmpresa): self {
            $this->nombreEmpresa = $nombreEmpresa;

            return $this;
        }

        /**
         * Get the value of telefono
         *
         * @return ?string
        */
        public function getTelefono(): ?string {
            return $this->telefono;
        }

        /**
         * Set the value of telefono
         *
         * @param ?string $telefono
         *
         * @return self
        */
        public function setTelefono(?string $telefono): self {
            $this->telefono = $telefono;

            return $this;
        }

        public function __toString(): string {
            $texto = parent::__toString();

            $texto .= "Nombre de la empresa: {$this->nombreEmpresa} <br>";
            $texto .= "Teléfono: {$this->telefono} <br>";

            return $texto;
        }
    }