<?php
require_once("connection.php");
$id = $_REQUEST['id'];
$sql = "Delete from product where id = '$id'";
mysqli_query($link,$sql) or die();
header("location:product.php");
?>