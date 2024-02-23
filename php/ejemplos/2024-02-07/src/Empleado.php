<?php
    namespace src;

    class Empleado extends Persona {
        private ?float $sueldo;

        // sobreescribir el metodo mostrar
        public function mostrar(): string {
            $salida = "<div class=\"row mb-3 col-sm-2\">
                            <ul class=\"list-group\">
                                <li class=\"list-group-item list-group-item-action text-center\">Nombre: {$this->getNombre()}</li>
                                <li class=\"list-group-item list-group-item-action text-center\">Edad: {$this->getEdad()}</li>
                                <li class=\"list-group-item list-group-item-action text-center\">Sueldo: {$this->sueldo}</li>
                            </ul>
                        </div>";

            return $salida;
        }

        public function __construct() {
            parent::__construct();

            $this->sueldo = null;

            //En el constructor indico que campos quiero que asigne automáticamente desde un formulario
            $this->propiedadesAsignacionMasiva = ["nombre", "edad"];
        }
        public function calcularSueldo(int $horas): void {
            $this->sueldo = $horas * 10;
        }

        /**
         * Get the value of sueldo
         *
         * @return ?float
        */
        public function getSueldo(): ?float {
            return $this->sueldo;
        }

        //Sobreescribo el metodo asignar
        public function asignar(array $datos): self {
            parent::asignar($datos);
            
            //Asigno los campos que no estan en asignacion masiva
            $this->calcularSueldo($datos["horas"]);

            return $this;
        }
    }
