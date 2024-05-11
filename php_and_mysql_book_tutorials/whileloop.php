<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Getting Started with PHP</title>
</head>

<body>
    <?php
    $numbers = array(10, 20, 30);

    echo '<dt>While Loop:</dt>';
    $i = 0;
    while ($i < 3) {
        echo "<dd>Element $i = $numbers[$i]</dd>";
        $i++;
    }

    echo '<br><dt>Do While Loop:';
    $i = 0;
    do {
        echo "<dd>Element $i = $numbers[$i]";
        $i++;
    } while ($i < 3);
    ?>
</body>

</html>