<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num = 0;
    while ($num < 50 || $num++) {
        echo ($num);
    }
    ?>

    <h1>Números pares del 0 al 10</h1>
    <ul>
        <li>Número 1: <b> <?php echo $num1 ?> </b> </li>
        <li>Número 2: <b> <?php echo $num2 ?> </b> </li>
        <li>Número 3: <b> <?php echo $num3 ?> </b> </li>
    </ul>

</body>

</html>