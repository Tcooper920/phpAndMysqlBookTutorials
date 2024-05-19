<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Getting Started with PHP</title>
</head>

<body>
    <?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $comment = $_POST['comment'];
    echo "<p>Thanks for this comment $name...</p>";
    echo "<p><i>$comment</i></p>";
    echo "<p>We will reply to $mail</p>";
    ?>
</body>

</html>