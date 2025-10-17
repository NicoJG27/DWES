<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Personas</h2>

    <?php
    $generos = [];
    for ($i = 0; $i < 5; $i++) {
        $generos[] = rand(0, 1) ? "M" : "F";
    }

    echo "<table>";
    echo "<tr>
    <th>#</th>
    <th>Sexo</th>
    </tr>";
    foreach ($generos as $index => $g) {
        echo "<tr>
        <td>" . ($index + 1) . "</td>
        <td>$g</td>
        </tr>";
    }
    echo "</table>";

    $contador = array_count_values($generos);


    print_r($contador);
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