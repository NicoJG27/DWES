<?php

namespace App\Models;

use App\Interfaces\ResumenInterface;

class Pedido implements ResumenInterface
{
    private $cliente;
    private $productos = [];

    public function __construct($cliente)
    {
        $this->cliente = $cliente;
    }

    public function agregarProducto($producto)
    {
        $this->productos[] = $producto;
    }

    public function mostrarResumen()
    {
        echo "<h3>Pedido de " . $this->cliente->getNombre() . "</h3>";

        $total = 0;
        foreach ($this->productos as $producto) {
            $producto->mostrarResumen();
            $total += $producto->getPrecio();
        }

        echo "<strong>Total: " . number_format($total, 2, ',', '.') . "€</strong><br><br>";
    }
}
