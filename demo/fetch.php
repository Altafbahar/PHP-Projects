<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fetch.css">
</head>
<body>
    <center>


    <?php

if(isset($_POST['submit']))
{
$mycon =mysqli_connect("localhost","root","","mynewdatabase");


$sql = "select*from emp";
$record= $mycon->query($sql);
$n= mysqli_num_rows($record);
//echo "total record".$n;

    if($n > 0) {
        echo "<div class='table'>";

        // Header row
        echo "<div class='row header'>";
        echo "<div class='cell'>Emp ID</div>";
        echo "<div class='cell'>Emp Name</div>";
        echo "<div class='cell'>Salary</div>";
        echo "<div class='cell'>Department</div>";
        echo "</div>";

        // Data rows
        while($row = mysqli_fetch_assoc($record)) {
            echo "<div class='row'>";
            echo "<div class='cell'>" . htmlspecialchars($row['empid']) . "</div>";
            echo "<div class='cell'>" . htmlspecialchars($row['empname']) . "</div>";
            echo "<div class='cell'>" . htmlspecialchars($row['salary']) . "</div>";
            echo "<div class='cell'>" . htmlspecialchars($row['department']) . "</div>";
            echo "</div>";
        }

        echo "</div>";  // close table div
    } else {
        echo "<font color='red' size='5'>Record not found</font>";
    }

    mysqli_close($mycon);
}
?>
<form action="delete.php" method="post">
<h3>Delete the Data of Employee</h3>
<button type="submit">Search to Delete</button>

</form>


    </center>
</body>
</html>