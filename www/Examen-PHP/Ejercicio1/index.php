<?php
require_once("funciones.php");

$numeros = [];

for ($i = 0; $i < 5; $i++) {
    $numeros[] = rand(1, 100);
}

sort($numeros);

// Guardar en fichero
escribir($numeros);

// Contadores
$contBajo = 0;
$contMedio = 0;
$contAlto = 0;

foreach ($numeros as $n) {
    $cat = categoria($n);
    if ($cat == "bajo") $contBajo++;
    if ($cat == "medio") $contMedio++;
    if ($cat == "alto") $contAlto++;
}

$total = array_sum($numeros);
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
    <title>Ejercicio 1</title>
</head>

<body>

    <h2>Listado de Números</h2>

    <table>
        <thead>
            <tr>
                <th>Número</th>
                <th>Categoría</th>
                <th>Código</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($numeros as $n):
                $cat = categoria($n);
                $code = substr($cat, 0, 2) . "-" . $n;
            ?>
                <tr class="<?= $cat ?>">
                    <td><?= $n ?></td>
                    <td><?= $cat ?></td>
                    <td><?= $code ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h3>Totales</h3>
    <p><strong>Suma total:</strong> <?= $total ?></p>
    <p><strong>Bajo:</strong> <?= $contBajo ?></p>
    <p><strong>Medio:</strong> <?= $contMedio ?></p>
    <p><strong>Alto:</strong> <?= $contAlto ?></p>

</body>

</html>