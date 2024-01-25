<?php
    class Oficio{
        public string $nombre;
        public float $salarioBase;
        public int $horasSemanales;

        public function __construct($nombre = "", $salarioBase = 0, $horasSemanales = 0){
            $this->nombre = $nombre;
            $this->salarioBase = $salarioBase;
            $this->horasSemanales = $horasSemanales;
        }

        /**
         * Un método para calcular el producto de salarioBase y horasSemanales.
         *
         * @return mixed el producto calculado de salarioBase y horasSemanales
        */
        public function calcular(){
            return $this->salarioBase * $this->horasSemanales;
        }
    }