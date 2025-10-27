<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numeros = [1, 2, 3, 4, 5];
    foreach ($numeros as $numero) {
        $numero++;
    }
    print_r($numeros);
    ?>
</body>

</html>