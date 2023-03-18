<?php 
$servername ="localhost";
$username="root";
$password="";
$midterm="midterm";

$conn=new mysqli($servername, $username, $password, $midterm);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



 ?>