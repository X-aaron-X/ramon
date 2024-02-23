<?php
    namespace clases;
    
    class Personas{
        public string $nombre;
        public string $apellidos;
        public string $numeroDocumentoIdentidad;
        public int $anoNacimiento;

        public function __construct(string $nombre = "", string $apellidos = "", string $numeroDocumentoIdentidad = "", int $anoNacimiento = 0) {
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->numeroDocumentoIdentidad = $numeroDocumentoIdentidad;
            $this->anoNacimiento = $anoNacimiento;
        }

        public function datosPersona(): string {
            return  "<h2>Datos de {$this->nombre} {$this->apellidos}</h2>
                    Nombre = {$this->nombre} <br>
                    Apellidos = {$this->apellidos} <br>
                    Número de documento de identidad = {$this->numeroDocumentoIdentidad} <br>
                    Año de nacimiento = {$this->anoNacimiento} <br><br>";
        }
    }