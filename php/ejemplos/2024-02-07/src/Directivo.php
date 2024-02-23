<?php
    namespace src;

    class Directivo extends Empleado {
        protected ?string $categoria;

        // sobreescribir metodo mostrar
        public function mostrar(): string {
            $salida = "<div class=\"row mb-3 col-sm-3\">
                            <ul class=\"list-group\">
                                <li class=\"list-group-item list-group-item-action text-center\">Nombre: {$this->getNombre()}</li>
                                <li class=\"list-group-item list-group-item-action text-center\">Edad: {$this->getEdad()}</li>
                                <li class=\"list-group-item list-group-item-action text-center\">Sueldo: {$this->getSueldo()}</li>
                                <li class=\"list-group-item list-group-item-action text-center\">Categoria: {$this->categoria}</li>
                            </ul>
                        </div>";

            return $salida;
        }

        public function __construct() {
            parent::__construct();

            $this->categoria = null;

            $this->propiedadesAsignacionMasiva = ["nombre", "edad", "categoria"];
        }

        /**
         * Get the value of categoria
         *
         * @return ?string
        */
        public function getCategoria(): ?string {
            return $this->categoria;
        }

        /**
         * Set the value of categoria
         *
         * @param ?string $categoria
         *
         * @return self
        */
        public function setCategoria(?string $categoria): self {
            $this->categoria = $categoria;

            return $this;
        }

        public function asignar(array $datos): self {
            parent::asignar($datos);

            return $this;
        }
    }
