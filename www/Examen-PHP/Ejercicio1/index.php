<?php
$numero1 = random_int(1, 100);
$numero2 = random_int(1, 100);
$numero3 = random_int(1, 100);
$numero4 = random_int(1, 100);
$numero5 = random_int(1, 100);
$numeros = array();
$numeros[0] = $numero1;
$numeros[1] = $numero2;
$numeros[2] = $numero3;
$numeros[3] = $numero4;
$numeros[4] = $numero5;
$total = array_sum($numeros);


if ($numeros <= 39) {
    $categoria = 'Bajo';
}
if ($numeros >= 40 && $numeros <= 69) {
    $categoria = 'Media';
}
if ($numeros >= 70 && $numeros <= 100) {
    $categoria = 'Alta';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pico.min.css">
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Numeros y Categorias</h1>
        <table>
            <tr>Numero </tr>
            <td><?php echo $numeros[0] ?></td>
            <td><?php echo $numeros[1] ?></td>
            <td><?php echo $numeros[2] ?></td>
            <td><?php echo $numeros[3] ?></td>
            <td><?php echo $numeros[4] ?></td>


            <tr>Categoría
                <td><?php ?></td>
            </tr>
        </table>
        <h1>Sum total: <?php echo $total ?></h1>
    </main>
</body>

</html>