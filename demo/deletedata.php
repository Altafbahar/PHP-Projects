<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $mycon =mysqli_connect("localhost","root","","mynewdatabase");
   session_start();
   $eeid= $_SESSION['$empid'];
   $sql= "delete from emp where empid=?";
   $ps= $mycon->prepare($sql);
   $ps->bind_param("i",$eeid);
   $ps->execute();
   echo " Record deleted successfully";
   ?>
</body>
</html>