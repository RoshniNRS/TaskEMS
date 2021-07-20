<?php

$id=$_GET['id'];

include("connection.php");

$sqli ="DELETE FROM `emp_data1` WHERE id=$id";

$delete = mysqli_query($conn,$sqli);
if($delete)
{
    header("Location:empdetails.php");
}
?>
