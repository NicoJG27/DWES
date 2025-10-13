<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $comentario = "Este es mi comentario de prueba para calcular cuántos caracteres tiene y cuánto falta para llegar al límite de 160.";
    $longitud = strlen($comentario);
    $limite = 160;
    $restantes = $limite - $longitud;

    echo "El comentario tiene $longitud caracteres.<br>";

    if ($restantes > 0) {
        echo "Faltan $restantes caracteres para llegar al límite de 160.";
    } elseif ($restantes < 0) {
        echo "Te has pasado por  $restantes  caracteres del límite.";
    } else {
        echo "¡Exactamente 160 caracteres!";
    }
    ?>

</body>

</html>