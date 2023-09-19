<?php

// Lớp ẩn danh chứa các biến
$anonymousClass = new class {
    public $name = 'John';
    public $age = 25;
};

// In biến trong lớp ẩn danh
echo $anonymousClass->name . "<br>";
echo $anonymousClass->age . "<br>";

?>