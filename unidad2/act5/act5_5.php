<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>

<body>
    <?php
    $productos = [
        ["nombre" => "Camiseta", "precio" => 15],
        ["nombre" => "Pantalón", "precio" => 35],
        ["nombre" => "Zapatos", "precio" => 50],
        ["nombre" => "Gorra", "precio" => 10]
    ];

    $productosCaros = [];
    foreach ($productos as $p) {
        if ($p["precio"] > 20) {
            $productosCaros[] = $p;
        }
    }

    echo "<h3>Lista completa de productos</h3>";
    echo "<table>
<tr>
<th>Nombre</th>
<th>Precio (€)</th>
</tr>";
    foreach ($productos as $p) {
        echo "<tr>
    <td>{$p['nombre']}</td>
    <td>{$p['precio']}</td>
    </tr>";
    }
    echo "</table>";

    echo "<h3>Productos con precio superior a 20 €</h3>";
    echo "<table>
    <tr>
    <th>Nombre</th>
    <th>Precio (€)</th>
    </tr>";
    foreach ($productosCaros as $p) {
        echo "<tr>
        <td>{$p['nombre']}</td>
        <td>{$p['precio']}</td>
        </tr>";
    }
    echo "</table>";
    ?>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</body>

</html>