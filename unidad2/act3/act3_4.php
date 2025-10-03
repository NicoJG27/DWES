<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Números pares del 0 al 50</h1>
    <ul>
        <?php
        $num = 0;
        for ($num = 0; $num <= 50; $num += 2) {
            echo "<li> $num </li>";
        }
        ?>
    </ul>



</body>

</html>