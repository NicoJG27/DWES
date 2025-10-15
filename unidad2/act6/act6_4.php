<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $email = "fhuerui697@g.educaand.es";

    list($usuario, $dominio) = explode("@", $email);

    if (strlen($usuario) >= 3) {
        $usuarioOculto = substr($usuario, 0, 1) . str_repeat("*", strlen($usuario) - 2) . substr($usuario, -1);
    } else {
        $usuarioOculto = $usuario;
    }


    echo "<b>Email:</b> $email";
    echo "<br><br>";
    echo "<b>Usuario:</b> $usuario";
    echo "<br><br>";
    echo "<b>Dominio:</b> $dominio";
    echo "<br><br>";
    echo "<b>Usuario enmascarado:</b> $usuarioOculto";
    ?>

</body>

</html>