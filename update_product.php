<?php 
    require_once("connection.php");
    extract($_POST);
    $filename = $_FILES['photo']['name']; //store filename of photo into filename;
    //check whether user has uploaded new photo or not
    if(strlen($filename)>=1)
    {
        $photo = rand(1000,9999) . "_" . $_FILES['photo']['name'];
        $sql = "update product set title =' $title' , price = '$price' , quantity = '$quantity' , detail = '$detail',photo='$photo' where id = '$id' ";
        move_uploaded_file($_FILES['photo']['tmp_name'],"images/$photo");
        unlink("images/$oldphoto");
    }
    else 
    {
        $sql = "update product set title =' $title' , price = '$price' , quantity = '$quantity' , detail = '$detail' where id = '$id' ";
    }
    echo $filename;
    // echo $sql;
    mysqli_query($link,$sql) or die(mysqli_error($link));
    header("location:product.php");
?>