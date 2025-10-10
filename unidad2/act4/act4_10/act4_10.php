<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $cantidadDados = rand(2, 7);
    $dados = [];

    for ($i = 0; $i < $cantidadDados; $i++) {
        $dados[] = rand(1, 6);
    }
   
    echo "<h2>Tirada de 5 dados:</h2>";
    foreach ($dados as $dado) {
        echo "<img src='images/$dado.svg'>";
    }

  
    sort($dados);

 
    echo "<h2>Tirada ordenada:</h2>";
    foreach ($dados as $dado) {
        echo "<img src='images/$dado.svg'>";
    }
    ?>


</body>

</html>