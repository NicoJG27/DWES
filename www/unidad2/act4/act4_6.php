<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $numeros = [];
    for ($i = 0; $i < 10; $i++) {
        $numeros[] = rand(1, 100);
    }

    echo "<h1>Original: " . implode(", ", $numeros) . "</h1>";

    $ultimo = array_pop($numeros);
    array_unshift($numeros, $ultimo);

    echo "<h1>Rotado: " . implode(", ", $numeros) . "</h1>";
    ?>

</body>

</html>
