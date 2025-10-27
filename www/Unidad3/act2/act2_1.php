<?php
$todos_color = [
    'bl'  => 'white',
    'ro'  => 'red',
    've'  => 'green',
    'az'  => 'blue',
    'am'  => 'yellow',
    'na'  => 'orange',
    'ros' => 'pink'
];


$color = 'bl';


if (isset($_COOKIE['color']) && array_key_exists($_COOKIE['color'], $todos_color)) {
    $color = $_COOKIE['color'];
}

if (isset($_POST['color']) && array_key_exists($_POST['color'], $todos_color)) {
    $color = $_POST['color'];
    setcookie('color', $color, time() + 86400);
}

$bg_color = $todos_color[$color];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Color con Cookie</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>
<body style="background-color: <?php echo $bg_color; ?>;">
    <main class="container" style="max-width:600px;margin:40px auto;">
        <h1>Selecciona un color</h1>
        <form method="post" action="">
            <label>
                <select name="color">
                    <option value="bl" <?php if($color=="bl") echo "selected"; ?>>Blanco</option>
                    <option value="ro" <?php if($color=="ro") echo "selected"; ?>>Rojo</option>
                    <option value="ve" <?php if($color=="ve") echo "selected"; ?>>Verde</option>
                    <option value="az" <?php if($color=="az") echo "selected"; ?>>Azul</option>
                    <option value="am" <?php if($color=="am") echo "selected"; ?>>Amarillo</option>
                    <option value="na" <?php if($color=="na") echo "selected"; ?>>Naranja</option>
                    <option value="ros" <?php if($color=="ros") echo "selected"; ?>>Rosa</option>
                </select>
            </label>
            <input type="submit" value="Cambiar color">
        </form>
        <p>El color elegido se guardará en una cookie durante 24 horas 🍪</p>
    </main>
</body>
</html>
