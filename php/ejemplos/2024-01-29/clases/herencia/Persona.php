<?php
    namespace clases\herencias;

    class Persona {
        private string $nombre;
        private string $direccion;
        private string $telefono;

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
        public function setNombre(string $nombre): self{
            $this->nombre = $nombre;

            return $this;
        }

        /**
         * Get the value of direccion
         *
         * @return string
        */
        public function getDireccion(): string {
            return $this->direccion;
        }

        /**
         * Set the value of direccion
         *
         * @param string $direccion
         *
         * @return self
        */
        public function setDireccion(string $direccion): self {
            $this->direccion = $direccion;

            return $this;
        }

        /**
         * Get the value of telefono
         *
         * @return string
        */
        public function getTelefono(): string {
            return $this->telefono;
        }

        /**
         * Set the value of telefono
         *
         * @param string $telefono
         *
         * @return self
        */
        public function setTelefono(string $telefono): self {
            $this->telefono = $telefono;

            return $this;
        }

        public function __construct(string $nombre = "", string $direccion = "", string $telefono = "") {
            $this->setNombre($nombre);
            $this->setDireccion($direccion);
            $this->setTelefono($telefono);
        }
    }