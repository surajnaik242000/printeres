<?php
	
	// Define.php has already been included in the parent program
	function generateon($item,$db)	
	{
	$randnum = rand(10000,99999);
	$oid=$item.$randnum;
	$query = " SELECT order_no from orders where order_no=$oid";
	$result = mysqli_query($db,$query);
	if(!$result)
	{
		return($oid);
	}
	else
	{
		generateon($item,$db);
	}
}
?>