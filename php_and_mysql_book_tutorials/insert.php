<?php

require ('../../connect_db.php');

function show_records($dbc)
{
    $q = 'SELECT * FROM prints';
    $r = mysqli_query($dbc, $q);

    if ($r) {
        echo '<h1>Records in prints table</h1>';

        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
            echo '<br>' . $row['id'] . ' | ' . $row['name'] . ' @ ' . $row['price'];
        }
    } else {
        echo '<p>' . mysqli_error($dbc) . '</p>';
    }
}

show_records($dbc);

$q = 'INSERT INTO prints (name, price) 
VALUES
("One Center", 32.99), ("Yellow Red Blue", 36.99)';

$r = mysqli_query($dbc, $q);

if ($r) {
    show_records($dbc);
} else {
    echo '<p>' . mysqli_error($dbc) . '</p>';
}

mysqli_close($dbc);