<?php

namespace clases\ejercicio1;

class Persona
{
    public string $nombre;
    public int $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function mostrarInformacion(): string
    {
        $salida = "<h2>Datos</h2>";
        $salida .= "<p>Nombre:{$this->nombre}</p>";
        $salida .= "<p>Edad:{$this->edad}</p>";
        return $salida;
    }

    // lo puedo realizar con el toString
    public function __toString(): string
    {
        return $this->mostrarInformacion();
    }
}
