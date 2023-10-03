<?php
// include 'connection.php';
$server = "localhost:3306";
$username = "root";
$password = "";
$database = "animaldb";
$phpconn = mysqli_connect($server, $username, $password, $database);

$sqlDELETE = "DELETE FROM animals WHERE animals.id='" . $row["id"] . "'";
$phpconn->query($sqlDELETE);

// $sqlINSERT = "INSERT INTO animals( animalName, animalType) 
// VALUES ('" . $_POST["aniName"] . "','" . $_POST["aniType"] . "')";

if ($phpconn->query($sqlDELETE) === TRUE) {
    echo "ok";
} else {
    echo mysqli_error($phpconn);
    echo $phpconn->error;
}
?>