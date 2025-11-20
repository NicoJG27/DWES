<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="pico.min.css">
    <title>Votaciones</title>
</head>

<body>
    <main class="container" style="max-width:600px;margin:40px auto;">
    <h1>Sistema de Votaciones</h1>

    <form method="POST">
        <label>Nueva opción:</label>
        <input type="text" name="texto_opcion" required>
        <button type="submit" name="nueva_opcion">Agregar</button>
    </form>

    <hr>

    <h3>Total de votos registrados: <?php echo $data['total']; ?></h3>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Opción</th>
                <th>Votos</th>
                <th>Porcentaje</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data['opciones'])): ?>

                <?php foreach ($data['opciones'] as $fila): ?>
                    <?php
                    // Calculamos porcentaje aquí mismo, sencillo
                    if ($data['total'] > 0) {
                        $porcentaje = round(($fila['votos'] / $data['total']) * 100, 1);
                    } else {
                        $porcentaje = 0;
                    }
                    ?>
                    <tr>
                        <td><?php echo $fila['opcion']; ?></td>

                        <td><?php echo $fila['votos']; ?></td>

                        <td><?php echo $porcentaje; ?>%</td>

                        <td>
                            <form method="POST" style="display:inline;">
                                <input type="hidden" name="votar_id" value="<?php echo $fila['id']; ?>">
                                <button type="submit">Votar</button>
                            </form>

                            <form method="POST" style="display:inline;">
                                <input type="hidden" name="eliminar_id" value="<?php echo $fila['id']; ?>">
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>

            <?php else: ?>
                <tr>
                    <td colspan="4">No hay votaciones creadas todavía.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    </main>
</body>

</html>