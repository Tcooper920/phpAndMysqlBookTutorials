<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Getting Started with PHP</title>
</head>

<body>
    <?php
    $zero = 0; $nil = 0; $one = 1; $upr = 'A'; $lwr = 'a';

    $result = ($zero == $nil) ? 'TRUE' : 'FALSE';
    echo "0 == 0 is $result <br>";

    $result = ($zero == $one) ? 'TRUE' : 'FALSE';
    echo "0 == 1 is $result <br>"; 

    $result = ($upr == $lwr) ? 'TRUE' : 'FALSE';
    echo "A == a is $result <br>"; 

    $result = ($upr != $lwr) ? 'TRUE' : 'FALSE';
    echo "A != a is $result <br>"; 

    echo "<hr>";

    $result = ($one > $nil) ? 'TRUE' : 'FALSE';
    echo "1 > 0 is $result <br>";

    $result = ($zero >= $nil) ? 'TRUE' : 'FALSE';
    echo "0 >= 0 is $result <br>";

    $result = ($one <= $nil) ? 'TRUE' : 'FALSE';
    echo "1 <= 0 is $result <br>";
    ?>
</body>

</html>