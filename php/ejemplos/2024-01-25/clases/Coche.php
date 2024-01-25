<?php
    class Coche {
        private string $color;
        private int $numeroPuertas;
        private string $marca;
        private int $gasolina;

        /**
         * Get the value of color
         *
         * @return string
        */
        public function getColor(): string {
            return $this->color;
        }

        /**
         * Set the value of color
         *
         * @param string $color
         *
         * @return self
        */
        public function setColor(string $color): self {
            $this->color = $color;

            return $this;
        }

        /**
         * Get the value of numeroPuertas
         *
         * @return int
        */
        public function getNumeroPuertas(): int {
            return $this->numeroPuertas;
        }

        /**
         * Set the value of numeroPuertas
         *
         * @param int $numeroPuertas
         *
         * @return self
        */
        public function setNumeroPuertas(int $numeroPuertas): self {
            $this->numeroPuertas = $numeroPuertas;

            return $this;
        }

        /**
         * Get the value of marca
         *
         * @return string
        */
        public function getMarca(): string {
            return $this->marca;
        }

        /**
         * Set the value of marca
         *
         * @param string $marca
         *
         * @return self
        */
        public function setMarca(string $marca): self {
            $this->marca = $marca;

            return $this;
        }

        /**
         * Get the value of gasolina
         *
         * @return int
        */
        public function getGasolina(): int {
            return $this->gasolina;
        }

        /**
         * Set the value of gasolina
         *
         * @param int $gasolina
         *
         * @return self
        */
        public function setGasolina(int $gasolina): self {
            $this->gasolina = $gasolina;

            return $this;
        }

        /*--------------------------------------------------------------------------*/

        public function __construct(string $color = "", int $numeroPuertas = 0, string $marca = "", int $gasolina = 0) {
            $this->setColor($color)
                ->setNumeroPuertas($numeroPuertas)
                ->setMarca($marca)
                ->setGasolina($gasolina);
        }

        /*--------------------------------------------------------------------------*/
        
        /**
         * Función llenarTanque
         *
         * @param int $gasolinaNueva description
         * @return void
        */
        public function llenarTanque(int $gasolinaNueva): void {
            $this->gasolina += $gasolinaNueva;
        }

        /**
         * La función acelerar disminuye la propiedad gasolina en 1.
         *
         * @return int
        */
        public function acelarar(): int {
            return $this->gasolina -= 1;
        }
    }