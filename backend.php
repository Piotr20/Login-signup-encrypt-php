<?php 
include('mysql.php');

// $sql = "SELECT * FROM users ORDER BY PK_id DESC";

// $result = $mySQL-> query($sql);

// class User{
//     private $firstName = "";
//     private $age = 0;

//     public function __construct($newName, $newAge){
//          $this ->firstName = $newName;
//          $this ->age = $newAge;

//     }
//     public function InformationCard(){
//      echo $this-> firstName;
//      echo "</br>";
//      echo $this-> age;
//      echo "</br>";


//     }
// }

// while($row = $result->fetch_object()){
//      // echo $row->firstName . "<br>";
//      $newUser = new User($row->firstName, $row->age);
//      $newUser ->InformationCard();
// }


if($_POST["customerName"] == "") {
     header("location: index.php?error=customerName");
     exit;
 }
 if($_POST["customerPas"] == "") {
     header("location: index.php?error=customerPas");
     exit;
 }

 $custommerName = $_POST["customerName"];
 $custommerPas = $_POST["customerPas"];


$pasEncrypt = password_hash($custommerPas, PASSWORD_DEFAULT);
$sql = "CALL AddNewUser('$custommerName', '$pasEncrypt')";
$sql2 = "SELECT * FROM loginData";
$result = $mySQL-> query($sql2);

while($row = $result->fetch_object() ){
  if($custommerName == $row->userName){
      header("location: logged.php");
      exit;
  }
  else {
    if($mySQL->query($sql) === TRUE) {
      header("location: index.php?signup=success");
      exit;
    }
  }
}










?>