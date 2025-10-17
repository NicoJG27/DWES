<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
    }
  </style>
</head>

<body>
  <h1>Tabla de multiplicar del 7</h1>
  <table>
    <?php
    $const = 7;
    for ($num = 1; $num <= 10; $num++) {
      $result = $const * $num;
      echo "<tr>
              <td>$const</td>
              <td>x</td>
              <td>$num</td>
              <td>=</td>
              <td>$result</td>
            </tr>";
    }
    ?>
  </table>
</body>

</html>