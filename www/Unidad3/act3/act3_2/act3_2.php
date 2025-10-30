<?php
session_start();


$usuarioValido = "correo@falso.com";
$passwordValido = "123";

$error = "";


if (isset($_SESSION['email'])) {
    header("Location: privado.php");
    exit();
}

if  (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'] ?? "";
    $password = $_POST['password'] ?? "";

    if (empty($email) || empty($password)) {
        $error = "Todos los campos son obligatorios.";
    } elseif ($email === $usuarioValido && $password === $passwordValido) {
        $_SESSION['email'] = $email;
        header("Location: privado.php");
        exit();
    } else {
        $error = "Credenciales incorrectas.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="pico.min.css">
</head>
<body>
    <main class="container" style="max-width:600px;margin:40px auto;">
        <h1>Login</h1>
        <?php if ($error) echo "<p class='error'>$error</p>"; ?>
        <form method="post" action="">
            <label>Email:
                <input type="email" name="email" required>
            </label>
            <label>Contraseña:
                <input type="password" name="password" required>
            </label>
            <p style="color: red;">📌 Usuario de prueba: correo@falso.com</p>
            <p style="color: red;">🔑 Contraseña: 123</p>
            <button type="submit">Acceder</button>
            <a href="privado.php">Acceso a Zona Privada (Sesion iniciada)</a>
        </form>
    </main>
</body>
</html>
