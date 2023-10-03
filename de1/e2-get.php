<?php
error_reporting(0);
    $n1=$_POST["number1"];
    $n2=$_POST["number2"];
    $tong="";

    if ($n1 == "" && $n2 == "") {
        echo "Please add a=NUMBER;b=NUMBER to the query string";
    } else if ($n1 == "") {
        echo "Please add a=NUMBER to the query string";
    } else if ($n2 == "") {
        echo "Please add b=NUMBER to the query string";
    }
    // $string="hi";
    // $s=(int) $string;
    // echo $s; 
    $A = (int) $n1;
    $B = (int) $n2;
    
    if ($A !== 0 && $B !== 0) {
        $tong = $n1 + $n2;
        // $_POST["total"]=$tong;
    } else if ($B === 0) {
        echo "Please add b=NUMBER to the query string";
    } else if ($A === 0) {
        echo "Please add a=NUMBER to the query string";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <input type="text" placeholder="first number" name="number1" value="<?php echo $n1 ?>">
        <button type="submit">+</button>
        <input type="text" placeholder="second number" name="number2" value="<?php echo $n2 ?>">
        =
        <input type="text" name="total" value="<?php echo $tong ?>"></input>
    </form>
</body>

</html>

