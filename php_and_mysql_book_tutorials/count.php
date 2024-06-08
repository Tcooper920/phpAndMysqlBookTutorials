<?php

require ('../../connect_db.php');

function show_records($dbc)
{
    $q = 'SELECT * FROM towels';
    $r = mysqli_query($dbc, $q);

    $num = mysqli_num_rows($r);

    if ($num > 0) {
        echo '<h1>Records in towels table</h1>';

        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
            echo '<br>' . $row['name'] . ' | ' . $row['color'] . ' @ ' . $row['price'];
        }
        echo "<br>$num Records";
    } else {
        echo '<p>' . mysqli_error($dbc) . '</p>';
    }
}

show_records($dbc);

$q = 'INSERT INTO towels(name, color, price)
VALUES
("Sunset", "Orange", 9.99)';

$r = mysqli_query($dbc, $q);

if ($r) {
    show_records($dbc);
} else {
    echo '<p>' . mysqli_error($dbc) . '</p>';
}

mysqli_close($dbc);