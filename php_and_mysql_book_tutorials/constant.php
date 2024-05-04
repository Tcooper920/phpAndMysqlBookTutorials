<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Getting Started with PHP</title>
</head>

<body>
    <?php
    define('USER', 'Mike');

    echo '<p>Hello ' . USER . '</p>';

    echo '<p>You are using PHP version ' . PHP_VERSION;

    echo ' running on ' . PHP_OS . '</p>';
    ?>
</body>

</html>