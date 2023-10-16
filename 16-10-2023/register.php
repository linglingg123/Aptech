<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
    <div class="container">
        <h2>Register</h2>
        <form action="<?php $_PHP_SELF ?>" method="post">
            <input type="text" placeholder="Username" name="userName" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="email" placeholder="Email" name="email" required>
            <label for="role">Role:</label>
            <!-- <div class="radio-group">
                <input type="radio" id="guest" name="role" value="Guest" required>
                <label for="guest">Guest</label>
                <input type="radio" id="author" name="role" value="Author" required>
                <label for="author">Author</label>
                <input type="radio" id="admin" name="role" value="Admin" required>
                <label for="admin">Admin</label>
            </div> -->
            <input type="text" name="role" required>
            <input type="text" placeholder="Phone Number" name="phone" required>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="../16-10-2023/login.php">Login</a></p>
    </div>
</body>

</html>

<?php
// session_start();
error_reporting(0);

// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Get the form data
$username = $_POST['userName'];
$password = $_POST['password'];
$email = $_POST['email'];
$role = $_POST['role'];
$phone = $_POST['phone'];

// $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Prepare the insert statement
$sql = "INSERT INTO user (userName, email, password, phone, role) VALUES ('" . $username . "', '" . $email . "', '" . $password . "', '" . $phone . "', '" . $role . "')";

if ($conn->query($sql)===TRUE) {
    // $_SESSION['userName'] = $username;
    echo 'Đăng ký thành công!';
    header('Location: ./16-10-2023/homepage.php');
} else {
    echo 'Đăng ký không thành công!';
}

// Close the connection
$conn->close();
?>