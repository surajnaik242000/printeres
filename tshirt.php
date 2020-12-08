<DOCTYPE! html>
<html>
<head>
	<title>Final Step</title>
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 

</head>
<body>
<?php
require('auth.php');
require('getid.php');
if(isset($_POST['submit']))
{
	$selected_size = $_POST['Size'];  
	$details = $_POST['details'];
echo "
<div>
	<div class='header '>
		<h4>Final Step</h4>
	</div>
	<div class='container-fluid pt-4 '>
		<div class='row'style='background:#96ffb9'>
		<p class='col-sm-6'>Name<p>
		<strong class='col-sm-6'>".$_SESSION['username']."</strong>

		<p class='col-sm-6'>You have selected : </p> 
		<strong class='col-sm-6'>" .$selected_size."</strong>
		<p class='col-sm-6'>Details : </p>
		<strong class='col-sm-6'>".$details."</strong>
		</div>
	</div>
</div>

	";  

}

?>
</body>
</html>