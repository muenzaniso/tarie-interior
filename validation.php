<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: rgb(181, 63, 34)">

</body>
</html>
<?php
//get user input
$name = $_POST['name'];
$email = $_POST['email'];
$textarea = $_POST['textarea'];

//create local varibles
$taken = "false";
$database = "contacts";
$username = "root";
$password = "";
$servername = "localhost";

//create connection

$conn = new mysqli( $servername, $username,$password, $database);

//check connection

if ($conn->connect_error) {
	die("Connection failed ". $conn->connect_error);
}

//validate

if (empty($name)) {
	echo "Please fill in the required detail ";
	die();
}
if (empty($email)) {
	echo "Please fill in the required detail ";
	die();
}

if (empty($textarea)) {
	echo "Please fill in the required detail ";
	die();
}
//insert values

$sql = "INSERT INTO client_info (name, email, textarea)
 VALUES ('$name','$email', '$textarea') ";

 if ($conn->query($sql) === TRUE ) {
 	echo "<h1 color='green'>Thank you for getting in touch</h1> " .$name . ".";
 }else{
 	echo "Error: " . $sql . "<br>" . $conn->error;
}
 $conn->close();
  ?>