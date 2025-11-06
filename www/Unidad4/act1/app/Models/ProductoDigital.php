<?php

namespace App\Models;

class ProductoDigital extends Producto
{
    private $tamanoArchivo;

    public function __construct($codigo, $precio, $tamanoArchivo)
    {
        parent::__construct($codigo, $precio);
        $this->tamanoArchivo = $tamanoArchivo;
    }

    public function mostrarResumen()
    {
        echo "💾 Producto digital " . $this->getCodigo() . " - " . $this->getPrecio() . "€ (" . $this->tamanoArchivo . "MB)<br>";
    }
}
