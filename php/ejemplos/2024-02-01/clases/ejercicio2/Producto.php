<?php

namespace clases\ejercicio2;

class Producto
{
    public int $idProducto;
    public string $nombre;
    public string $descripcion;
    public float $precio;
    public int $stock;

    public function __construct($idProducto, $nombre, $descripcion, $precio, $stock)
    {
        $this->idProducto = $idProducto;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    public function mostrarDetalles()
    {
        $salida = "<h2>Datos</h2>";
        $salida .= "<ul>";
        $salida .= "<li>Id: " . $this->idProducto . "</li>";
        $salida .= "<li>Nombre: " . $this->nombre . "</li>";
        $salida .= "<li>Descripción: " . $this->descripcion . "</li>";
        $salida .= "<li>Precio: " . $this->precio . "</li>";
        $salida .= "<li>Stock: " . $this->stock . "</li>";
        $salida .= "</ul>";
        return $salida;
    }

    public function __toString()
    {
        return $this->mostrarDetalles();
    }

    public function actualizarStock(int $cantidad): self
    {
        $this->stock = $cantidad;
        return $this;
    }

    public function calcularPrecioDescuento(float $porcentajeDescuento): self
    {
        $this->precio = $this->precio * (1 - $porcentajeDescuento);
        return $this;
    }
}
