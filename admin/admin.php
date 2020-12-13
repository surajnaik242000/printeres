<html>
    <head>
        <meta charset="UTF-8">
        <title>PrintAnywhere</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="../css/admin.css" type='text/css'/>
    </head>
<body class="container-fluid">
<?php

  require('../define.php');
  require('adminauth.php');
  $ordertypes=array('CUP','TSHIRT','Case');
  foreach ($ordertypes as $value) 
  {
  
  $query= " select order_no,o_payment from orders where o_type='$value' ";
  $result= mysqli_query($db,$query);
  $n=mysqli_num_rows($result);
  $item=strtoupper($value);
  echo "<h4 style='color:white'>$item</h4>
  <table border=1 class='table table-dark table-borderless'>
  <tr><th>order no</th><th>payment</th></tr>";
  while($rowss = mysqli_fetch_assoc($result))
  {
  $id= $rowss['order_no'] ;
  if($rowss['o_payment']==-1)
  {	$p="not paid"; $styling="background:#3b3b3b";}
  else
  {	$p="paid"; $styling="background:#000000";} 
  $tr="<tr style='$styling'><td>$id</td><td id='$id'>$p</td></tr>";
  echo "$tr" ;
	}
	echo"</tbody></table> <br><br>";
}
?>
</body>
</html>