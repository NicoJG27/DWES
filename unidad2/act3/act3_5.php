<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Suma los numeros del 1 al 10</h1>
        <?php
        $num = 1;
        $suma = 0;
        while ($num <= 10) {
            $suma += $num;
            $num ++;
        }
        ?>
        <p>La suma de los numeros del 1 al 10 es: <b> <?php echo $suma ?> </b></p>
</body>
</html>