<?php
require_once __DIR__ . '/funciones.php';

$numeros = generarNumeros();
$total = array_sum($numeros);
$conteo = contarPorCategoria($numeros);

// Registramos cada ejecución
escribir($numeros);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pico.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Ejercicio 1 - Rangos</title>
</head>

<body>
    <main>
        <h1>Lecturas y categorías</h1>
        <table class="table-categorias">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Categoría</th>
                    <th>Código</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($numeros as $numero): ?>
                    <?php
                    $categoria = categoria($numero);
                    $codigo = codigoCategoria($categoria, $numero);
                    ?>
                    <tr class="<?php echo $categoria; ?>">
                        <td><?php echo $numero; ?></td>
                        <td><?php echo ucfirst($categoria); ?></td>
                        <td><?php echo $codigo; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <section class="resumen">
            <article>
                <h3>Suma total</h3>
                <p><strong><?php echo $total; ?></strong></p>
            </article>
            <article>
                <h3>Conteo por categoría</h3>
                <ul>
                    <li>Bajo: <?php echo $conteo['bajo']; ?></li>
                    <li>Medio: <?php echo $conteo['medio']; ?></li>
                    <li>Alto: <?php echo $conteo['alto']; ?></li>
                </ul>
            </article>
        </section>
    </main>
</body>

</html>