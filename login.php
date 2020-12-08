<DOCTYPE! html>
<html>
<head>
  <title>Login Page </title>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body class="container-fluid bg-dark">
<?php
require('define.php');
session_start();
if(isset($_REQUEST['username']))
{
	 $username = stripslashes($_REQUEST['username']);    // removes backslashes
    $username = mysqli_real_escape_string($db, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($db, $password);

   $query    = "SELECT * FROM `user_details` WHERE username='".$username."' AND password='" . md5($password) . "'";
   $result = mysqli_query($db,$query) or die(mysql_error());
           $rows = mysqli_num_rows($result);
   if ($rows == 1) 
   	{
        $_SESSION['username'] = $username;
        // Redirect to user dashboard page
        header("Location: /printeres/dashboard.php");
    } else 
    {
        echo "<div class='alert alert-danger'>
              <h3>Incorrect Username/password.</h3><br/>
              <p class=''>Click here to <a href='login.php'>Login</a> again.</p>
              </div>";
    }

}
else
{
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Try Again</strong><br> The details provided were incorrect.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
 <form class="form d-flex p-2 justify-content-center" method="post" name="login" action="login.php">
  <div class="d-flex flex-column">
        <h3 class="text-success p-2">Login</h3>
        <input type="text" class="form-group p-2" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="form-group p-2" name="password" placeholder="Password"/>
        <input class="btn btn-primary p-2" type="submit" value="Login" name="submit" class="login-button"/>
  </div>
  </form>
    <hr>
        <p class="link"><a href="/printeres/html/registration.html">New Registration</a></p>

<?php
    }
?>
</body>
</html>