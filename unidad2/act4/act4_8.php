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
$numeroBolas = rand(5, 15);

for ($i = 0; $i < $numeroBolas; $i++) {
    $bolas[] = rand(10102, 10111);
}
echo "<h1> Entre estas ". $numeroBolas." bolas ... </h1>";
echo "<h1>";
foreach ($bolas as $b) {
    echo "&#$b ";
}

echo "<br></h1>";

$bolasUnicas = array_unique($bolas);
$numUnicas = count($bolasUnicas);
echo "<h1>... hay $numUnicas bolas distintas:</h1>";
echo"<h1>";
foreach ($bolasUnicas as $b) {
    echo "&#$b ";
}
echo"</h1>";
?>

</body>
</html>