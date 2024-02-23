<?php
    namespace src;

    class Persona {
        private ?string $nombre;
        private ?int $edad;
        protected array $propiedadesAsignacionMasiva;

        public function mostrar(): string {
            $salida = "<div class=\"row mb-3 col-sm-2\">
                            <ul class=\"list-group\">
                                <li class=\"list-group-item list-group-item-action text-center\">Nombre: {$this->nombre}</li>
                                <li class=\"list-group-item list-group-item-action text-center\">Edad: {$this->edad}</li>
                            </ul>
                        </div>";

            return $salida;
        }

        // creo el metodo magico toString
        public function __toString() {
            return $this->mostrar();
        }

        public function __construct() {
            $this->nombre = null;
            $this->edad = null;
            $this->propiedadesAsignacionMasiva = [];
        }

        /**
         * Get the value of nombre
         *
         * @return string
        */
        public function getNombre(): ?string {
            return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @param string $nombre
         *
         * @return self
        */
        public function setNombre(?string $nombre): self {
            $this->nombre = $nombre;

            return $this;
        }

        /**
         * Get the value of edad
         *
         * @return int
        */
        public function getEdad(): ?int {
            return $this->edad;
        }

        /**
         * Set the value of edad
         *
         * @param int $edad
         *
         * @return self
        */
        public function setEdad(?int $edad): self {
            $this->edad = $edad;

            return $this;
        }

        public function asignar(array $datos): self {
            foreach ($this->propiedadesAsignacionMasiva as $propiedad) {
                $this->$propiedad = $datos[$propiedad];
            }

            return $this;
        }
    }
