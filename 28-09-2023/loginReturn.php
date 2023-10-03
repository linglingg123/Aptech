<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Initialize variables during creation to empty values
    $name = $email = $gender = $comment = $website = "";
    function sanitize_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = sanitize_data($_POST["name"]);
        $password = sanitize_data($_POST["password"]);
        $company = sanitize_data($_POST["company"]);
        $comment = sanitize_data($_POST["comment"]);
        $gender = sanitize_data($_POST["gender"]);
        echo "Data is sanitized in appropriate format <br>";
    }

    // define variables and set to empty values
    $nameErr = $pwdErr = $genderErr = $companyErr = "";
    $name = $password = $gender = $comment = $company = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = sanitize_data($_POST["name"]);
        }
        if (empty($_POST["password"])) {
            $pwdErr = "Password is required";
        } else {
            $password = sanitize_data($_POST["password"]);
        }
        if (empty($_POST["company"]))
            $company = "";
    } else {
        $company = sanitize_data($_POST["company"]);
    }
    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = sanitize_data($_POST["comment"]);
    }
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = sanitize_data($_POST["gender"]);
    }

    $password = $_POST['password'];
    if (strlen($password) < 8) {
        $pwdErr .= " Password too short. ";
    }
    if (strlen($password) > 20) {
        $pwdErr .= " Password too long!";
    }
    if (!preg_match("@[0-9]@", $password)) {
        $pwdErr .= " Password must include at least one number.";
    }
    if (!preg_match("#[a-z]+#", $password)) {
        $pwdErr .= " Password must include at least one letter.";
    }
    if (!preg_match("#[A-Z]+#", $password)) {
        $pwdErr .= " Password must include at least one uppercase letter.";
    }
    if (!preg_match("#[^\w]#", $password)) {
        $pwdErr .= " Password must include at least one symbol.";
    }
    if (empty($pwdErr)) {
        if (
            preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^\w]).*$#", $password)
        ) {
            echo "Your password is strong.";
        } else {
            echo "Your password is not safe.";
        }
    }

    error_reporting(0);
    echo $name;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $company;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>
</body>

</html>