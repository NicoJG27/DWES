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
    $num = 2674;
    $pos = 3;
    echo "<h1>El número es $num y la posición que pido es la $pos<br>";
    echo "En esa posición está el " . digitoN($num, $pos) . "<br><br>";
    ?>
</body>

</html>