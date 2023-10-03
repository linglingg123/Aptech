<?php
include 'find.php';
$dbhost = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($dbhost, $username, $password);
$sqlSelect = "SELECT * FROM animals
        WHERE animalName='" . $_POST["animalNameFind"] . "'";


mysqli_select_db($conn, 'animaldb');
$retval = mysqli_query($conn, $sqlSelect);
if (!$retval) {
    echo mysqli_error($conn);
} else {
    if ($row = mysqli_fetch_array($retval)) {
        $name = filter_input(INPUT_POST, 'name');
        $type = filter_input(INPUT_POST, 'type');
        $sql = "UPDATE animals SET animalName ='" . $name
            . "' WHERE id = " . $row["id"] . "";
        mysqli_select_db($conn, 'animaldb');
        $retval = mysqli_query($conn, $sql);
        if (!$retval) {
            die("Could not update data:" . mysqli_error($conn));
        }
        echo "Updated data successfully\n";
        mysqli_close($conn);
    }
}

?>