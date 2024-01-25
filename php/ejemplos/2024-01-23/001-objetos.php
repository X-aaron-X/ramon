<?php
    class Persona {
        //Definimos los miembros de mi clase

        //Atributos clase
        public $nombre = "";
        public $apellidos = "";
        public $edad = 0;

        //Metodos de la clase
        public function hablar() {
            //Mediantes la palabra reservada $this podemos acceder a los miembros de la clase solamente dentro de la clase
            return "<br> Soy {$this->nombre} {$this->apellidos} y tengo {$this->edad} anios";
        }
    }

    //Inicializar un objeto creando un objeto de tipo persona
    $persona1 = new Persona();
    $persona2 = new Persona();

    //Asignar valores a los atributos
    $persona1->nombre = "Juan";
    $persona1->apellidos = "Perez";
    $persona1->edad = 25;

    $persona2->nombre = "Maria";
    $persona2->apellidos = "Lopez";
    $persona2->edad = 30;

    //leer los valores de los atributos
    echo "El nombre de la primera persona es: {$persona1->nombre} <br>";
    echo "El apellido de la primera persona es: {$persona1->apellidos} <br>";
    echo "La edad de la primera persona es: {$persona1->edad}";

    //Acceder al metodo de la primera perorsona
    echo $persona1->hablar();
    
    //aceder al metodo de la segunda persona
    echo $persona2->hablar();