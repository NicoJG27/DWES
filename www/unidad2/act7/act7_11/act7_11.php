<?php include("../funciones.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $n = rand(5, 10);
    echo "<h1>$n cartas<br>";
    $cartas = generaMatrizCartasRand($n);
    foreach ($cartas as $carta) {
        echo "<img src='cartas/$carta.svg' width='100'>";
    }
    ?>
</body>

</html>