<?php include("act7_6.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 40;
    $b = 3;
    echo "<h1>Las operaciones se hacen con los números $a y $b";

    $operaciones = ["sumar", "restar", "multiplicar", "dividirBasico"];

    echo "<ul>";
    foreach ($operaciones as $funcion) {
        $resultado = call_user_func($funcion, $a, $b);
        echo "<li>" . ucfirst($funcion) . ": $resultado</li>";
    }
    echo "</ul></h1>";
    ?>
</body>

</html>