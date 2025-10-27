<?php
session_start();
$todos_color = [
    'bl'  => 'white',
    'ro'  => 'red',
    've'  => 'green',
    'az'  => 'blue',
    'am'  => 'yellow',
    'na'  => 'orange',
    'ros' => 'pink'
];
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : 'bl';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $color = $_POST['color'];
    setcookie('color', $color, time() + 86400); 
    header("Location: act2_1.php"); 
    exit();
}
$bg_color = $todos_color[$color] ?? 'white';
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
        <form method="post" action="act2_1.php">
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



