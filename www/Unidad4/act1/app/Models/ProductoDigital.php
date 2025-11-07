<?php

namespace App\Models;

class ProductoDigital extends Producto
{
    private float $tamanoArchivo;

    public function __construct(string $codigo, float $precio, float $tamanoArchivo)
    {
        parent::__construct($codigo, $precio);
        $this->tamanoArchivo = $tamanoArchivo;
    }

    public function mostrarDetalle()
    {
        echo "💾 Producto digital " . $this->getCodigo() . " - " . $this->getPrecio() . "€ (" . $this->tamanoArchivo . "MB)<br>";
    }
}
