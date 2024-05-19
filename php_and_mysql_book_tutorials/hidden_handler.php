<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Getting Started with PHP</title>
</head>

<body>
    <?php
        if(!empty($_POST['comment'])) {
            $comment = $_POST['comment'];
        } else {
            $comment = NULL;
            echo 'You must enter a comment';
        }

        $time = (!isset($_POST['time'])) ? NULL : $_POST['time'];
        $user = (!isset($_POST['user'])) ? NULL : $_POST['user'];

        if (($comment != NULL) && ($time != NULL) && ($user != NULL)) {
            echo "<p>Comment received : \" $comment \" <br>
            From $user at $time</p>";
        }
    ?>
</body>

</html>