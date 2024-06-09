<?php

require('../../connect_db.php');

function show_records($dbc) {
    $q = 'SELECT * FROM watches';
    $r = mysqli_query($dbc, $q);
    $num = mysqli_num_rows($r);
    if ($num > 0) {
        echo '<h1>Records in watches table</h1>';
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
            echo '<br>' . $row['model'] . ' | ' . $row['style'] . ' @ ' . $row['price'];
        }
    } else {
        echo '<br>' . mysqli_error($dbc) . '</p>';
    }
}

show_records($dbc);

$q = 'UPDATE watches
SET style = "Gents" WHERE style = "Ladies" ';
$r = mysqli_query($dbc, $q);

if (mysqli_affected_rows($dbc) == 2) {
    echo '<hr>' . mysqli_affected_rows($dbc) . ' Records Updated...';
    show_records($dbc);
}

mysqli_close($dbc);