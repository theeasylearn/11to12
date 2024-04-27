<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align=center>Login</h1>
    <form action="verify_login.php" method="post">
        <table border="1" align='center' cellpadding='10' >
            <tr>
                <td>Email Address</td>
                <td>
                    <input type="email" name="email" id="email" required />
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" id="password" required />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Login" />
                    <input type="reset" value="clear all" />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <?php 
                        if(isset($_REQUEST['msg'])==true)
                            echo $_REQUEST['msg'];
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>