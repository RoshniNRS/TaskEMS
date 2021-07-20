<html>
    <head>
        <title>Employee Login</title>
        <link rel="stylesheet" href="emp_login.css" type="text/css">
    </head>
    <body>
        <form action="empdetails.php">
           <div class="login-box">
              <h2>Login</h2>
                    <div class="user-box">
                        <input type="text" name="u_name" id="uname" required="required">
                        <label>Username</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="pass" id="pass" required="required">
                        <label>Password</label>
                    </div>
                    <button type="submit" name="btn_submit" onclick="validate()">Submit</button>
            </div>     
       </form>
    </body>
    <script type="text/javascript">
       function validate()
       {
            var username=document.getElementById("uname").value;
            var password=document.getElementById("pass").value;
       }
    </script>
</html>
