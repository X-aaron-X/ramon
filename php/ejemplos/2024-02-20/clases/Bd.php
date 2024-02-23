<?php
    namespace clases;

    use mysqli;

    class Bd {
        public static function conectarDb($db) {
            return @new mysqli('localhost', 'root', '', $db, '3307');
        }

        public static function insertarRegistros(string $db, string $tabla, array $registros): void {
            $conexion = self::conectarDb($db);
    
            if ($conexion->connect_error) {
                die("La conexión ha fallado: {$conexion->connect_error}");
            }

            if (count($registros) > 0) {
                // if ($conexion->query($sql)) {
                //     echo "Se insertaron correctamente los registros.";
                // } else {
                //     echo "Error al insertar los registros: {$conexion->error}";
                // }
            }

            $conexion->close();
        }
    }