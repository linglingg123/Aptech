<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form action="<?php $_PHP_SELF ?>" method="post">
            <input type="text" placeholder="userName" name="userName" required>
            <input type="password" placeholder="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="../16-10-2023/register.php">Register</a></p>
    </div>
</body>

</html>

<?php
//require_once 'Connection.php';
// session_start();
error_reporting(0);

// Kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project1";
$conn = new mysqli($servername, $username, $password, $dbname);

//Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy thông tin đăng nhập
if (!empty($_POST['userName']) && !empty($_POST['password'])) {
    $userName = $_POST['userName'];
    $pass = $_POST['password'];

    // Kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM user WHERE userName = '".$userName."' AND password = '".$pass."'";

    if ($conn->query($sql)===TRUE) {
        // $_SESSION['userName'] = $username;
        header('Location: ./16-10-2023/homepage.php'); // Chuyển hướng sang trang chủ
        // echo 'ok';
    } else {
        echo 'Thông tin đăng nhập không hợp lệ!';
    }
} else {
    echo "Vui lòng điền vào tên người dùng và mật khẩu.";
}



$conn->close();
?>