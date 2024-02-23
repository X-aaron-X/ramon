<?php
    namespace src;

    class Cliente extends Persona {
        protected ?string $nombreEmpresa;
        protected ?string $telefono;

        // sobreescribir mostrar
        public function mostrar(): string {
            $salida = "<div class=\"row mb-3 col-sm-2\">
                            <ul class=\"list-group\">
                                <li class=\"list-group-item list-group-item-action text-center\">Nombre: {$this->getNombre()}</li>
                                <li class=\"list-group-item list-group-item-action text-center\">Edad: {$this->getEdad()}</li>
                                <li class=\"list-group-item list-group-item-action text-center\">Telefono: {$this->telefono}</li>
                                <li class=\"list-group-item list-group-item-action text-center\">Nombre empresa: {$this->nombreEmpresa}</li>
                            </ul>
                        </div>";
            return $salida;
        }

        public function __construct() {
            parent::__construct();
            $this->telefono = null;
            $this->nombreEmpresa = null;

            $this->propiedadesAsignacionMasiva = ["nombre", "edad", "telefono", "nombreEmpresa"];
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
    }
