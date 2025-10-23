<?php
if (!empty($_POST['nombre'])) {
    echo "El nombre es " . $_POST['nombre'] . "<br>";
} else {
    echo "No se ha especificado <br>";
}
// Paises permitidos
define('OPCIONES1', ['es', 'ar', 'mx', 'co']);
if (!empty($_POST['pais'])) {
    if (in_array($_POST['pais'], OPCIONES1)) {
        echo "Pais: se ha recibido " . $_POST['pais'] . "<br>";
    } else {
        echo 'El pais no tiene un valor válido' . "<br>";
    }
} else {
    echo 'El pais no se ha recibido' . "<br>";
}


// Procesamiento de lenguajes.
$lenguajes_permitidos = ['html', 'css', 'javascript', 'php'];
if (!empty($_POST['lenguajes']) && is_array($_POST['lenguajes'])) {

    $no_validos = array_diff($_POST['lenguajes'], $lenguajes_permitidos);
    if (count($no_validos) == 0) {
        echo 'Los lenguajes recibidos estan dentro de los esperados y son: ' . implode(', ', $_POST['lenguajes']);
    } else {
        echo 'Se han recibido lenguajes no esperados';
    }
} else {
    echo 'No se han recibido los lenguajes o no son del tipo esperado.';
}
echo "<br>";

$habilidades_permitidas = ['ux', 'bbdd', 'git', 'seo'];
if (!empty($_POST['habilidades']) && is_array($_POST['habilidades'])) {

    $no_validos = array_diff($_POST['habilidades'], $habilidades_permitidas);
    if (count($no_validos) == 0) {
        echo 'Las habilidades recibidas estan dentro de las esperadas y son: ' . implode(', ', $_POST['hablidades']);
    } else {
        echo 'Se han recibido habilidades no esperadas';
    }
} else {
    echo 'No se han recibido las habilidades o no son del tipo esperado.';
}
echo "<br>";
