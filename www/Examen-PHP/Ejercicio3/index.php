<?php
require_once __DIR__ . '/funciones.php';

$productos = obtenerProductos();
$categorias = obtenerCategorias($productos);
$categoriaSeleccionada = $_POST['categoria'] ?? 'todas';

$productosVisibles = filtrarProductos($productos, $categoriaSeleccionada);
$importeTotal = calcularImporteTotal($productosVisibles);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pico.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Ejercicio 3 - Tienda</title>
</head>

<body>
    <main>
        <h1>Tienda de informática</h1>

        <form method="post" action="index.php">
            <label for="categoria">Filtrar por categoría</label>
            <select name="categoria" id="categoria">
                <option value="todas" <?php echo $categoriaSeleccionada === 'todas' ? 'selected' : ''; ?>>Todas</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?php echo $categoria; ?>" <?php echo $categoriaSeleccionada === $categoria ? 'selected' : ''; ?>>
                        <?php echo $categoria; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Aplicar filtro</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio (€)</th>
                    <th>Stock</th>
                    <th>Categoría</th>
                    <th>Importe (€)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productosVisibles as $producto): ?>
                    <?php $esCritico = $producto['stock'] <= 3; ?>
                    <tr class="<?php echo $esCritico ? 'stock-bajo' : ''; ?>">
                        <td><?php echo $producto['id']; ?></td>
                        <td><?php echo $producto['nombre']; ?></td>
                        <td><?php echo number_format($producto['precio'], 2, ',', '.'); ?></td>
                        <td><?php echo $producto['stock']; ?></td>
                        <td><?php echo $producto['categoria']; ?></td>
                        <td><?php echo number_format($producto['precio'] * $producto['stock'], 2, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <section class="resumen">
            <div>
                Mostrando <span><?php echo count($productosVisibles); ?></span> de <span><?php echo count($productos); ?></span> productos.
            </div>
            <div>
                Importe total: <span><?php echo number_format($importeTotal, 2, ',', '.'); ?> €</span>
            </div>
        </section>
    </main>
</body>

</html>