<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $usuario = "Pepe"; 

    echo $usuario ?? "Debes introducir un usuario";
    echo "<br>";
    echo ($usuario === null)
        ? "Debes introducir un usuario"
        : "Bienvenido $usuario";
    ?>

</body>

</html>