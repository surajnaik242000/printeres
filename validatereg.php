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

foreach ($_POST as $key => $value) 
{
	if(!isset($value))
	{
		print("$key is empty");
		exit();
	}
}

if( $password!==$passwordConfirm )
{
	die('<script>alert("Passwords do not match")</script>'); 
}



?>


