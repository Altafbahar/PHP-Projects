<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
<form action="delete.php" method=post >
    <table border=1>

<tr>
    <th>student id for delete</th>
    <th><input type= text name= txtid></th>
</tr>

<tr>
<td></td>
<td> <input type =submit  value= search name=btnsubmit></td>
</tr>


    </table>
</form>
<?php
if(isset($_POST['btnsubmit']))
{
    $eid= $_POST['txtid'];
    $mycon =mysqli_connect("localhost","root","","mynewdatabase");
    $sql= "select*from emp where empid=".$eid;
    $record= $mycon->query($sql);
    $n= mysqli_num_rows($record);
    if($n>0)
    {
        session_start();
        $_SESSION['$empid'] = $eid;
        echo "<table border = 1>";
        echo "<tr><th>Emp ID</th> <th>Emp Name</th> <th>Salary</th> <th>dempartment</th></tr>";
        //fetch_row    fetch_assoc for fetching the data from table
        while($row=mysqli_fetch_assoc($record))
        {
            echo "<tr>";
            echo "<td>".$row['empid']."</td>";
            echo "<td>".$row['empname']."</td>";
            echo "<td>".$row['salary']."</td>";
            echo "<td>".$row['department']."</td>";
            echo "<form method=post action= deletedata.php>";
            echo "<td> <input type= submit value= delete></td>";
            echo "</form>";
            echo "</tr>";

    
            //echo $row['empid']."".$row['empname']."".$row['salary']."".$row['department'];
            //echo $row[0]."".$row[1]."".$row[2]."".$row[3]."".$row[4];
            //echo "<br>";
            echo "</tr>";
        }
        echo "</table>";} 
    else
    echo "notfound";
    
};

?>





    </center>
</body>
</html>