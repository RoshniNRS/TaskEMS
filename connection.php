<html>
<body>
<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="ems";
    $conn= mysqli_connect($host,$username,$password);
    mysqli_select_db($conn,$database);
?>
<body>
</html>