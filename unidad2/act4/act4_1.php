<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

</head>

<body>

    <?php
    $personas = [
        "Ana" => 165,
        "Luis" => 172,
        "Marta" => 158
    ];

    $suma = 0;
    $maxAltura = 0;
    $personaAlta = "";

    echo "<h1>Alturas de las personas</h1>";
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Altura (cm)</th></tr>";

    foreach ($personas as $nombre => $altura) {
        echo "<tr><td>$nombre</td><td>$altura</td></tr>";
        $suma += $altura;

        if ($altura > $maxAltura) {
            $maxAltura = $altura;
            $personaAlta = $nombre;
        }
    }

    $media = $suma / count($personas);

    echo "<tr><td>Altura media</td><td>". number_format ($media, 2) . "</td></tr>";
    echo "<tr><td>Más alto</td><td>" . $personaAlta . "</td></tr>";
    echo "</table>";
    ?>

</body>

</html>