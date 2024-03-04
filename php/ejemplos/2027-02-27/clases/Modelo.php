<?php
    namespace clases;

    use mysqli;
    use mysqli_result;

    class Modelo {
        private mysqli $db;
        private mysqli_result $resultados;
        public array $datos = [];
        private array $campos = [];
        public string $tabla;

        public function __construct(mysqli $db) {
            $this->db = $db;
        }

        public function query($consulta): mysqli_result {
            $this->resultados = $this->db->query($consulta);
            return $this->resultados;
        }

        public function save() {
            $campos = implode(",", $this->campos);

            foreach ($this->campos as $campo) {
                $valores[] = "'{$this->datos[$campo]}'";
            }

            $datos = implode(',', $valores);
            $consulta = "INSERT INTO {$this->tabla}({$campos}) VALUES ({$datos})";

            $this->db->query($consulta);
        }

        public function delete(string $id) {
            $consulta = "DELETE FROM {$this->tabla} WHERE id = {$id}";

            var_dump($consulta);

            //$this->db->query($consulta);
        }

        public function setDatos(array $parametros = []): self {
            if (count($parametros) == 0) {
                foreach ($this->campos as $campo) {
                    $this->datos[$campo] = "";
                }
            }
            else {
                // asigno los datos a un array asociativo
                foreach ($this->campos as $campo) {
                    $this->datos[$campo] = $parametros[$campo];
                }
            }

            return $this;
        }
        public function setCampos(array $campos): self {
            $this->campos = $campos;

            // inicializo los datos
            foreach ($this->campos as $campo) {
                $this->datos[$campo] = "";;
            }

            return $this;
        }

        public function gridViewBotones(array $campos = [], array $botones = []): string {
            if ($this->resultados->num_rows > 0) {
                $registros = $this->resultados->fetch_all(MYSQLI_ASSOC);
                // mostrar los registros
                $salida = "<table class='table table-striped table-bordered'>";
                $salida .= "<thead class='table-dark'><tr>";

                // compruebo si el usuario me ha pasado los campos a mostrar
                if (count($campos) == 0) {
                    // si no me ha pasado los campos los leo del primer registro de la base de datos
                    $campos = array_keys($registros[0]);
                }

                foreach ($campos as $campo) {
                    $salida .= "<th>$campo</th>";
                }
                if (count($botones) > 0) {
                    // añado una columna para los botones
                    $salida .= "<td>Acciones</td>";
                }

                $salida .= "</tr></thead>";
                // muestro todos los registros
                foreach ($registros as $registro) {
                    $salida .= "<tr>";
                    // mostrando los campos que hayamos seleccionado
                    foreach ($campos as $campo) {
                        $salida .= "<td>" . $registro[$campo] . "</td>";
                    }
                    // mostrando los botones
                    if (count($botones) > 0) {
                        $salida .= "<td>";

                        foreach ($botones as $label => $enlace) {
                            $salida .= "<a href='{$enlace}?id={$registro['id']}'>{$label}</a> ";
                        }

                        // cerramos la celda
                        $salida .= "</td>";
                    }

                    $salida .= "</tr>";
                }
                $salida .= "</table>";
            } else {
                $salida = "No hay registros";
            }
            // colocar el puntero al principio de los registros
            $this->resultados->data_seek(0);

            return $salida;
        }
    }
