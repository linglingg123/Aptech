<?php
function connectToDb()
{
    $server = "localhost:3306";
    $username = "root";
    $password = "";

    $phpconnServer = mysqli_connect($server, $username, $password);
    // if (!$phpconn) {
//     die("Could not connect to database: Please verify the
// privileges" . mysqli_error($phpconn));
// }
// echo "Connection to server is successful";

    // mysqli_close($phpconn);

    $database = "animaldb";
    $phpconnDb = mysqli_connect($server, $username, $password, $database);

    if (!$phpconnDb) {
        die("Could not connect to database: Please verify the
privileges" . mysqli_error($phpconnDb));
    } else if (!$phpconnServer) {
        die("Could not connect to server: Please verify the
privileges" . mysqli_error($phpconnServer));
    }
    //echo "Connection to database".$database." is successful";
    return $phpconnDb;
}
?>