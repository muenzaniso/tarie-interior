<?php 
$server = 'localhost';
$username = 'root';
$password  = '';
$database = 'mystore';

//connect to database
$conn = mysqli_connect($server,$username,$password,$database) or
 die ('Unable to connct: '.mysqli_connect_error());



 ?>