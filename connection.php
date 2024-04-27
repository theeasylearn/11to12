<?php
//database connectivity
$server = "localhost:3308";
$username = "root";
$password = "";
$database = "php_demo";

//step-1 connect database server 
$link = mysqli_connect($server, $username, $password) or die(mysqli_error($link));

//step-2 select database
mysqli_select_db($link, $database) or die(mysqli_error($link));
?>
