<?php include("funciones.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h1>La división de 3 entre 4 es: <span style='color: blue'>" . dividir(3, 4) . "</span><br>";
    echo "La división de 6 entre 0 es: <span style='color: blue'>" . dividir(6, 0) . "</span><br>";
    echo "La división de 6 entre 4 (valor por defecto, porque no he indicado el divisor) es: <span style='color: blue'>" . dividir(6) . "</span></h1>";

    ?>
</body>

</html>