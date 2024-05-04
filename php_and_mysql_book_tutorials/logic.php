<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Getting Started with PHP</title>
</head>

<body>
    <?php
    $yes = TRUE; $no = FALSE;

    $result = ($no && $no) ? 'TRUE' : 'FALSE';
    echo "No AND No returns $result <br>";

    $result = ($yes && $no) ? 'TRUE' : 'FALSE';
    echo "Yes AND No returns $result <br>";

    $result = ($yes && $yes) ? 'TRUE' : 'FALSE';
    echo "Yes AND Yes returns $result <br>";

    echo "<hr>";

    $result = ($no || $no) ? 'TRUE' : 'FALSE';
    echo "No OR No returns $result <br>";

    $result = ($yes || $no) ? 'TRUE' : 'FALSE';
    echo "Yes OR No returns $result <br>";

    $result = ($yes || $yes) ? 'TRUE' : 'FALSE';
    echo "Yes OR Yes returns $result <br>";

    echo "<hr>";

    $result = (!$yes) ? 'TRUE' : 'FALSE';
    echo "NOT Yes returns $result <br>";
    ?>
</body>

</html>