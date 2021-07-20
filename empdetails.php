<html>
    <head>
        <title>Employee Details</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


        <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <style type="text/css">
            body{
                background-color:white;
            }
            button{
                margin:0 auto;
                background-color: rgb(36, 224, 30);
                padding:10px;
                width:150px;
                color:white;
                font-weight: bold;
            }
            table {
                    border-collapse: collapse;
                    position:center center;
                    background-attachment: fixed;
                    background-size: cover;
                    width: 100%;
                    color: #588c7e;
                    font-family: 'Times New Roman', Times, serif;
                    font-size: 20px;
                    text-align: center;
                    border:1px solid black;
                    margin-top: 200px;
                  }
               th {
                    background: #141E30;
                    background: -webkit-linear-gradient(to bottom, #243B55, #141E30);  
                    background: linear-gradient(to bottom, #243B55, #141E30); 
                    color: white;
                    padding:10px;
                    border:1px solid black;
                  }
               td {
                    background-color: bisque;
                    border:1px solid rgb(13, 0, 61);
                    color:black;
               }
        </style>
    </head>
    <body>
        <table id="emp_details">
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mobile</th>
                <th>Salary</th>
                <th>Email</th>
                <th>View</td>
                <th>Edit</td>
                <th>Delete</td>
            </tr>
           <?php
                
                include("connection.php");    /*connecting database to php*/

                $sqli="SELECT * FROM emp_data1"; /*Query to select data from database*/

                $result= mysqli_query($conn,$sqli);

                while($row = mysqli_fetch_assoc($result))
                {
                    $id= $row['id'];
                    echo '<tr>';
                    echo '<td>'.$row['id'].'</td>';
                    echo '<td>'.$row['f_name'].'</td>';
                    echo '<td>'.$row['l_name'].'</td>';
                    echo '<td>'.$row['emp_mobile'].'</td>';
                    echo '<td>'.$row['emp_salary'].'</td>';
                    echo '<td>'.$row['emp_email'].'</td>';
                    echo "<td><a href='view.php?id=$id'><i class='icon-eye-open'></i>View</a></td>";
                    echo "<td><a href='edit.php?id=$id'><i class='icon-pencil'></i>Edit</a></td>";
                    echo "<td><a href='delete.php?id=$id'><i class='icon-trash'></i>Delete</td>";
                    echo '</tr>';
                }
                

           
           ?>
        </table>
        <br>
       <div>
         <form action="new_emp.php">
           <button type="submit" name="" >+New Employee</button>
         </form>
       </div>
    </body>
    <!--Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>