<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numero = 7;
    echo ("El número es:  $numero");
    echo "<br>";
    echo ($numero <=> 0) == 0 ? "Cero" : (($numero <=> 0) == 1 ? "Positivo" : "Negativo");
    ?>

</body>

</html>