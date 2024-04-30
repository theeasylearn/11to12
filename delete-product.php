<?php
    require_once("connection.php");
    $id = $_REQUEST['id'];
    $filename = $_REQUEST['filename'];
    $sql = "delete from product where id = '$id'";
    mysqli_query($link,$sql) or die();
    //file delete on disk 
    unlink("images/$filename");
    header("location:product.php");
?>