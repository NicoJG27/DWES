<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $texto = "PHP es fantástico. Con PHP puedes construir sitios dinámicos. PHP mola.";
    $termino = "PHP";

    $textoResaltado = str_replace($termino, "<mark>$termino</mark>", $texto);

    echo "<b>Texto: </b>$texto";
    echo "<br><br>";
    echo "<b>Término: </b>$termino";
    echo "<br><br>";
    echo "<b>Resultado: </b>$textoResaltado";
    ?>

</body>

</html>