<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "contacts";

$name = $_POST['name'];
$email = $_POST['email'];
$textarea = $_POST['textarea'];
//create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

//check connection
if ($conn->connect_error) {
	die("Connection failed:".$conn->connect_error);
}

  if (!empty($_POST['name']) && !empty($_POST['textarea'])) {
  	$name = $_POST['name'];
  	echo "Thank you ".$name;
  }
  else {
  	echo 'Please fill in the required details';
  } 
  
?>