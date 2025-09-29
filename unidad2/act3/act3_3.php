<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $num = rand(1, 3);
    $castellano;
    if ($num == 1) {
        $castellano = $num;
        $castellano = "uno";
    }
    elseif ($num == 2) {
        $castellano = $num;
        $castellano = "dos";
    } else {
        $castellano = $num;
        $castellano = "tres";
    }

    ?>

    <h1>El número generado es <?php echo $num ?> y en castellano es: <?php echo $castellano ?></h1>
</body>

</html>