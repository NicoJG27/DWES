<?php

namespace App\Models;

use App\Interfaces\ResumenInterface;

abstract class Producto implements ResumenInterface
{
    private $codigo;
    protected $precio;

    public function __construct($codigo, $precio)
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

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    abstract public function mostrarResumen();
}
