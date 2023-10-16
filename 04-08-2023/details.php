<?php
//b1: gan du lieu vao
$firstName=$_GET["firstName"];
$lastName=$_GET["lastName"];

//b2
echo "name: $firstName $lastName";

$b=trUe;
$h=false; $n=10;

$html='<a style="color: red;">hello</a>';
function logOp(){
    while($n <= 10) {
        echo "The number is: $n <br>";
        $n++; //+ vo cuc
    }

    if($n <= 10) {
        echo "The number is: $n <br>";
        $n++; //+ 1
    }
}

//array
$flower = array("Rose", "Lily", "Lotus");
foreach($flower as $f) {
    echo "$f<br>";
}

$flower[2];

$student=array(
    array
    (
    "Name" => "David",
    "Email" => "David12@gmail.com",
    "Number" => 39365421
    ),
    array
    (
    "Name" => "Peter",
    "Email" => "Peter@gmail.com",
    "Number" => 299853412
    ),
     array
    (
    "Name" => "John",
    "Email" => "John13@yahoo.com",
    "Number" => 39982145
    )
    );

    echo $student[1]["Number"];
?>