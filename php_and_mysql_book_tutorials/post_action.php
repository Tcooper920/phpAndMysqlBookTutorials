<?php

session_start();

require ('login_tools.php');

if (!isset($_SESSION['user_id'])) {
    load();
}

$page_title = 'Post Error';
include ('includes/header.html');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['subject'])) {
        echo '<p>Please enter a subject for this post.</p>';
    }
    if (empty($_POST['message'])) {
        echo '<p>Please enter a message for this post.</p>';
    }
    if (!empty($_POST['subject']) && !empty($_POST['message'])) {
        require ('../../connect_db.php');
        $q = "INSERT INTO forum (first_name,last_name,subject,message,post_date)
        VALUES (
        '{$_SESSION['first_name']}',
        '{$_SESSION['last_name']}',
        '{$_POST['subject']}',
        '{$_POST['message']}',
        NOW())";
        $r = mysqli_query($dbc, $q);

        if (mysqli_affected_rows($dbc) != 1) {
            echo '<p>Error</p>' . mysqli_error($dbc);
        } else {
            load('forum.php');
        }

        mysqli_close($dbc);
    }
}

echo '<p><a href="forum.php">Forum</a>';

include ('includes/footer.html');

?>