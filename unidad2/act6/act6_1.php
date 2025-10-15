<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $comentario = "Este es mi comentario para soporte técnico.";
    $longitud = strlen($comentario);
    $limite = 160;
    $restantes = $limite - $longitud;

    echo "<h2>Comentario</h2>";
    echo "$comentario<br><br>";
    echo "Longitud: <b>$longitud</b> caracteres<br><br>";

    if ($restantes > 0) {
        echo "Te quedan <b>$restantes</b> caracteres.";
    } elseif ($restantes < 0) {
        echo "Te has pasado por <b>$restantes</b> caracteres.";
    } else {
        echo "Has alcanzado el límite exacto de 160 caracteres.";
    }
    ?>


</body>

</html>