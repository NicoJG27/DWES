<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $personas = [
        ['nombre' => 'Fede', 'altura' => 193, 'email' => 'fede@correo.com'],
        ['nombre' => 'Ana', 'altura' => 165, 'email' => 'fede@correo.com'],
        ['nombre' => 'Luis', 'altura' => 172, 'email' => 'fede@correo.com']
    ];
    echo "<h1>Listado de personas</h1>";
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Altura (cm)</th><th>Email</th></tr>";


    foreach ($personas as $persona) {
        echo "<tr>";
        echo "<td>{$persona['nombre']}</td>";
        echo "<td>{$persona['altura']}</td>";
        echo "<td>{$persona['email']}</td>";
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