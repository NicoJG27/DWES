<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
 
    <style>
        body {
            font-family: 'Libre Baskerville', serif;
        }
    </style>
    <?php
    $num1 = rand(0, 100);
    $num2 = rand(0, 100);
    $media = ($num1 + $num2) / 2;
    echo "<p>Número 1: $num1</p>";
    echo "<p>Número 2: $num2</p>";
    echo "<p>Media aritmética: $media</p>";
    ?>
</body>
</html>