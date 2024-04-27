<?php 
    require_once('connection.php');
    extract($_POST);
    $sql = "INSERT INTO `product`(`title`, `price`, `quantity`, `photo`, `detail`) VALUES ('$title','$price','$quantity','myphoto.png','$detail')";
    mysqli_query($link,$sql) or die(mysqli_error($link));
    $message = "product added";
    header("location:product.php?msg=$message");
?>