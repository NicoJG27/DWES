<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
    $num1 = rand(0, 100);
    $num2 = rand(0, 100);
    $num3 = rand(0, 100);
    $nummay;
    if ($num1 > $num2 && $num1 > $num3 ) {
       $nummay = $num1  ;
    }elseif ($num2 > $num1 && $num2 > $num3) {
       $nummay = $num2 ;
    }else {
       $nummay = $num3 ;
    }

    ?>
    <h1>Juego: Mayor de tres números</h1>
    <ul>
    <li>Número 1: <b> <?php echo $num1 ?> </b> </li>
    <li>Número 2: <b> <?php echo $num2 ?> </b> </li>
    <li>Número 3: <b> <?php echo $num3 ?> </b> </li>
    </ul>
    <h2>El número mayor es: <?php echo $nummay ?></h2>

</body>
</html>