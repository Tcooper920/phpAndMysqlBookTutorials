<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Getting Started with PHP</title>
</head>

<body>
    <?php
    $a = 4;
    $b = 8;

    $result = $a + $b; echo "Addition: $result <br>";
    $result = $b - $a; echo "Subtraction: $result <br>";
    $result = $a * $b; echo "Multiplication: $result <br>";
    $result = $b / $a; echo "Division: $result <br>" ;
    $result = $a % $b; echo "Modulo: $result <br>";

    $a++; echo "Increment: $a <br>";
    $b--; echo "Decrement: $b <br>";
    ?>
</body>

</html>