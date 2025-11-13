<?php
function mostrarListaEstudiantes(array $estudiantes)
{
    if (empty($estudiantes)) {
        echo "<p>No hay estudiantes en esta lista.</p>";
        return;
    }
    
    echo "<ol>";
    foreach ($estudiantes as $est) {
        $id = htmlspecialchars($est['id']);
        $nombre = htmlspecialchars($est['nombre']);
        $edad = htmlspecialchars($est['edad']);
        $curso = htmlspecialchars($est['curso_nombre'] ?? 'Sin curso');
        
        echo "<li>$id. $nombre ($edad años) - Curso: $curso</li>";
    }
    echo "</ol>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión del Instituto</title>
</head>
<body>

    <h1>Instituto (MVC - POO - PDO)</h1>

    <h2>📚 Cursos</h2>
    <?php if (!empty($data['cursos'])) : ?>
        <ol>
            <?php foreach ($data['cursos'] as $curso) : ?>
                <li><?php echo htmlspecialchars($curso['id']); ?>. <?php echo htmlspecialchars($curso['nombre']); ?></li>
            <?php endforeach; ?>
        </ol>
    <?php else : ?>
        <p>No hay cursos registrados.</p>
    <?php endif; ?>


    <h2>👩‍🎓 Lista Inicial</h2>
    <?php mostrarListaEstudiantes($data['listaInicial']); ?>

    <h2>✏️ Lista Modificada</h2>
    <?php mostrarListaEstudiantes($data['listaModificada']); ?>

    <h2>🗑️ Lista Final</h2>
    <?php mostrarListaEstudiantes($data['listaFinal']); ?>

</body>
</html>