<?php 

$serwer = "localhost";
$username = "root";
$password = "PIOtrek00";
$database = "workshop_db";

$mySQL = new mysqli($serwer, $username, $password, $database);

if(!$mySQL){
     die("Could not connect to the MySQL server: " . mysqli_connect_error());
}

?>