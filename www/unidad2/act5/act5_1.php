<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
<?php
$proveedor1 = ["Ratón", "Teclado", "Pantalla", "Altavoces"];
$proveedor2 = ["Webcam", "Teclado", "Micrófono", "Pantalla"];
echo "<h2>Proveedor 1</h2> <ul>";
foreach ($proveedor1 as $prov1) {
    echo "<li>$prov1</li>";
}
echo "</ul>";
echo "<h2>Proveedor 2</h2><ul>";
foreach ($proveedor2 as $prov2) {
    echo "<li>$prov2</li>";
}
echo "</ul>";


$productos = array_merge($proveedor1, $proveedor2);
$productos = array_unique($productos);


sort($productos);


echo "<h2>Proveedor 3</h2><ul>";
foreach ($productos as $producto) {
    echo "<li>$producto</li>";
}
echo "</ul>";
?>
</body>
</html>
