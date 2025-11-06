<?php
$num = random_int(1, 10);
$contador = 0;

if (!empty($_POST['numero'])) {
    echo $num;
} else {
    echo 'No se ha especificado el número';
};

if ($_POST ['numero'] < 0 || $_POST ['numero'] > 10) {
    echo'El número debe estar entre 0 y 10';
};


if ($_POST ['numero'] == $num) {
    echo 'Has adivinado el número';
    $contador ++;
    echo 'En intentos:' . $contador ;
}else {
    echo 'No lo has adivinado';
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
        <h1>Número secreto: Elige un número entre 1 y 10</h1>
        <form method="post" action="index.php">
            <input type="number" name="numero" min="1" max="99">
            <input type="submit">
        </form>
    </main>
</body>

</html>