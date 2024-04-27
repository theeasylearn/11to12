<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            date_default_timezone_set('asia/kolkata');
            //start of php script
            //display today date 
            echo date("h:i:s A d-m-Y");

            //create variable 
            //$variable-name = value; 
            $color = 'yellow';
            $ClassName = "THE EASYLEARN ACADEMY <hr/>";
            /* end of php script */
        ?>
    </title>
</head>
<body bgcolor="<?php echo $color; ?>">
    <h1><?php echo $ClassName ?></h1>
    <?php 
        $ClassName = 3.14;
        echo $ClassName;
    ?>
</body>
</html>