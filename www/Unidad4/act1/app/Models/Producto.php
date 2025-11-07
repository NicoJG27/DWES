<?php

namespace App\Models;

use App\Interfaces\DetalleInterface;

abstract class Producto implements DetalleInterface
{
    private string $codigo;
    protected float $precio;

    public function __construct(string $codigo, float $precio)
    {
        $this->codigo = $codigo;
        $this->precio = $precio;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio): void
    {
        $this->precio = $precio;
    }

    abstract public function mostrarDetalle();
}
