<?php
require_once("connection.php");
$email = $_POST['email'];
$password = $_POST['password'];
//step 3 (create query )
$sql = "select id from admin where email='$email' and password='$password'";
$admin = mysqli_query($link, $sql) or die(mysqli_error($link));
$count = mysqli_num_rows($admin);
if ($count == 0) {
    $message = "<font color='red'>Login failed</font>";
    header("location:login.php?msg=$message");
}
else 
{
    $message = "<font color='blue'>Welcome $email</font>";
    header("location:home.php?msg=$message");
    //fetch result
    // $data = mysqli_fetch_array($admin);
}
