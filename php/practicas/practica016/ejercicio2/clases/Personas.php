<?php
    namespace clases;

    class Personas{
        public string $nombre;
        public string $apellidos;
        public string $numeroDocumentoIdentidad;
        public int $añoNacimiento;
        public string $paisNacimiento;
        public string $sexo;

        public function __construct(string $nombre = "", string $apellidos = "", string $numeroDocumentoIdentidad = "", int $añoNacimiento = 0, 
                                    string $paisNacimiento = "", string $sexo = "") {
                                        
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->numeroDocumentoIdentidad = $numeroDocumentoIdentidad;
            $this->añoNacimiento = $añoNacimiento;
            $this->paisNacimiento = $paisNacimiento;
            $this->sexo = $sexo;
        }
        public function datosPersona(): string {
            return  "<h2>Datos de {$this->nombre} {$this->apellidos}</h2>
                    Nombre = {$this->nombre} <br>
                    Apellidos = {$this->apellidos} <br>
                    Número de documento de identidad = {$this->numeroDocumentoIdentidad} <br>
                    Año de nacimiento = {$this->añoNacimiento} <br>
                    País de nacimiento = {$this->paisNacimiento} <br>
                    Sexo = {$this->sexo} <br><br>";
        }
    }