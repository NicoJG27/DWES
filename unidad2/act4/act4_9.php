<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$bolas = [];
$numeroBolas = rand(5, 10);

for ($i = 0; $i < $numeroBolas; $i++) {
    $bolas[] = rand(128512, 128580);
}
echo "<h1>Grupo: </h1>";
foreach ($bolas as $b) {
    echo "&#$b ";
}
echo "<br>";
$bolasUnicas = array_unique($bolas);
foreach ($bolasUnicas as $b) {
    echo "&#$b ";
}
?>

</body>
</html>