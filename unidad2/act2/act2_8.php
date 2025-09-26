<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $precio1 = 25;
    $precio2 = 30;

    echo ($precio1 <=> $precio2) == -1 ? "El producto 1 es más barato" 
    : (($precio1 <=> $precio2) == 0 ? "Ambos productos cuestan lo mismo" 
    : "El producto 1 es más caro");
    ?>

</body>

</html>