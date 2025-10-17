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
    $array = [2, 1, 24, 23];
    echo "Array original<br>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    echo "<br><br>Array filtrado<br>";
    echo "<pre>";
    print_r(arrayMayores($array));
    echo "</pre>";
    echo "<br><br>";
    ?>
</body>

</html>