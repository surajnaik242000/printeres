<?php 
$username = $_POST['username'];
$email = $_POST['email'];
$dob =  $_POST['dob'];
$phtype =  $_POST['phtype'];
$phnumber =  $_POST['phnumber'];
$address = $_POST['address'];
$state = $_POST['state'];

$password = $_POST['pass'];
$passwordConfirm = $_POST['cpass'];
$errors="";
$flag=1;

// checking username availability 
 $query    = "SELECT * FROM `user_details` WHERE username='".$username."'";
 $result = mysqli_query($db,$query) or die(mysql_error());
           $rows = mysqli_num_rows($result);
 if ($rows == 1) 
   	{
        $errors=$errors."<br> error : username ".$username." not available ";
        $flag=0;
    }

foreach ($_POST as $key => $value) 
{
	if(!isset($value))
	{
		print("$key is empty");
		$flag=0;
		exit();
	}
}

if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
{
	$errors=$errors."<br>error : username can contain only characters and numbers";
	$flag=0;
}
if(!preg_match("/^[0-9]*$/", $phnumber))
{
	$errors=$errors."<br> error : phone number can contain only digits ";
	$flag=0;
}
if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)) 
{
	$errors=$errors."<br> error : email format wrong ";
	$flag=0;
}
if( $password!==$passwordConfirm )
{
	die('<script>alert("Passwords do not match")</script>'); 
	$flag=0;
}

if( $flag==0 )
{
	print($errors);
	exit(1);
}

?>


