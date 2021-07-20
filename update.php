<?php

   $id=$_POST['id'];
   $firstname=$_POST['fname'];
   $lastname=$_POST['lname'];
   $mobile=$_POST['mobile'];
   $salary=$_POST['salary'];
   $emailid=$_POST['email'];

   include("connection.php");

   $sqli="UPDATE `emp_data1` SET `f_name`='$firstname',`l_name`='$lastname',`emp_mobile`='$mobile',`emp_salary`='$salary',`emp_email`='$emailid' WHERE id=$id";

   $update=mysqli_query($conn,$sqli);
   if($update)
   {
       header("Location:empdetails.php");
   }
?>