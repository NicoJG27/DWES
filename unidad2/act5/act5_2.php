<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>

<body>
    <?php
    $empleados = [
        ["nombre" => "Ana", "departamento" => "Ventas", "estado" => "activo"],
        ["nombre" => "Luís", "departamento" => "TI", "estado" => "inactivo"],
        ["nombre" => "Marta", "departamento" => "Marketing", "estado" => "activo"]
    ];

    echo "<h3>Empleados</h3>";
    echo "<table>
            <tr>
                <th>Nombre</th>
                <th>Departamento</th>
                <th>Estado</th>
            </tr>";
    foreach ($empleados as $todos) {
        echo "<tr>
                <td>{$todos['nombre']}</td>
                <td>{$todos['departamento']}</td>
                <td>{$todos['estado']}</td>
              </tr>";
    }
    echo "</table>";

    $activos = [];
    foreach ($empleados as $e) {
        if ($e["estado"] == "activo") {
            $activos[] = $e;
        }
    }


    echo "<h3>Empleados activos</h3>";
    echo "<table>
<tr>
<th>Nombre</th>
<th>Departamento</th>
<th>Estado</th>
</tr>";

    foreach ($activos as $empleado) {
        echo "<tr>
            <td>{$empleado['nombre']}</td>
            <td>{$empleado['departamento']}</td>
            <td>{$empleado['estado']}</td>
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