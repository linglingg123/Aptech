<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <h1>Điền thông tin phía dưới :3</h1>
    <!-- thay đoạn method="post" thành method="get" -->
    <form action="process.php" method="post">
        <label for="name">Họ và tên:</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <input type="submit" value="Gửi">
    </form>
</body>
</html>
