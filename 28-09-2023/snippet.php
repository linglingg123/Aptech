<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="snippet.php" method="get">
        First name: <input type="text" name="firstname">
        <input type="submit" value="Submit">
    </form>

    <form action="<?php $_PHP_SELF ?>" method="POST">

        Name: <input type="text" name="name" />
        Weight: <input type="text" name="weight" />
        <input type="submit" />
    </form>

    <form action="snippet.php" method="get">
        <input type="radio" name="gender" value="female">F
        emale
        <input type="radio" name="gender" value="male">Mal
        e
        <input type="radio" name="gender" value="other">Ot
        her
    </form>


    <?php
    // Turn off all error reporting
    error_reporting(0);
    echo 'Welcome '+$_GET["firstname"]+',';
        ?>
    </form>

    <?php
    error_reporting(0);
    if ($_REQUEST["name"] || $_REQUEST["weight"]) {
        echo "Welcome " . $_REQUEST['name'] . "<br />";
        echo "You are " . $_REQUEST['weight'] . " kgs .";
        exit();
    }
    ?>
</body>

</html>