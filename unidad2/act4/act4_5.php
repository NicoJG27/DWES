<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Listado de Productos</h2>

    <?php

    $productos = [
        ["nombre" => "Pan", "precio" => 1.20, "iva" => 1],
        ["nombre" => "Leche", "precio" => 0.95, "iva" => 2],
        ["nombre" => "Libro", "precio" => 12.00, "iva" => 3],
        ["nombre" => "TV", "precio" => 300.00, "iva" => 4],
        ["nombre" => "Zapatos", "precio" => 50.00, "iva" => 4]
    ];


    $ivas = [1 => 0, 2 => 0.04, 3 => 0.1, 4 => 0.21];

    echo "<table>";
    echo "<tr>
    <th>Nombre</th>
    <th>Precio sin IVA</th>
    <th>Tipo de IVA</th>
    <th>Precio con IVA</th>
    </tr>";

    foreach ($productos as $p) {
        $precioConIVA = $p["precio"] * (1 + $ivas[$p["iva"]]);
        echo "<tr>";
        echo "<td>{$p['nombre']}</td>";
        echo "<td>{$p['precio']}</td>";
        echo "<td>{$p['iva']}</td>";
        echo "<td>" . number_format($precioConIVA, 2) . "</td>";
        echo "</tr>";
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