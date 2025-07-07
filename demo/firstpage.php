<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="firstpage.css">
</head>
<body>
    <form action="firstpage.php" method="post">
      
    <div class="container">
    <h1>Login page</h1>
    
    <div class="username">
        <input type="email" name="email" id="email" placeholder="Enter Email">
    </div>
    
    <div class="password">
        <input type="password" name="password" id="password" placeholder="Enter Password">
    </div>

    <div class="buttons">
        <button type="submit" name="submit">submit</button>
        <button type="reset" name="reset">reset</button>
  
        </div>
        </div>

    </form>
<?php
if(isset($_POST['submit'])) {
    $user = $_POST['email'];
    $pass = $_POST['password'];
    if((strcmp($user,"example@gmail.com")==0) and (strcasecmp($pass,"example")==0))
    header("Location:main.php");
    else
    echo "<font color='red' size='10'>You are invalid user</font>";

    
    echo "<div class='output'>";
    echo "<p>  Email: " .($user) . "</p>";
    echo "<p>  Password: " .($pass) . "</p>";
    echo "</div>";
}

?>
<div class="example">
    <p>email:example@gmail.com</p>
    <p>password:example</p>
</div>
</body>
</html>