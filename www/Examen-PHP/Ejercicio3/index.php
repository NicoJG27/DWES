<?php
$productos = [
    ['id' => 1, 'nombre' => 'Portátil HP', 'precio' => 899.99, 'stock' => 5, 'categoria' => 'Informática'],
    ['id' => 2, 'nombre' => 'Mouse Logitech', 'precio' => 25.50, 'stock' => 15, 'categoria' => 'Periféricos'],
    ['id' => 3, 'nombre' => 'Teclado Mecánico', 'precio' => 79.99, 'stock' => 0, 'categoria' => 'Periféricos'],
    ['id' => 4, 'nombre' => 'Monitor Dell 27"', 'precio' => 299.00, 'stock' => 8, 'categoria' => 'Informática'],
    ['id' => 5, 'nombre' => 'Webcam HD', 'precio' => 50, 'stock' => 3, 'categoria' => 'Accesorios']
];

$filtro = $_POST["cat"] ?? "";

$total = 0;

$lista = [];

foreach ($productos as $p) {
    if ($filtro == "" || $p["categoria"] == $filtro) {
        $lista[] = $p;
        $total += $p["precio"] * $p["stock"];
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../pico.min.css">
    <title>Tienda</title>
</head>

<body>

    <h2>Tienda de Informática</h2>

    <form method="POST">
        <select name="cat">
            <option value="" <?= $filtro == "" ? "selected" : "" ?>>Todas</option>
            <option value="Informática" <?= $filtro == "Informática" ? "selected" : "" ?>>Informática</option>
            <option value="Periféricos" <?= $filtro == "Periféricos" ? "selected" : "" ?>>Periféricos</option>
            <option value="Accesorios" <?= $filtro == "Accesorios" ? "selected" : "" ?>>Accesorios</option>
        </select>

        <button type="submit">Filtrar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $p): ?>
                <tr style="<?= ($p["stock"] <= 3 ? 'background:#ffb3b3' : '') ?>">
                    <td><?= $p["id"] ?></td>
                    <td><?= $p["nombre"] ?></td>
                    <td><?= $p["precio"] ?> €</td>
                    <td><?= $p["stock"] ?></td>
                    <td><?= $p["categoria"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h3>Total del grupo visible: <?= number_format($total, 2) ?> €</h3>

</body>

</html>