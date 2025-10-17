<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $temperatura = rand(-10, 100);
    $cpuCargada = rand(0, 150);
    $opcionesToken = ["", "OK"];
    $token = $opcionesToken[array_rand($opcionesToken)];


    echo "🌡️ Temperatura: $temperatura °C<br>";
    echo "🖥️ Carga CPU: $cpuCargada%<br>";
    echo "🔐 Token: " . ($token ?: "VACÍO") . "<br><br>";




    if (empty($token)) {
        die("❌ ERROR CRÍTICO: No hay token de acceso. El servidor no puede arrancar.");
    }


    if ($temperatura < 0 || $temperatura > 80) {
        trigger_error("⚠️ ADVERTENCIA: Temperatura fuera de rango ($temperatura °C).");
    }


    try {
        if ($cpuCargada > 100) {
            throw new Exception("🚨  ERROR: Carga de la CPU demasiado alta. No se puede arrancar el servidor");
        }


        echo "✅ Servidor iniciado correctamente.<br>";
    } catch (Exception $e) {
        echo $e->getMessage() . "<br>";
    } finally {
        echo "🧹 Fin del proceso de arranque.<br>";
    }
    ?>


</body>

</html>