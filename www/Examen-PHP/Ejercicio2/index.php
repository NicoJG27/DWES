<?php
session_start();
require_once __DIR__ . '/funciones.php';

iniciarPartida();

$mensaje = 'Introduce un número para comenzar la partida.';
$tipo = 'info';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'] ?? 'jugar';

    if ($accion === 'reiniciar') {
        reiniciarPartida();
        $mensaje = 'Partida reiniciada. El contador vuelve a cero.';
        $tipo = 'info';
    } else {
        $resultado = procesarIntento($_POST['numero'] ?? null);
        $mensaje = $resultado['mensaje'];
        $tipo = $resultado['tipo'];
    }
}

$intentos = $_SESSION['intentos'] ?? 0;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pico.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Ejercicio 2 - Número secreto</title>
</head>

<body>
    <main>
        <h1>Número secreto (1-10)</h1>

        <p class="estado <?php echo $tipo; ?>"><?php echo $mensaje; ?></p>

        <form method="post" action="index.php">
            <label for="numero">Introduce un número del 1 al 10</label>
            <input type="number" name="numero" id="numero" min="1" max="10" required>
            <button type="submit" name="accion" value="jugar">Intentar</button>
            <button type="submit" name="accion" value="reiniciar" class="secondary">Reiniciar partida</button>
        </form>

        <section class="panel-intentos">
            <div>
                <strong>Intentos válidos:</strong> <?php echo $intentos; ?>
            </div>
        </section>
    </main>
</body>

</html>