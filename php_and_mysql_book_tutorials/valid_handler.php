<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Getting Started with PHP</title>
</head>

<body>
    <?php
        if (!empty($_POST['quantity'])) {
            $quantity = $_POST['quantity'];
            if (!is_numeric($quantity)) {
                $quantity = NULL; 
                echo 'Quantity must be numeric<br>';
            }
        } else {
            $quantity = NULL; 
            echo 'You must enter a quantity<br>';
        }

        if (!empty($_POST['email'])) {
            $email = $_POST['email'];
            $pattern = '/\b[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}\b/';
            if (!preg_match($pattern, $email)) {
                $email = NULL;
                echo 'Email address is incorrect format';
            }
        } else {
            $email = NULL; 
            echo  'You must enter an email address';
        }

        if (($quantity != NULL) && ($email != NULL)) {
            echo "Email: $email<br>Quantity: $quantity";
        }
    ?>
</body>

</html>