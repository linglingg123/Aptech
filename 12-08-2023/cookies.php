<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="formCookies">
        <form method="GET" action="home.php">
            <h1>Form Login</h1>
            <input type="text" name="username" placeholder="Enter username..."><br><br>
            <input type="password" name="pass" placeholder="Enter password..."><br><br>

            <!-- <input type="email"> -->
            <button type="submit">Enter</button>
        </form>
        <?php
        $username = $_GET["username"];
        $pass = $_GET["pass"];

        setcookie("Username", $username, time() + 2000);
        setcookie("password", $pass, time() + 6000);
        ?>
    </div>
</body>

</html>