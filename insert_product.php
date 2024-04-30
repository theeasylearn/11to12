<?php 
    require_once('connection.php');
    extract($_POST);
    $filename = rand(1000,9999) . "_" . $_FILES['photo']['name'];
    //upload move project directory
    move_uploaded_file($_FILES['photo']['tmp_name'],"images/$filename");
    $sql = "INSERT INTO `product`(`title`, `price`, `quantity`, `photo`, `detail`) VALUES ('$title','$price','$quantity','$filename','$detail')";
    mysqli_query($link,$sql) or die(mysqli_error($link));
    $message = "product added";
    header("location:product.php?msg=$message");
?>