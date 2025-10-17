<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $numeros = range(0, 100);


    $seleccion = array_rand($numeros, 3);
    $num1 = $numeros[$seleccion[0]];
    $num2 = $numeros[$seleccion[1]];
    $num3 = $numeros[$seleccion[2]];


    $media = ($num1 + $num2 + $num3) / 3;


   echo "<h1>La media de $num1, $num2 y $num3 es ". number_format ($media, 1).  "</h1>";
    ?>

</body>

</html>