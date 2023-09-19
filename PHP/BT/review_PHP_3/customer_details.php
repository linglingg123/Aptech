<?php
    include ("config.php");
    // Kiểm tra xem cookie tồn tại hay không
    if (isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
        
        // Hiển thị thông tin khách hàng
        echo '<h1>Welcome, ' . $username . '!</h1>';
        // Hiển thị các thông tin khác về khách hàng và lộ trình
        echo '<P>'.$booking_info.'</P>';
    } else {
        // Nếu cookie không tồn tại, chuyển hướng người dùng đến trang đăng nhập
        header('Location: index.html');
        exit();
    }
?>
