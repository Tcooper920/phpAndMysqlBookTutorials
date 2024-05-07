<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Getting Started with PHP</title>
</head>

<body>
    <?php
    if (4 > 2) {
        echo '<p>Yes, 4 is greater than 2 <br>';
    }

    if ((4 > 2) && (8 > 4)) {
        echo '4 is greater than 2 and 8 is greater than 4 <br>';
    }

    if (4 > 8) {
        echo '4 is greater than 8 <br>';
    } else {
        echo '4 is less than 8 <br>';
    }

    if (4 > 8) {
        echo 'This test is true </p>';
    } elseif (8 > 4) {
        echo 'Alternative test is true </p>';
    } else {
        echo 'Both tests are false </p>';
    }
    ?>
</body>

</html>