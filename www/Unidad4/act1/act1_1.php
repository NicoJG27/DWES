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
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Gestor de Pedidos</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>

<body>

    <main class="container">
        <h2>🛒 Resumen de pedidos</h2>
        <article>
            <?php
            $tv = new ProductoFisico("TV123", 499.99, 10);
            $ebook = new ProductoDigital("EBOOK456", 9.99, 2);
            $game = new ProductoDigital("GAME42", 59.99, 10);

            $ana = new Cliente("Ana López", "ana@example.com");

            $pedido1 = new Pedido($ana);
            $pedido1->agregarProducto($tv);
            $pedido1->agregarProducto($ebook);
            $pedido1->agregarProducto($game);

            $pedido1->mostrarResumen();
            ?>
        </article>
        <article>
            <?php
            $macbook = new ProductoFisico("MACBOOK123", 1500.99, 1);
            $ebook = new ProductoDigital("EBOOK456", 10.99, 1);

            $nico = new Cliente("Nicolas Jimenez", "nico@example.com");

            $pedido2 = new Pedido($nico);
            $pedido2->agregarProducto($macbook);
            $pedido2->agregarProducto($ebook);

            $pedido2->mostrarResumen();
            ?>
        </article>
    </main>
</body>

</html>