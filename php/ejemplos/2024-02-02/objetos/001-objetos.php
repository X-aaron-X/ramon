<?php
    class Padre {
        public string $nombre;
        public string $apellidos;
        private string $tipo;
        public int $edad;
        protected int $altura;
        public int $nivel;

        public function __construct(string $nombre, string $apellidos, int $edad, int $altura, string $tipo) {
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->tipo = $tipo;
            $this->edad = $edad;
            $this->altura = $altura;
            $this->nivel = 1;
        }

        public function presentarme() {
            return "Soy el padre";
        }

        public function asignar($nombre, $apellidos){
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
        }

        public function getEdad() {
            return $this->edad;
        }

        public function getTipo() {
            return $this->tipo;;
        }
    }

    class Hijo extends Padre {
        // la propiedad nivel esta sobreescrita
        public int $nivel; // no sirve para nada

        // la propiedad tipo que es privada la sobreescribo    
        public string $tipo;

        // sobreescritura constructor
        public function __construct(string $nombre, string $apellidos, int $edad, int $altura) {
            parent::__construct($nombre, $apellidos, $edad, $altura, "padre");
            $this->tipo = "hijo";
        }

        // sobreescribo el metodo getTipo
        public function getTipo() {
            return $this->tipo;
        }

        // sobreescribo el metodo presentarme
        public function presentarme() {
            return "Soy el hijo";
        }
    }

    $padre1 = new Padre("Pepe", "Perez", 18, 180, "padre");

    $hijo1 = new Hijo("Luisa", "Perez", 5, 45);

    var_dump($padre1);
    var_dump($hijo1);

    echo $padre1->getEdad();
    echo "<br>";
    echo $hijo1->getEdad();

    echo $hijo1->presentarme();
