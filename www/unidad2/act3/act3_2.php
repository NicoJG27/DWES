<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $num = rand(0, 10);

    switch ($num) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            $nota = $num;
            $nota = "Insuficiente";
            break;
        case 5:
            $nota = $num;
            $nota = "Suficiente";
            break;
        case 6:
            $nota = $num;
            $nota = "Bien";
            break;
        case 7:
        case 8:
            $nota = $num;
            $nota = "Notable";
            break;
        case 9:
        case 10:
            $nota = $num;
            $nota = "Sobresaliente";
            break;
    }
    ?>

    <h1>Simulación de Calificación</h1>
    <p>La nota generada es : <b> <?php echo $num ?> </b> </p>
    <h2>Calificación : <?php echo $nota ?></h2>
</body>

</html>