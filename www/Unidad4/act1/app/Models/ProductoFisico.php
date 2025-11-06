<?php
namespace App\Models;

class ProductoFisico extends Producto {
    private $peso;

    public function __construct($codigo, $precio, $peso) {
        parent::__construct($codigo, $precio);
        $this->peso = $peso;
    }

    public function mostrarResumen() {
        echo "📦 Producto físico " . $this->getCodigo() . " - " . $this->getPrecio() . "€ (" . $this->peso . " kg)<br>";
    }
}
