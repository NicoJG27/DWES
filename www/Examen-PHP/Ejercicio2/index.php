<?php
session_start();

if (!isset($_SESSION["secreto"])) {
    $_SESSION["secreto"] = rand(1, 10);
    $_SESSION["intentos"] = 0;
}

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num = $_POST["numero"];

    if ($num < 1 || $num > 10) {
        $mensaje = "El número debe estar entre 1 y 10.";
    } else {

        $_SESSION["intentos"]++;

        if ($num == $_SESSION["secreto"]) {
            $mensaje = "¡Correcto! Has necesitado " . $_SESSION["intentos"] . " intentos.";
            session_unset();
        } elseif ($num < $_SESSION["secreto"]) {
            $mensaje = "El número secreto es MAYOR.";
        } else {
            $mensaje = "El número secreto es MENOR.";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../pico.min.css">
    <title>Número Secreto</title>
</head>

<body>

    <h2>Adivina el número (1-10)</h2>

    <form method="POST">
        <label>Introduce un número:</label>
        <input type="number" name="numero" min="1" max="10" required>

        <button type="submit">Probar</button>
    </form>

    <p><strong><?= $mensaje ?></strong></p>

</body>

</html>