<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
<?php
$actividad1 = ["Ana", "Luís", "Marta", "Pablo"];
$actividad2 = ["Pablo", "Lucía", "Ana"];

echo "<h3>Personas en actividad 1</h3><ul>";
foreach ($actividad1 as $act1) {
    echo "<li>$act1</li>";
}
echo "</ul>";

echo "<h3>Personas en actividad 2</h3><ul>";
foreach ($actividad2 as $act2) {
    echo "<li>$act2</li>";
}
echo "</ul>";

$comunes = array_intersect($actividad1, $actividad2);

echo "<h3>Personas en ambas actividades</h3><ul>";
foreach ($comunes as $persona) {
    echo "<li>$persona</li>";
}
echo "</ul>";
?>
</body>
</html>
