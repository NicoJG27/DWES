<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Gestor de Comentarios</title>
</head>

<body>
    <h1>Gestor de Comentarios</h1>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', __DIR__ . '/app.log');


    $comentarios = [
        "Me ha encantado la web",
        "Faltan más imágenes",
        "Buena organización del contenido",
        "Muy útil la información publicada",
        "El diseño es muy claro y sencillo",
        "Sería bueno añadir un buscador",
        "Los colores son agradables",
        "Faltan ejemplos prácticos",
        "La velocidad de carga es buena",
        "La sección de contacto funciona muy bien"
    ];

    $fichero = "comentarios.txt";
    $comentarioAleatorio = $comentarios[array_rand($comentarios)];
    $fecha = date("[Y-m-d H:i:s]");
    $linea = $fecha . " " . $comentarioAleatorio . PHP_EOL;


    $archivo = @fopen($fichero, "a");

    if (!$archivo) {
        echo "<p'>Error: No se pudo abrir el fichero de comentarios.</p>";
        error_log("Error al abrir el fichero $fichero");
    } else {
        if (@fwrite($archivo, $linea) === false) {
            echo "<p>Error: No se pudo escribir en el fichero.</p>";
            error_log("Error al escribir en el fichero $fichero");
        }
        fclose($archivo);
    }


    if (file_exists($fichero) && filesize($fichero) > 0) {
        $contenido = file($fichero, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $totalComentarios = count($contenido);
        $ultimoComentario = end($contenido);

        echo "<p><strong>Total de comentarios:</strong> $totalComentarios</p>";
        echo "<strong>Último comentario añadido:</strong> " . htmlspecialchars($ultimoComentario) . "</p>";
        echo "<h2>Lista de comentarios</h2>";
        echo "<ul>";
        foreach ($contenido as $lineaComentario) {
            echo "<li>" . htmlspecialchars($lineaComentario) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No hay comentarios todavía.</p>";
    }
    ?>
</body>

</html>