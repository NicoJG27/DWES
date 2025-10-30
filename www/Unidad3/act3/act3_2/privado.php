<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: act3_2.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área Privada</title>
    <link rel="stylesheet" href="pico.min.css">
</head>
<body>
    <main class="container" style="max-width:600px;margin:40px auto;">
        <p style="color: red;">¡Te encuentras en una zona secreta!, solo visible por una persona identificada.</p>
        <form action="cerrar-sesion.php" method="post">
            <button type="submit">Cerrar sesión</button>
        </form>
    </main>
</body>
</html>
