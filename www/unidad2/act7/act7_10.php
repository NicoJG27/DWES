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
    echo "<h1>El iva es del 21%<br>";
    echo "Precio final de 100: " . $calcularPrecioFinal(100) . "<br>";
    echo "Precio final de 250: " . $calcularPrecioFinal(250) . "<br>";
    echo "Precio final de 50: " . $calcularPrecioFinal(50) . "<br><br>";
    ?>
</body>

</html>