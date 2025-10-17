<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $host = "localhost";
    $puerto = "3306";
    $usuario = "root";
    $clave = null;
    $debug = "true";

    print_r([$host, $puerto, $usuario, $clave, $debug]);

    var_dump($host, $puerto, $usuario, $clave, $debug);

    settype($puerto, "integer");
    settype($debug, "boolean");

    $clave = $clave ?? "";
    $clave = $clave ?: "";

    var_dump($host, $puerto, $usuario, $clave, $debug);
    ?>

</body>

</html>