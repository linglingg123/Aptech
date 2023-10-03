<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <!-- <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> -->
    <form method="post" action="loginReturn.php">
        Name: <input type="text" name="name">
        <span class="error">*
            <?php echo $nameErr; ?>
        </span>
        <br><br>
        Password: <input type="password" name="password">
        <span class="error">*
            <?php echo $pwdErr; ?>
        </span>
        <br><br>
        Company: <input type="text" name="company">
        <span class="error">
            <?php echo $companyErr; ?>
        </span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">*
            <?php echo $genderErr; ?>
        </span>
        <br><br>
    </form>
</body>

</html>