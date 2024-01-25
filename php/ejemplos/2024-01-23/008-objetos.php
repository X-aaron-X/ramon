<?php
    class Forma{
        public $nombre;

        public function __construct(){
            $numeroArgumentos = func_num_args();

            //Opcion 1
            // switch ($numeroArgumentos) {
            //     case 0:
            //         $this->__construct0();
            //         break;
            //     case 1:
            //         $this->__construct1(func_get_arg(0));
            //         break;
            // }

            //Opcion 2
            call_user_func_array([$this, '__construct'. $numeroArgumentos], func_get_args());

            //Opcion 3
            //call_user_func([$this, '__construct'. $numeroArgumentos], ...func_get_args());
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

    

