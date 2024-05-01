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
            <td width='25%' valign='top'>
                <form action="insert_product.php" method="post" 
                enctype="multipart/form-data">
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
                <table width='100%' border='2' cellpadding='10'>
                    <thead>
                        <tr>
                            <th colspan="7" align="right">
                                <form action="product.php" method="post">
                                    <input type="text" name="productname" id="productname" placeholder="Product Name" required value=" " />
                                    <input name="search" type="submit" value="Search" />
                                    <input name="clear" type="submit" value="clear all" />
                                </form>
                            </th>
                        </tr>
                        <tr>
                            <th>Sr</th>
                            <th>title</th>
                            <th>price</th>
                            <th>Quantity</th>
                            <th>photo</th>
                            <th width='25%'>Detail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_POST['search']) == true) {
                            $productname = $_POST['productname'];
                            $sql = "SELECT * FROM `product` where title like '%$productname%' order by id desc";
                        } else if (isset($_POST['clear']) == true) {
                            $sql = "SELECT * FROM `product` order by id desc";
                        } else {
                            $sql = "SELECT * FROM `product` order by id desc";
                        }
                        //echo $sql;
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
                                    <img src="images/<?php echo $value[4] ?>" height="150" alt="">
                                </td>
                                <td valign='top'><?php echo $value[5] ?></td>
                                <td valign='top'>
                                    <a href="edit_product.php?id=<?php echo $value[0]; ?>&filename=<?php echo $value[4]; ?>">Edit</a>
                                    <a href="delete-product.php?id=<?php echo $value[0]; ?>&filename=<?php echo $value[4] ?>">Delete</a>
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