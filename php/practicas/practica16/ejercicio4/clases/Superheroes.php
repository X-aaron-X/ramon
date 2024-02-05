<?php
    namespace clases;

    class Superheroes {
        private string $nombre;
        private string $descripcion;
        private bool $capa;

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
         * Get the value of descripcion
         *
         * @return string
        */
        public function getDescripcion(): string {
            return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @param string $descripcion
         *
         * @return self
        */
        public function setDescripcion(string $descripcion): self {
            $this->descripcion = $descripcion;

            return $this;
        }

        /**
         * Get the value of capa
         *
         * @return bool
        */
        public function getCapa(): string {
            return $this->capa ? "Si" : "No";
        }

        /**
         * Set the value of capa
         *
         * @param bool $capa
         *
         * @return self
        */
        public function setCapa(bool $capa): self {
            $this->capa = $capa;

            return $this;
        }

        public function __construct(string $nombre = "") {
            $this->setNombre($nombre);
            $this->setCapa(false);
            $this->setDescripcion("");
        }

        public function __toString(): string {
            return "<h2>Superhéroe {$this->getNombre()} </h2>
                    Nombre: {$this->getNombre()} <br> 
                    Capa:  {$this->getCapa()} <br>
                    Descripción: {$this->getDescripcion()}";
        }
    }