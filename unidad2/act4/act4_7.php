<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Números con colores</h1>

    <?php
    $numeros = [];
    for ($i = 0; $i < 10; $i++) {
        $numeros[] = rand(1, 100);
    }


    echo "<h1> <table>";

    echo "<tr>";
    foreach ($numeros as $n) {

        if ($n % 2 == 0) {
            $color = "blue";
        } else {
            $color = "red";
        }
        echo "<td style='color:$color'>$n</td>";
    }
    echo "</tr>";

    echo "</table> </h1>";
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