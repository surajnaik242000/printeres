<?php
require('define.php');

// GETTING : USERNAME.ID.EMAIL.ADDRESS.STATE.PHNUMBER
$query_1 = " SELECT u1.username,u1.id,u1.email,u2.address,u2.state,u2.phnumber FROM  user_details u1,user_rest u2 WHERE u1.username='".$_SESSION['username']."' AND u1.id=u2.user_id";
$result_1 = mysqli_query($db,$query_1);
if(mysqli_num_rows($result_1)==1)
{
	$row = mysqli_fetch_assoc($result_1);
	$id= $row['id'];
	$em= $row['email'];
	$ad= $row['address'];
	$st= $row['state'];
	$pn= $row['phnumber'];
}

?>
