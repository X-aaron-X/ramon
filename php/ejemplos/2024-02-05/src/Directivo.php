<?php
    namespace src;

    class Directivo extends Empleado {
        private ?string $categoria;

        /**
         * Get the value of categoria
        */
        public function getCategoria(): ?string{
            return $this->categoria;
        }

        /**
         * Set the value of categoria
        */
        public function setCategoria(?string $categoria): self{
            $this->categoria = $categoria;

            return $this;
        }

        public function __toString(): string {
            $texto = parent::__toString();

            $texto .= "Categoría: {$this->categoria}";

            return $texto;
        }
    }
