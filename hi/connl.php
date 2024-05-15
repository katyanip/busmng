<?php
$servername ="localhost";
$username ="root";
$password ="";
$db_name= "busmng";
$conn= new mysqli($servername, $username, $password, $db_name, 3306);
if($conn->connect_error){
    die("failed");
}

?>