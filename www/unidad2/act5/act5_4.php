<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>

<body>
    <?php
    $camposObligatorios = ["nombre", "email", "edad", "telefono"];
    $camposEnviados = ["nombre" => "Ana", "edad" => 25];


    echo "<h1>Validación de formulario</h1>";
    echo "<h2>Campos obligatorios</h2>";
    echo "<table>";
    echo "<tr>
    <th>Campo</th>
    </tr>";
    foreach ($camposObligatorios as $obli) {
        echo "<tr><td>$obli</td></tr>";
    }
    echo "</table>";


    echo "<h3>Campos enviados por el usuario</h3>";
    echo "<table>
    <tr>
    <th>Campo</th>
    <th>Valor</th>
    </tr>";

    foreach ($camposEnviados as $campo => $valor) {
        echo "<tr>";
        echo "<td>$campo</td>";
        echo "<td>$valor</td>";
        echo "</tr>";
    }

    echo "</table>";


    $clavesEnviadas = array_keys($camposEnviados);

    $faltan = array_diff($camposObligatorios, $clavesEnviadas);

    echo "<h2>Campos faltantes</h2><ul style='color: red'>";
    foreach ($faltan as $campo) {
        echo "<li>$campo</li>";
    }
    echo "</ul>";
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