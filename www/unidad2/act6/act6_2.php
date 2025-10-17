<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nombreCompleto = "Ana Maria Lopez Perez";
    $partes = explode(" ", $nombreCompleto);


    $nombre = $partes[0] . " " . $partes[1];
    $primerApellido = $partes[2];
    $segundoApellido = $partes[3];


    $iniciales = "";
    foreach ($partes as $palabra) {
        $iniciales .= strtoupper($palabra[0]) . ".";
    }


    echo "Nombre completo: $nombreCompleto<br><br>";
    echo "Nombre: $nombre<br><br>";
    echo "Primer apellido: $primerApellido<br><br>";
    echo "Segundo apellido: $segundoApellido<br><br>";
    echo "Iniciales: $iniciales";
    ?>

</body>

</html>