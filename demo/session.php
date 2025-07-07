<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$user = $_POST['email'];
$pass = $_POST['password'];


echo "the email is : <br>".$user;
echo "the pass is : <br>".$pass;

session_start();
$_SESSION['emailname'] =$user;
$_SESSION['passname'] = $pass;


?>
<form action="sessionnext.php" method=post>
<input type="submit" value="submit">
</form>
</body>
</html>