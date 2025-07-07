<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="insertdata.css">
</head>
<body>
    
<h2 class="heading">Welcome to The Code Company</h2>

<form action="insertdata.php" method="post" class="myform">
    <input type="text" name="txtid" placeholder="Enter Employee ID">
    <input type="text" name="txtname" placeholder="Enter Employee Name">
    <input type="text" name="txtsal" placeholder="Enter Fee Amount">
    <input type="text" name="txtdept" placeholder="Enter Department">
    <input type="submit" value="Submit" name="btnsubmit">
</form>


    <?php
    if(isset($_POST['btnsubmit']))
    {
        //insert to table 
        $eid = $_POST['txtid'];
        $ename = $_POST['txtname'];
        $esal = $_POST['txtsal'];
        $edept = $_POST['txtdept'];
   

$mycon =mysqli_connect("localhost","root","","mynewdatabase");
echo " connection is successfull";
$sql= "insert into emp values(?,?,?,?)";
$ps = $mycon->prepare($sql);
$ps->bind_param("isis", $eid, $ename, $esal, $edept);
$ps->execute();
echo "record inserted successsfully";
}
?> 

<form action="fetch.php" method="post" style="text-align: center; margin-top: 50px;">
    <input type="submit" value="Find Employee Records" name="submit" 
    style="padding: 10px 20px; background: #333; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 14px; transition: background 0.3s ease;">
</form>

</body>
</html>