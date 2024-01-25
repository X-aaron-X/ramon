<?php
    class Forma{
        public $nombre;

        public function __construct(...$argumentos) {
            $numeroArgumentos = count($argumentos);

            //Opcion 1
            // switch ($numeroArgumentos) {
            //     case 0:
            //         $this->__construct0();
            //         break;
            //     case 1:
            //         $this->__construct1($argumentos[0]);
            //         break;
            // }

            //Opcion 2
            call_user_func_array([$this, '__construct'. $numeroArgumentos], $argumentos);

            //Opcion 3
            //call_user_func([$this, '__construct'. $numeroArgumentos], ...$argumentos);
        }
        
        private function __construct0(){
            //Quiero que me inicialice nombre a cuadrado
            $this->nombre = 'Cuadrado';
        }

        private function __construct1($nombre){
            //Inicializo la propiedad nombre a este argumento
            $this->nombre = $nombre;
        }
    }

    $forma1 = new Forma();
    $forma2 = new Forma("Triangulo");

    var_dump($forma1);
    var_dump($forma2);

    

