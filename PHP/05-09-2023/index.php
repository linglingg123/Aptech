<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form method="Get">
        <input type="text" name="username">
        <input type="email" name="email">
        <input type="password" name="userpassword">

        <button type="submit">Submit</button>
    </form>
    <?php
    //connect db
    $host = "localhost";
    $userName = "root";
    $password = "";
    $dbName="animaldb";
    $phpconn = mysqli_connect($host, $userName, $password, $dbName);

    //login
    $id=1;
    $username=$_REQUEST["username"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];

    //query
    $sql="INSERT INTO user(id, username, email, userpassword) VALUES (".$id.", '".$username."', '".$email."', '".$userpassword."');"; 
    ?>
</body>
</html>