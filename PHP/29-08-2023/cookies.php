<?php
setcookie("name", "Minh", time()-3000000);
setcookie("name2","Cuong");

// echo $_COOKIE["name"];
?>
<html>

<body>
    <?php
    // echo isset($_COOKIE["name"]);
    $var;
    // if(isset($_COOKIE["name"])==1){ // != null
    //     echo 'yes';
    // }else{
    //     echo 'undefined';
    // }

    // echo $_COOKIE["name"];
    echo $_COOKIE["name2"];
    ?>
</body>

</html>