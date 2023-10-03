<?php

// include 'connection.php';
    $server = "localhost:3306";
    $username = "root";
    $password = "";
    $database = "animaldb";
    $phpconn = mysqli_connect($server, $username, $password, $database);
// CREATE ANIMAL
$sqlCheckid = "SELECT MAX(id) FROM animals";
if ($phpconn->query($sqlCheckid) === TRUE) {
    echo 'hello';
}
$sqlINSERT = "INSERT INTO animals(animalName, animalType) VALUES 
            ('" . $_POST["aniName"] . "','" . $_POST["aniType"] . "')";
$phpconn->query($sqlINSERT);

// $sqlINSERT = "INSERT INTO animals( animalName, animalType) 
// VALUES ('" . $_POST["aniName"] . "','" . $_POST["aniType"] . "')";

if ($phpconn->query($sqlINSERT) === TRUE) {
    echo "ok";
} else {
    echo mysqli_error($phpconn);
    echo $phpconn->error;
}
?>