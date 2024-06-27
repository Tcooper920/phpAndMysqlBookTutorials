<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    require ('login_tools.php');
    load();
}

$page_title = 'Post Message';
include ('includes/header.html');

echo '<form action="post_action.php" method="POST" accept-charset="utf-8">
<p>Subject:<br>
<input name="subject" type="text" size="64"</p>
<p>Message<br>
<textarea name="message" rows="5" cols="50">
</textarea></p>
<p><input type="submit" value="Submit"></p>
</form>';

echo '<p>
<a href="forum.php">Forum</a> |
<a href="shop.php">Shop</a> |
<a href="home.php">Home</a> |
<a href="goodbye.php">Logout</a></p>';

include ('includes/footer.html');

?>