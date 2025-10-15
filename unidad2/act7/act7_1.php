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
    $num = 5;
    echo "El número $num es " . (esPar($num) ? "par" : "impar") . "<br><br>";
    ?>
</body>

</html>