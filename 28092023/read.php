<?php
function read()
{
    error_reporting(0);
    $server = "localhost:3306";
    $username = "root";
    $password = "";

    $phpconnServer = mysqli_connect($server, $username, $password);

    $sqlREAD = "SELECT * FROM animals";

    mysqli_select_db($phpconnServer, 'animaldb');
    $retval = mysqli_query($phpconnServer, $sqlREAD);
    if (!$retval) {
        echo mysqli_error($phpconnServer);
    } else {
        while ($row = mysqli_fetch_array($retval)) {
            echo '<form method="post" action="delete.php">';
            echo '<tr>';
            echo '<td>' . $row["id"] . '</td>';
            echo '<td>' . $row["animalName"] . '</td>';
            echo '<td>' . $row["animalType"] . '</td>';
            echo '<td><button type="delete">Delete</button></td>';
            echo '</tr>';
            echo '</form>';
        }
    }
}
?>

