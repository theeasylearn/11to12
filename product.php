<?php
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table width='100%' cellpadding='2' border="2">
        <tr>
            <td width='25%'>
                <form action="insert_product.php" method="post" enctype="multipart/form-data">
                    <table border="1" width='100%'>
                        <tr>
                            <td>
                                <h3 align='center'>Add new product</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="title" placeholder="Product Title" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="price" placeholder="Price" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="quantity" placeholder="Quantity" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Select Photo</b>
                                <input type="file" name="photo" accept="image/*" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="detail">

                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="submit" value="Add Product" />
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <?php
                                if (isset($_REQUEST['msg']) == true)
                                    echo $_REQUEST['msg'];
                                ?>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
            <td valign='top'>
                <table width='100%' border='2'>
                    <thead>
                        <tr>
                            <td>Sr</td>
                            <td>title</td>
                            <td>price</td>
                            <td>Quantity</td>
                            <td>photo</td>
                            <td width='25%'>Detail</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `product` order by id desc";
                        $data = mysqli_query($link, $sql);
                        $table = mysqli_fetch_all($data);
                        foreach ($table as  $value) {
                        ?>
                            <tr>
                                <td valign='top'>1</td>
                                <td valign='top'><?php echo $value[1]  ?></td>
                                <td valign='top'><?php echo $value[2] ?></td>
                                <td valign='top'><?php echo $value[3] ?></td>
                                <td valign='top'>
                                    <img src="<?php echo $value[4] ?>" height="150" alt="">
                                </td>
                                <td valign='top'><?php echo $value[5] ?></td>
                                <td valign='top'>
                                    <a href="edit-product.php">Edit</a>
                                    <a href="delete-product.php?id=<?php echo $value[0]; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>