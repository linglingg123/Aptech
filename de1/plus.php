<?php
error_reporting(0);
$a = $_GET["numberA"];
$b = $_GET["numberB"];

if ($a == "" && $b == "") {
    echo "Please add a=NUMBER;b=NUMBER to the query string";
} else if ($a == "") {
    echo "Please add a=NUMBER to the query string";
} else if ($b == "") {
    echo "Please add b=NUMBER to the query string";
}
// $string="hi";
// $s=(int) $string;
// echo $s; 
$A=(int) $a; $B=(int) $b;

if ($A!==0 && $B!==0) {
    $tong = $a + $b;
    echo $a . " + " . $b . " = " . $tong;
}else if($B===0){
    echo "Please add b=NUMBER to the query string";
}else if($A===0){
    echo "Please add a=NUMBER to the query string";
}

// if(is_int($a)===TRUE){
//     echo 'ok';
// }

//echo is_int($a);
?>