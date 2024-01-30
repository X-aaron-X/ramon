<?php
    //Colocamos el espacio de nombres
    namespace clases\personas;

    class Tecnicos {
        //Atributos de la clase
        //public|protected|private tipoDato identificador;
        public string $nombre;
        private string $iniciales;
        protected float $sueldo;
        public int $horas;

        /**
         * Devuelve las iniciales
         *
         * @return string
        */
        public function getIniciales(): string {
            return $this->iniciales;
        }

        /**
         * Asigna las iniciales
         *
         * @param string $iniciales
         *
         * @return self
        */
        public function setIniciales(string $iniciales): self{
            $this->iniciales = $iniciales;

            return $this; //Para trabajar en modo fluent
        }

        //Metodo constructor
        public function __construct(string $nombre = ""){
            $this->nombre = $nombre;
            $this->iniciales = "";
            $this->sueldo = 0;
            $this->horas = 0;
        }

        /**
         * Calcula el salario del empleado en función del número de horas trabajadas.
         *
         * @return void
        */        
        private function calcularSueldo(): void {
            $this->sueldo = $this->horas * 10;
        }

        /**
         * Get the value of sueldo
         *
         * @return float
        */
        public function getSueldo(): float {
            $this->calcularSueldo();
            return $this->sueldo;
        }
    }