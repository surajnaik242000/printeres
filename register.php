<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
</head>
<body>
<?php
    require('define.php');
    include 'validatereg.php';
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) 
    {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($db, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($db, $email);
        $dob    = stripslashes($_REQUEST['dob']);
        $dob  = mysqli_real_escape_string($db, $dob);
        $phtype  = stripslashes($_REQUEST['phtype']);
        $phtype  = mysqli_real_escape_string($db, $phtype);
        $phnumber    = stripslashes($_REQUEST['phnumber']);
        $phnumber  = mysqli_real_escape_string($db, $phnumber);
        $address  = stripslashes($_REQUEST['address']);
        $address  = mysqli_real_escape_string($db, $address);
        $state    = stripslashes($_REQUEST['state']);
        $state    = mysqli_real_escape_string($db, $state);
        
        $pass = stripslashes($_REQUEST['pass']);
        $password = mysqli_real_escape_string($db, $pass);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into user_details (username, email, password, create_datetime)
                     VALUES ('$username', '$email' ,'" . md5($password) . "','$create_datetime');";
        $result = mysqli_query($db, $query);
        
        if ($result) 
        {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='/printeres/html/firstscreen.html'>Login</a></p>
                  </div>";
        } 
        else 
        {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='/printeres/html/registration.html'>register</a> again.</p>
                  </div>";
        }
    } 
    else 
    {
              header("Location:/printeres/html/registration.html");
                exit();
    }
?>
</body>
</html>