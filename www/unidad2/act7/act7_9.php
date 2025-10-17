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
    $visitas = 0;
    aumentarVisitas($visitas);
    echo "<h1>El número de visitas ha aumentado a $visitas<br><br>";
    ?>
</body>

</html>