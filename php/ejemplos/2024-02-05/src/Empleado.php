<?php
    namespace src;

    class Empleado extends Persona {
        private float $sueldo;

        /**
         * Get the value of sueldo
         *
         * @return float
        */
        public function getSueldo(): float {
            return $this->sueldo;
        }

        /**
         * Set the value of sueldo
         *
         * @param float $sueldo
         *
         * @return self
        */
        public function setSueldo(float $sueldo): self {
            $this->sueldo = $sueldo;

            return $this;
        }

        public function __construct(){
            parent::__construct();

            $this->setSueldo(0);
        }

        public function __toString(): string {
            $texto = parent::__toString();
            $texto .= "Sueldo: {$this->getSueldo()} <br>";

            return $texto;
        }
    }