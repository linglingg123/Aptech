<?php
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $img = "<img src='https://vnkings.com/wp-content/uploads/2020/06/df47bd458bf9c7b5e55a8c248cacde0e.jpg' />";
    // Xử lý dữ liệu ở đây (ví dụ: lưu vào cơ sở dữ liệu, gửi email, v.v.)
    echo $img;
    echo "<br> Xin chào, $name! <br> Địa chỉ email của bạn là: $email";
} else {
    echo "Vui lòng điền đầy đủ thông tin.";
}

// if (isset($_GET['name']) && isset($_GET['email'])) {
//     $name = $_GET['name'];
//     $email = $_GET['email'];
//     $img = "<img src='https://vnkings.com/wp-content/uploads/2020/06/df47bd458bf9c7b5e55a8c248cacde0e.jpg' />";
//     // Xử lý dữ liệu ở đây (ví dụ: lưu vào cơ sở dữ liệu, gửi email, v.v.)
//     echo $img;
//     echo "<br> Xin chào, $name! <br> Địa chỉ email của bạn là: $email";
// } else {
//     echo "Vui lòng điền đầy đủ thông tin.";
// }
?>