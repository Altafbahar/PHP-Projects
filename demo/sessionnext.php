<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
$username = $_SESSION['emailname'];
$userpass = $_SESSION['passname'];
echo "username:".$username;
echo "passname:".$userpass;
session_unset();
sesssion_destroy();   //to close the session 




?>
</body>
</html>