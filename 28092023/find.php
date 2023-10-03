<?php
function findName()
{
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
        while ($row = mysqli_fetch_array($retval)) {
            //  echo '<form method="post" action="update.php">';
            // echo '<form method="post" action="<?php $_PHP_SELF 
            echo '<tr>';
            echo '<td>' . $row["id"] . '</td>';
            echo '<td>' . $row["animalName"] . '</td>';
            echo '<td>' . $row["animalType"] . '</td>';
            // echo '<td><button type="submit">Select</button></td>';
            echo '<td><button type="submit" onsubmit=update()>Select</button></td>';
            // echo '</tr>';
            //  echo '</form>';
        }
    }
}
?>

<?php
if (isset($_POST["update"])) {
    $dbhost = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($dbhost, $username, $password);
    if (!$conn) {
        die("Could not connect: " . mysqli_error($conn));
    }
    $id = "";
    $name = filter_input(INPUT_POST, 'aname');
    $type = filter_input(INPUT_POST, 'atype');
    $sqlSelect = "SELECT * FROM animals
        WHERE animalName='" . $_POST["animalNameFind"] . "'";
    mysqli_select_db($conn, "animaldb");
    $retval = mysqli_query($conn, $sqlSelect);
    if (!$retval) {
        echo mysqli_error($conn);
    } else {
        while ($row = mysqli_fetch_array($retval)) {
            $sql = "UPDATE animals 
                SET animalName ='" . $name . "',
                animalType='" . $type . "' 
                WHERE id='" . $row["id"] . "'";
            $retval = mysqli_query($conn, $sql);
            if (!$retval) {
                die("Could not update data: " . mysqli_error($conn));
            }
            echo "Updated data successfully\n";
            mysqli_close($conn);
        }
    }
}
?>
<form method="post" action="<?php $_PHP_SELF ?>">
    <table width="400" cellspacing="1" cellpadding="2">
        <tr>
            <td width="100"> Animal Name:</td>
            <td><input type="text" name="aname"></td>
        </tr>
        <tr>
            <td>
                Animal Type:</td>
            <td><input name="email" type="text" id="atype"></td>
        </tr>
        <tr>
            <td width="100"> </td>
            <td> </td>
        </tr>
        <tr>
            <td width="100"> </td>
            <td>
                <input name="update" type="submit" id="update" value="Update">
            </td>
        </tr>
    </table>
</form>';