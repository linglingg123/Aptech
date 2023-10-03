<?php
$timeofday = date("H");
if ($timeofday < "12") {
    echo "Happy Morning!";
}

$hourOfDay = date("H");
if ($hourOfDay < "18") {
    echo "Have a Nice Day
ahead!";
} else {
    echo "Good Night!";
}

$t = date("H");
echo "<p>The hour (of the
server) is " . $t;
echo " and message is:</p>";
if ($t < "12") {
    echo "Happy morning!";
} elseif ($t < "20") {
    echo " Nice day!";
} else {
    echo " Good night!";
}

$language = "PHP 8";
switch ($language) {
    case "C":
        echo "Your favorite language is C ";
        break;
    case "PHP 8":
        echo "Your favorite language is PHP 8";
        break;
    case "C++":
        echo "Your favorite language is C++";
        break;
    default:
        echo "Your favorite language is neither C, PHP 8, nor C++";
}

$n = 1;
while ($n <= 10) {
    echo "The number is: $n
<br>";
    $n++;
}

$n = 15;
do {
    echo "The number is:
$n <br>";
    $n++;
} while ($n <= 20);

for (
    $n = 11;
    $n <= 20;
    $n++
) {
    echo "The number is:
$n <br>";
}

$flower = array(
    "Rose" => "10",
    "Lily" => "20",
    "Lotus" => "30"
);
foreach ($flower as $f => $value) {
    echo "$f= $value<br>";
}

for ($n = 5; $n < 15; $n++) {
    if ($n == 9) {
        break;
    }
    echo "Number is: $n <br>";
}

for ($n = 0; $n < 10; $n++) {
    if ($n == 4) {
        continue;
    }
    echo "The number is: $n
        <br>";
}

/* Method for creating an array. */
$num = array(21, 22, 23, 24, 25, 26);
foreach ($num as $value) {
    echo "Value is $value <br />";
}
$num[0] = "one";
$num[1] = "two";
$num[2] = 23;
foreach ($num as $value) {
    echo "Value is $value <br />";
}

/* One approach to create an associative array. */
$Age = array(
    "John" => 20,
    "Roger" => 10,
    "Susan" => 60
);
echo "Age of John is " . $Age['John'] . "<br />";
echo "Age of Roger is " . $Age['Roger'] . "<br />";
echo "Age of Susan is " . $Age['Susan'] . "<br />";
/* Another approach to create an associative array. */
$Age['John'] = "Adult";
$Age['Roger'] = "Child";
$Age['Susan'] = "Senior Citizen";
echo " John is " . $Age['John'] . "<br />";
echo " Roger is " . $Age['Roger'] . "<br />";
echo " Susan is " . $Age['Susan'] . "<br />";

$contacts = array(
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
/* Accessing multi-dimensional array values
 */
echo "Email ID of Peter : ";
echo $contacts[1]['Email'] . "<br />";
echo "Contact number of David : ";
echo $contacts[0]['Number'] . "<br />";
echo "Contact number of John : ";
echo $contacts[2]['Number'] . "<br/>";

$student = array(
    "Peter",
    "John",
    "David",
    "Sean"
);
echo "Names of the students
are: " .
    $Student[0] . "," . $Student[1] . "
," . $Student[2] .
    ", and " . $Student[3] . ".";

//sorting array
$Student = array("Peter", "John", "David");
sort($Student);
$clength = count($Student);
for ($x = 0; $x < $clength; $x++) {
    echo $Student[$x];
    echo "<br>";
}

$age = array("Peter" => "35", "John" => "37", "David" => "43");
asort($age);
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

$age = array("Peter" => "35", "John" => "37", "David" => "43");
ksort($age);
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

$age = array("Peter" => "35", "John" => "37", "David" => "43");
arsort($age);

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

$age = array("Peter" => "35", "John" => "52", "David" => "43");
krsort($age);
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

$Student = array("Peter", "John", "David");
rsort($Student);
$clength = count($Student);
for ($x = 0; $x < $clength; $x++) {
    echo $Student[$x];
    echo "<br>";
}
?>