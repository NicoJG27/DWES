<?php
namespace App\Models;

class ProductoFisico extends Producto {
    private float $peso;

    public function __construct(string $codigo, float $precio, float $peso) {
        parent::__construct($codigo, $precio);
        $this->peso = $peso;
    }

    public function mostrarDetalle() {
        echo "📦 Producto físico " . $this->getCodigo() . " - " . $this->getPrecio() . "€ (" . $this->peso . " kg)<br>";
    }
}
