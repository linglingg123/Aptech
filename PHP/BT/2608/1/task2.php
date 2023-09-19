<?php
// declare(strict_types=1);
declare(strict_types=0);
function testInteger(int $number) {
    var_dump($number);
}

function testBool(int $number) {
    var_dump($number);
}

function testString(string $text) {
    var_dump($text);
}

// Viết hàm với tham số có kiểu dữ liệu là số nguyên rồi gọi hàm truyền giá trị float
testInteger(3.14);

// Viết hàm với tham số có kiểu dữ liệu là số nguyên rồi gọi hàm truyền vào giá trị boolean
testInteger(true);

// Viết hàm với tham số có kiểu dữ liệu là chuỗi rồi gọi hàm truyền giá trị float
testString(3.14);

// Viết hàm với tham số có kiểu dữ liệu là bool rồi gọi hàm truyền giá trị float
testBool(3.14);

// Thay đổi khai báo strict_types thành giá trị 0


?>