<html>
    <head>
        <title>Add Employee</title>
        <style>
            body{
                  background-image:url("https://images.pexels.com/photos/1642770/pexels-photo-1642770.jpeg?cs=srgb&dl=pexels-johannes-plenio-1642770.jpg&fm=jpg");
                  background-repeat: no-repeat;
                  background-position: center center;
                  background-attachment: fixed;
                  background-size: cover;
            }
            .register_emp{
                  background-color: rgba(9, 9, 10, 0.5);
                  color:white;
                  text-align: justify;
                  width: 500px;
                  padding: 30px;
                  margin:0 auto;
                  margin-top: 50px;
                  box-sizing: border-box;
                  box-shadow: white;
                  border-radius: 10px;
            }
            .register_emp h2 {
                  margin: 0 0 30px;
                  padding: 0;
                  color:white ;
                  text-align: center;
                  font-weight: bolder;
            }
            .register_emp .details{
                  position: relative;
            }
            input[type="text"]{
                  width:90%;
                  height:10%;
                  color:white;
                  padding:10px;
                  background-color:black;
                  color:white;
                  border:none;
                  border-radius:35px;
                  border:1px solid blue; 
                  outline:none;
                  transition:0.25px;
            }
            input[type="text"]:focus{
                  width:100%;
                  border:2px solid green;
            }
            button[type="submit"]{
                  padding:5px;
                  width:40%;
                  height:40px;
                  background-color:black;
                  color:white;
                  font-size:20px;
                  font-weight:bold;
                  text-align:center;
                  border:none;
                  border-radius:35px;
                  border:1px solid red;
                  cursor:pointer;
            }
            button[type="submit"]:focus{
                  width:50%;
                  border:2px solid green;
            }
        </style>
    </head>
    <body>
      <form method="post">
        <div class="register_emp">
            <h2>Registration Info</h2>
            <div class="details">
                <input type="text" placeholder="First Name" name="fname" required="required">
            </div>
            <br>
            <div class="details">
                <input type="text" placeholder="Last Name" name="lname" required="required">    
            </div>
            <br>
            <div class="details">
                <input type="text" placeholder="Mobile"  name="mobile">
            </div>
            <br>
            <div class="details">
                <input type="text" placeholder="Salary"  name="salary">
            </div>
            <br>
            <div class="details">
                <input type="text" placeholder="Email-Id" name="email">
            </div>
            <br>
            <button type="submit" name="submit">Submit</button>
        </div>
     </form>
    </body>
</html>
<?php
   include("connection.php");

   if(isset($_POST['submit']))
     {
       $data_1=$_POST["fname"];
       $data_2=$_POST["lname"];
       $data_3=$_POST["mobile"];
       $data_4=$_POST["salary"];
       $data_5=$_POST["email"];

       $sqli = "INSERT INTO `emp_data1`(`id`, `f_name`, `l_name`, `emp_mobile`, `emp_salary`, `emp_email`) VALUES ('[]','$data_1','$data_2','$data_3','$data_4','$data_5')";
       $submit= mysqli_query($conn,$sqli);      
       if($submit){
           header("Location:empdetails.php");
       }
    }
?>