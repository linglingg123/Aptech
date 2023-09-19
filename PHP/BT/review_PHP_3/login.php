<?php
// Kiểm tra thông tin đăng nhập
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Kiểm tra thông tin đăng nhập
    if ($username === 'HuyCuong' && $password === '123456') {
        // Tạo cookie
        setcookie('username', $username, time() + 3600); // Thời gian tồn tại của cookie (1 giờ)
        
        // Chuyển hướng đến trang thông tin khách hàng
        header('Location: customer_details.php');
        exit();
    } else {
        echo 'Invalid username or password.';
    }
}
?>