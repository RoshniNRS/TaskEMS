<html>
    <head>
        <title>Your Edit mode on!!</title>
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
        <?php
            $id=$_GET['id'];
            include("connection.php");
            
            $sqli="SELECT * FROM emp_data1 WHERE id=$id";

            $result= mysqli_query($conn,$sqli);
            $row= mysqli_fetch_assoc($result);

            /*Assigning db values to variable*/
            $first_name = $row['f_name'];
            $last_name = $row['l_name'];
            $mobile = $row['emp_mobile'];
            $salary = $row['emp_salary'];
            $email = $row['emp_email'];


        ?>
      <form action="update.php" method="post">
        <div class="register_emp">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <h1>Update Data</h1>
            <div class="details">
                <input type="text" placeholder="First Name" name="fname" value="<?php echo $first_name;?>" required="required">
            </div>
            <br>
            <div class="details">
                <input type="text" placeholder="Last Name" name="lname" value="<?php echo $last_name;?>"required="required">    
            </div>
            <br>
            <div class="details">
                <input type="text" placeholder="Mobile"  name="mobile" value="<?php echo $mobile;?>">
            </div>
            <br>
            <div class="details">
                <input type="text" placeholder="Salary"  name="salary" value="<?php echo $salary;?>">
            </div>
            <br>
            <div class="details">
                <input type="text" placeholder="Email-Id" name="email" value="<?php echo $email;?>">
            </div>
            <br>
            <button type="submit" name="" >Update</button>
        </div>
     </form>
    </body>
</html>
