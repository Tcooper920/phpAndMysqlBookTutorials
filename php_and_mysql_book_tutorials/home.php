<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    require ('login_tools.php');
    load();
}

$page_title = 'Home';

include ('includes/header.html');

echo "<h1>HOME</h1>
<p>You are now logged in,
{$_SESSION['first_name']} {$_SESSION['last_name']}
</p>";

echo '<p>
<a href="forum.php">Forum</a> |
<a href="shop.php">Shop</a> |
<a href="goodbye.php">Logout</a>
</p>';

include ('includes/footer.html');

?>