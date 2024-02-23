<?php
    namespace src;

    class Empleado extends Persona {
        private ?float $sueldo;

        public function __construct(){
            parent::__construct();

            $this->sueldo = null;
        }

        /**
         * Get the value of sueldo
         *
         * @return float
        */
        public function getSueldo(): ?float {
            return $this->sueldo;
        }

        public function __toString(): string {
            $texto = parent::__toString();
            $texto .= "Sueldo: {$this->sueldo} <br>";

            return $texto;
        }

        public function calcularSueldo(int $horas): void{
            $this->sueldo = $horas * 10;
        }
    }