<?php
$emoticones = [];
$numeroEmoticones = rand(5, 10);

for ($i = 0; $i < $numeroEmoticones; $i++) {
    $emoticones[] = rand(128512, 128580);
}

echo "<h1> Grupo: ";
foreach ($emoticones as $e) {
    echo "&#{$e} ";
}

echo "<br>";


$aleatorio = rand(128512, 128580);
echo "Elegido: &#$aleatorio <br>";
if (in_array($aleatorio, $emoticones)) {
    echo "Sí está en el grupo";
} else {
    echo "No está en el grupo";
}
echo "</h1>"
?>
