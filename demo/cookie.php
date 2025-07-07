<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    
   <?php
$user = $_POST['email'];
$pass = $_POST['password'];

echo $user;
echo "<br>".$pass;


$ckname = "username";
$ckvalue = $user;
$ckpass = "password";
$ckpassvalue = $pass;

setcookie($ckname, $ckvalue);
setcookie($ckpass, $ckpassvalue);




?>
<form action="nextcookie.php" method="post">
    <input type="submit" value="submit">
</form>

</center>
</body>
</html>