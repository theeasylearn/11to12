<?php
require_once("connection.php");
$sql = "Select * from product where id =" . $_REQUEST['id'];
$data = mysqli_query($link, $sql);
$table = mysqli_fetch_array($data);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card mt-5 shadow">
                    <div class="card-header h2 text-bg-success">Edit Product </div>
                    <div class="card-body">
                        <form action="update_product.php" method="post">
                            <div class="form-group">
                                <label class="form-label" for="">Enter title for product </label>
                                <input type="text" name="title" class="form-control" placeholder="Enter value of title " value="<?php echo $table['title'] ?>">
                                <input type="hidden" name="id" class="form-control" value="<?php echo $_REQUEST['id'] ?>">
                            </div>
                            <div class="form-group mt-3">
                                <label class="form-label" for="">Enter price for product </label>
                                <input type="number" name="price" class="form-control" placeholder="Enter value of price " value="<?php echo $table['price'] ?>">
                            </div>
                            <div class="form-group mt-3">
                                <label class="form-label" for="">Enter quantity for product </label>
                                <input type="number" name="quantity" class="form-control" placeholder="Enter value of quantity " value="<?php echo $table['quantity'] ?>">
                            </div>
                            <div class="form-group mt-3">
                                <label class="form-label" for="">Enter detail for product </label>
                                <textarea name="detail" class="form-control" id="" cols="30" rows="2"><?php echo $table['detail'] ?></textarea>
                            </div>
                            <div class="text-end mt-3">
                                <button type="submit" class="btn btn-success">Update</button>
                                <button type="reset" class="btn btn-danger">Clear All</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>