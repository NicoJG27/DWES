<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

      
    <?php
    $dado1 = rand(1, 6);
    $dado2 = rand(1, 6);

    if ($dado1 == $dado2) {
        $pareja = "Has sacado pareja de $dado1";
    } else {
        $pareja = "No has sacado pareja";
    }
    ?>

    <h1>¡Lanzamiento de Dados!</h1>
    
    <img src="images/<?php echo $dado1; ?>.svg" alt="Dado <?php echo $dado1; ?>">
    <img src="images/<?php echo $dado2; ?>.svg" alt="Dado <?php echo $dado2; ?>">    
    <h2><?php echo $pareja; ?></h2>




    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            margin-top: 50px;
            background-color: #f0f0f0;
        }
        img {
            width: 100px;
            margin: 10px;
        }
        h2 {
            margin-top: 20px;
        }
    </style>
</body>
</html>