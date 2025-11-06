<?php
require_once __DIR__ . '/app/Interfaces/ResumenInterface.php';
require_once __DIR__ . '/app/Models/Producto.php';
require_once __DIR__ . '/app/Models/ProductoFisico.php';
require_once __DIR__ . '/app/Models/ProductoDigital.php';
require_once __DIR__ . '/app/Models/Cliente.php';
require_once __DIR__ . '/app/Models/Pedido.php';

use App\Models\ProductoFisico;
use App\Models\ProductoDigital;
use App\Models\Cliente;
use App\Models\Pedido;

echo "<h2>🛒 Resumen de pedidos</h2>";

// Productos
$tv = new ProductoFisico("TV123", 499.99, 10);
$ebook = new ProductoDigital("EBOOK456", 9.99, 2);
$game = new ProductoDigital("GAME42", 59.99, 10);
$macbook = new ProductoFisico("MACBOOK", 1500.99, 1);
$ebook2 = new ProductoDigital("EBOOK123", 10.99, 1);

// Clientes
$ana = new Cliente("Ana López", "ana@example.com");
$fede = new Cliente("Fede Ruiz", "fede@example.com");

// Pedidos
$pedido1 = new Pedido($ana);
$pedido1->agregarProducto($tv);
$pedido1->agregarProducto($ebook);
$pedido1->agregarProducto($game);

$pedido2 = new Pedido($fede);
$pedido2->agregarProducto($macbook);
$pedido2->agregarProducto($ebook2);

// Mostrar resumen
$pedido1->mostrarResumen();
$pedido2->mostrarResumen();
