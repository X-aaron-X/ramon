<?php
    namespace clases;

    class Planetas {
        public ?string $nombre;
        public int $satellites;
        public float $masaKg;
        public float $volumenKmCubicos;
        public int $diametroKm;
        public int $distanciaSolKm;
        public string $tipoPlaneta;
        public bool $observable;

        public function __construct(?string $nombre = null, int $satellites = 0, float $masaKg = 0, float $volumenKmCubicos = 0, int $diametroKm = 0, int $distanciaSolKm = 0, 
                                    string $tipoPlaneta = "", bool $observable = false) {

            $this->nombre = $nombre;
            $this->satellites = $satellites;
            $this->masaKg = $masaKg;
            $this->volumenKmCubicos = $volumenKmCubicos;
            $this->diametroKm = $diametroKm;
            $this->distanciaSolKm = $distanciaSolKm;
            $this->tipoPlaneta = $tipoPlaneta;
            $this->observable = $observable;
        }

        public function datosPlanetas(): void {
            echo "<h2>Datos del planeta {$this->nombre}</h2>
                Nombre: {$this->nombre} <br>
                Satelites: {$this->satellites} <br>
                Masa (kg): {$this->masaKg} <br>
                Volumen (km^3): {$this->volumenKmCubicos} <br>
                Diametro (km): {$this->diametroKm} <br>
                Distancia al Sol (km): {$this->distanciaSolKm} <br>
                Tipo de planeta: {$this->tipoPlaneta} <br>
                Observable: " . $this->getObservable() . " <br><br>";
        }

        public function calcularDensidad(): float{
            return $this->masaKg / $this->volumenKmCubicos;
        }

        public function exteriorSistemaSolar(): bool {
            $distanciaMediaAlSolKm = $this->distanciaSolKm * 149597870;
            
            return  $distanciaMediaAlSolKm > 3.4 * 149597870;
        }

        /**
         * Get the value of observable
         *
         * @return bool
        */
        private function getObservable(): string {
            return $this->observable ? "Es visible" : "No es visible";
        }
    }