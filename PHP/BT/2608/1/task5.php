<?php

// Lớp ẩn danh chứa phương thức
$anonymousClass = new class {
    public function sayHello() {
        echo "Hello from anonymous class!";
    }
};

// Gọi phương thức trong lớp ẩn danh
$anonymousClass->sayHello();

?>