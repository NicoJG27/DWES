<?php

declare(strict_types=1);

function obtenerProductos(): array
{
    return [
        ['id' => 1, 'nombre' => 'Portátil HP', 'precio' => 899.99, 'stock' => 5, 'categoria' => 'Informática'],
        ['id' => 2, 'nombre' => 'Mouse Logitech', 'precio' => 25.50, 'stock' => 15, 'categoria' => 'Periféricos'],
        ['id' => 3, 'nombre' => 'Teclado Mecánico', 'precio' => 79.99, 'stock' => 0, 'categoria' => 'Periféricos'],
        ['id' => 4, 'nombre' => 'Monitor Dell 27"', 'precio' => 299.00, 'stock' => 8, 'categoria' => 'Informática'],
        ['id' => 5, 'nombre' => 'Webcam HD', 'precio' => 50.00, 'stock' => 3, 'categoria' => 'Accesorios'],
    ];
}

function obtenerCategorias(array $productos): array
{
    $categorias = array_map(static fn ($producto) => $producto['categoria'], $productos);
    $categorias = array_values(array_unique($categorias));
    sort($categorias);

    return $categorias;
}

function filtrarProductos(array $productos, ?string $categoria): array
{
    if ($categoria === null || $categoria === '' || $categoria === 'todas') {
        return $productos;
    }

    return array_values(array_filter(
        $productos,
        static fn ($producto) => $producto['categoria'] === $categoria
    ));
}

function calcularImporteTotal(array $productos): float
{
    $total = 0.0;
    foreach ($productos as $producto) {
        $total += $producto['precio'] * $producto['stock'];
    }

    return $total;
}
