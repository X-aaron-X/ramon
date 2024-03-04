<?php
    namespace clases;

    use mysqli;

    class Aplicacion {
        const FILE_CONFIG = 'config/configuracion.json';
        //const FILE_PARAMS = 'config/params.php';

        public string $titulo;
        public string $autor;
        // Obtengo un objeto de tipo mysqli con la conexion a la base de datos
        public mysqli $db;
        // Tengo todas las configuraciones de mi aplicacion
        public array $configuraciones;
        // Tengo todos los parametros de mi aplicacion
        public array $parametros;

        /**
         * Una función privada para obtener configuraciones de un JSON y lo convierto en un array asociativo.
        */
        private function obtenerConfiguraciones(): void {
            $this->configuraciones = json_decode(file_get_contents(self::FILE_CONFIG), true);
        }

        /**
         * Se conecta a la base de datos utilizando las configuraciones proporcionadas.
         * @return void
        */
        private function conectar(): void {
            $this->db = new mysqli(
                $this->configuraciones['db']['host'],
                $this->configuraciones['db']['user'],
                $this->configuraciones['db']['password'],
                $this->configuraciones['db']['database'],
                $this->configuraciones['db']['port']
            );
        }

        public function __construct() {
            // leer las configuraciones del JSON
            $this->obtenerConfiguraciones();

            // leer los parametros de configuracion
            //$this->parametros = include(self::FILE_PARAMS);

            // leo el titulo y el autor
            $this->titulo = $this->configuraciones['titulo'];
            $this->autor = $this->configuraciones['autor'];

            // Inicializo la conexion con la base de datos
            $this->conectar();
        }

        public static function menu(string $titulo, array $elementoMenu): string {
            $salida = "
                <nav class='navbar navbar-expand-lg navbar-dark bg-dark bg-gradient'>
                    <div class='container-fluid'>
                        <h1 class='text-center display-4 text-info'> {$titulo} </h1>
                                            
                        <div class='collapse navbar-collapse'>
                            <ul class='navbar-nav me-auto mb-2 mb-lg-0'>";
    
                            foreach ($elementoMenu as $indice => $valor) {
                                $salida .= "<li class='nav-item'>
                                                <a class='nav-link text-light' href='{$valor}'>{$indice}</a>
                                            </li>";
                            }
        $salida .= "
                            </ul>
                        </div>
                    </div>
                </nav>";
    
                return $salida;
        }
    }
