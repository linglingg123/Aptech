<?php

function testInteger(int $number) {
    var_dump($number);
}

function testFloat(float $number) {
    var_dump($number);
}

function testBool(bool $value) {
    var_dump($value);
}

function testString(string $text) {
    var_dump($text);
}

$floatValue = 3.14;
testInteger($floatValue);

$boolValue = true;
testFloat($boolValue);

$floatValue = 3.14;
testBool($floatValue);

$floatValue = 3.14;
testString($floatValue);

?>