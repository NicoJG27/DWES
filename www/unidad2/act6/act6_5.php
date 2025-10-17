<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $url = "http://www.linkfred.com/carpeta1/index.php";
    $fichero = basename($url);

    echo "URL: $url<br>";
    echo "$fichero";
    ?>

</body>

</html>