<?php
// error_reporting(E_ERROR);

// $var=$_REQUEST["pass"];
// $var2=6;
// // echo gettype($var);
// // echo $_POST["pass"];

// echo var_dump($var);

include 'connection.php';
include 'read.php';
// include 'find.php';
// include 'update.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>CREATE ANIMAL</h1>
    <form method="POST" action="create.php">
        Animal name: <input type="text" name="aniName">
        Animal type: <input type="text" name="aniType">
        <button type="submit">Submit</button>
    </form>
    <br>

    <h1>READ ANIMAL</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
        </tr>
        <tr>
            <?php
            read();
            ?>
        </tr>
    </table>

    <h1>UPDATE ANIMAL</h1>
    <form method="post" action="find.php">
        <table>
            <tr>
                <td>Find Animal Name: </td>
                <td>
                    <input type="text" name="animalNameFind">
                    
                </td>
            </tr>
        </table>
    </form>
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
    </form>

    <h1>Delete Animal</h1>
</body>

</html>