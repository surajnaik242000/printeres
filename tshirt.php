<DOCTYPE! html>
<html>
<head>
	<title>Final Step</title>
	  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script> 
<link rel="stylesheet" href="invoice.css">

</head>
<body>
<?php
require('auth.php');
// require('define.php');
require('getid.php');
// get id of username and insert the order number into another 	
// table .
require('orderidgen.php');
if(isset($_POST['submit']))
{
	$selected_size = $_POST['Size'];  
	$details = $_POST['details'];
	$order_id = generateon('tshirt',$db);
	$total=0;
	$odate = date('Y-m-d H:i:s') ;
echo "
		INSERT into table orders values '$order_id',$id , '$ad', $total ,-1,'$details size : $selected_size' , 'TSHIRT' , '$odate'
	"; 
}

?>
</body>
</html>