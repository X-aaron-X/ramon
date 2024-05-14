<?php
    namespace clases;

    class Articulo {
        protected ?string $nombre;
        protected float $precio;

        public function __construct(string $nombre = null, float $precio = 0)  {
            $this->nombre = $nombre;
            $this->precio = $precio;
        }

        public function __toString(): string {
            return "Nombre: {$this->nombre} <br> Precio: {$this->precio}€ <br>";
        }

        /**
         * Get the value of nombre
         *
         * @return ?string
         */
        public function getNombre(): ?string
        {
            return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @param ?string $nombre
         *
         * @return self
         */
        public function setNombre(?string $nombre): self
        {
            $this->nombre = $nombre;

            return $this;
        }

        /**
         * Get the value of precio
         *
         * @return float
         */
        public function getPrecio(): float
        {
            return $this->precio;
        }

        /**
         * Set the value of precio
         *
         * @param float $precio
         *
         * @return self
         */
        public function setPrecio(float $precio): self
        {
            if (is_int($precio)) {
                echo "<h1 style='color:red'>El valor introducido no es correcto </h1>";

                die();
            }

            $this->precio = $precio;

            return $this;
        }
    }
