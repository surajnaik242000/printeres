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
   print($query);
   $result = mysqli_query($db,$query) or die(mysql_error());
           $rows = mysqli_num_rows($result);
   if ($rows == 1) 
   	{
        $_SESSION['username'] = $username;
        // Redirect to user dashboard page
        header("Location: /printeres/dashboard.php");
    } else 
    {
        echo "<div class='form'>
              <h3>Incorrect Username/password.</h3><br/>
              <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
              </div>";
    }

}
else
{
?>
<h1>Try Again</h1><br>
 <form class="form" method="post" name="login" action="login.php">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.html">New Registration</a></p>
  </form>
<?php
    }
?>