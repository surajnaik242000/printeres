<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
        $dob    = strtotime($_REQUEST['dob']);
        $dob  = date('Y-m-d H:i:s',$dob);
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
        
        $queryr=" INSERT into user_rest ( phtype , phnumber , dob , state , address ) VALUES ('$phtype','$phnumber','$dob','$state','$address')";
        $resultr=mysqli_query($db,$queryr);

        if ($result) 
        {
            echo "<div class='form container'>
                  <h3 class='alert alert-success'>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='/printeres/html/firstscreen.html'>Login</a></p>
                  </div>";
        } 
        else 
        {
            echo "<body class='bg-dark'>
                <div class='container'>
                  <h3 class='alert alert-danger row justify-content-center'>Required fields are missing.</h3><br/>
                   <a href='/printeres/html/registration.html' class='btn btn-warning row justify-content-center'>register again</a>
                  </div></body>";
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