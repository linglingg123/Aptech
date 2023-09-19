<?php
//class
// final $example="";

interface Living{
    //methods
    function eat();
    function walk();
}

class Animal implements Living{
    //Properties - truong thong tin
    public $id;
    public $animalName;
    public $animalType;

    //methods - tinh nang
    function eat(){
        echo 'eating';
    }
    function sleep(){
        echo 'sleeping';
    }
    function walk(){
        echo 'walking';
    }

    //constructor
    // get - set
    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id=$id;
    }
    function getanimalName(){
        return $this->animalName;
    }

    function setanimalName($animalName){
        $this->animalName=$animalName;
    }

    function getAnimalType(){
        return $this->animalType;
    }

    function setAnimalType($animalType){
        $this->animalType=$animalType;
    }
}

$Stu=new Animal();
// $Stu->sleep();
$Stu->setId(1);
$Stu->setanimalName("Stu");

$Stu->setAnimalType("cat"); 
// $Stu->animalType="cat";

// echo 'he is '.$Stu->getanimalName().' and he is a '.$Stu->getAnimalType();

$host = "localhost";
$userName = "root";
$password = "";
$dbName="animaldb";
$phpconn = mysqli_connect($host, $userName, $password, $dbName);
//$phpconn=new mysqli($host, $useranimalName, $password);

if (!$phpconn) {
    die("Could not connect to database: Please verify the
privileges" . mysqli_error($phpconn));
}

//echo "Connection successful";

// Query
// $sql = "CREATE TABLE classes
//         (Id int primary key not null);";
//$sql="INSERT INTO animals (id, animalName, animalType) VALUES (1, meme, cat);";
$sql="INSERT INTO animals (id, animalName, animalType) VALUES (". $Stu->getId() . ", '". $Stu->getanimalName() . "', '". $Stu->getAnimalType() ."');";
if ($phpconn->query($sql) === TRUE) {  
    echo "Task complete. Inserted";
} else {
    echo "You have an error while creating database: " . $phpconn->error;

}
// $phpconn->close();

// mysqli_close($phpconn);
?>