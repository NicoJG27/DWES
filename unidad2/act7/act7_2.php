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
    $tam = 5;   
    $min = 5;   
    $max = 10;
    echo "<pre>";
    print_r(arrayAleatorio(5,5,10));
    echo "</pre>";
    ?>
</body>

</html>