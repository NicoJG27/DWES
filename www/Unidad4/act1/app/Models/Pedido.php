<?php

namespace App\Models;

use App\Interfaces\DetalleInterface;

class Pedido implements DetalleInterface
{
    private Cliente $cliente;
    private array $productos = [];

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function agregarProducto(Producto $producto)
    {
        $this->productos[] = $producto;
    }

    public function mostrarDetalle()
    {
        echo "<h3>Pedido de " . $this->cliente->__Tostring() . "</h3>";

        $total = 0;
        foreach ($this->productos as $producto) {
            $producto->mostrarDetalle();
            $total += $producto->getPrecio();
        }

        echo "<strong>Total: " . number_format($total, 2, ',', '.') . "€</strong><br><br>";
    }
}
