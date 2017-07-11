<?php 
$server = 'localhost';
$username = 'root';
$password  = '';
$database = 'mystore';

//connect to database
$con = mysqli_connect($server,$username,$password,$database) or
 die ('Unable to connct: '.mysqli_connect_error());
 echo "Connected successfully";



 ?>