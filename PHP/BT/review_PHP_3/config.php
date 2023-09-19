<?php
$mysqli = new mysqli("localhost","root","","zinga");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Ket noi Mysqli that bai: " . $mysqli -> connect_error;
  exit();
}

// Lấy thông tin đặt chỗ từ biểu mẫu
$booking_info = 'VietNam - Japan 29/08/2023'; // Thay thế bằng thông tin thực tế từ biểu mẫu

// Chuẩn bị truy vấn SQL
$sql = "INSERT INTO bookings (booking_info) VALUES ('$booking_info')";


?>