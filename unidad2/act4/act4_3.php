<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $generos = [];
    for ($i = 0; $i < 5; $i++) {
        $generos[] = rand(0, 1) ? "M" : "F";
    }

    echo "<h2>Array generado:</h2>";
    print_r($generos);


    $contador = [];

    foreach ($generos as $g) {
        if (isset($contador[$g])) {
            $contador[$g]++;
        } else {
            $contador[$g] = 1;
        }
    }


    echo "<h2>Resultado del conteo:</h2>";
    echo "<pre>";
    print_r($contador);
    echo "</pre>";
    ?>

</body>

</html>