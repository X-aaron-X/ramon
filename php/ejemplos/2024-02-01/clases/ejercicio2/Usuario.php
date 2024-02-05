<?php

namespace clases\ejercicio2;

class Usuario
{
    public int $idUsuario;
    public string $nombre;
    public string $email;
    public int $edad;
    public bool $activo;

    public function __construct(int $idUsuario, string $nombre, string $email, int $edad, bool $activo)
    {
        $this->idUsuario = $idUsuario;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->edad = $edad;
        $this->activo = $activo;
    }

    public function mostrarInformacion(): string
    {
        $salida = "<h2>Datos</h2>";
        $salida .= "<ul>";
        $salida .= "<li>Id: " . $this->idUsuario . "</li>";
        $salida .= "<li>Nombre: " . $this->nombre . "</li>";
        $salida .= "<li>Email: " . $this->email . "</li>";
        $salida .= "<li>Edad: " . $this->edad . "</li>";
        $salida .= "<li>Activo: " . ($this->activo ? "Si" : "No") . "</li>";
        $salida .= "</ul>";
        return $salida;
    }

    public function __toString(): string
    {
        return $this->mostrarInformacion();
    }
    public function activarUsuario(): self
    {
        $this->activo = true;
        return $this;
    }

    public function cambiarEdad(int $nuevaEdad): self
    {
        $this->edad = $nuevaEdad;
        return $this;
    }
}
