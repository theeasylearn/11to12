<?php 
require_once("connection.php");
var_dump($_POST);
extract($_POST);
$sql = "UPDate product set title =' $title' , price = '$price' , quantity = '$quantity' , detail = '$detail' where id = '$id' ";
echo $sql;
mysqli_query($link,$sql) or die();
header("location:product.php");
?>